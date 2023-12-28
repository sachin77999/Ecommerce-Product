@extends('master')
@section('content')

<div class="container">
<div class="row">
<div class="col-sm-6">
<img class="detail-img" src="{{ $product['gallery'] }}" alt="">
</div>

<div class="col-sm-6">
<a href="/">Go Back</a>
<h2>Name : {{ $product['name'] }}</h2>
<h2>Price : {{ $product['price'] }}</h2>
<h4>Category : {{ $product['category'] }}</h4>
<h4>Description : {{ $product['description'] }}</h4>
<br><br> 
<button class="btn btn-primary">Add To Cart</button>
<br><br>
<button class="btn btn-primary">Buy Now</button>
</div>

</div>

@endsection