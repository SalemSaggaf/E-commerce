@extends('index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2"  style="float:right">
            <div class="panel panel-default">
            <br><br>
                <div class="panel-heading" style="float:right">اﻟﺪﺧﻮﻝ:</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                               

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <br><br>
                            <label for="email" class=" control-label" style="float:right">اﻟﺒﺮﻳﺪ اﻻﻟﻜﺘﺮﻭﻧﻲ</label>
                                 <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class=" control-label" style="float:right">ﻛﻠﻤﺔ اﻟﺴﺮ</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4" >
                                <div class="checkbox">
                                    <label style="float:right">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> ﺗﺬﻛﺮﻧﻲ
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    اﻟﺪﺧﻮﻝ
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    ﻧﺴﻴﺖ ﻛﻠﻤﺔ اﻟﺴﺮ؟
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
