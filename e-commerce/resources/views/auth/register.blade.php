@extends('index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <br><br><br>
                <div class="panel-heading"  style="float:right">التسجيل</div>
                <br><br>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}" dir="rtl" lang="ar">
                        {{ csrf_field() }}
                        <label for="name" class=" control-label" style="float:right">االاسم</label>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label" style="float:right">البريد الالكتروني</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class=" control-label" style="float:right">كلمة السر</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="password-confirm" class=" control-label" style="float:right">تأكيد البريد الالكتروني</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="phone_number" class=" control-label" style="float:right">رقم التليفون</label>

                      <div class="col-md-6">
                                <input id="phone_number" type="text" class="form-control" name="phone_number" required>
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    التسجيل
                                </button>
                                 <button type="submit" class="btn btn-primary">
                                    الغاء
                                </button>
                            </div>
                             
                               

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
