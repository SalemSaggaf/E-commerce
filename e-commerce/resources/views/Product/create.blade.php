@extends('index')

@section('content')

<form class="form-horizontal" method="POST" action="{{ route('product.store') }}">
                        {{ csrf_field() }}
	<label for="name">Product Name :</label>
	<input type="text" name="name"/>
	<br>
	<label for="price">Price :</label>
	<input type="number" name="price"/>
	<br>
	<label for="image_url">hello</label>
	<input type="file" id="image_url" name="image_url" accept="image/*"  />
	<br>
	<label for="description">Description :</label>
	<input type="textarea" name="description"/>
	<br>
	<input type="submit" name="submit" value="Create"/>
</form>

@endsection