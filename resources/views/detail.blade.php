@extends('master')
@section("content")

<div class="container">   
    <div class="row">
        <div class="col-sm-6">
            <img class="img-detail" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go back</a>
            <h2>{{$product['name']}}</h2>
            <h3>Price : {{$product['price']}}</h3>
            <h4>Description : {{$product['description']}}</h4>
            <h5>Category : {{$product['category']}}</h5>
            <br><br><br>
            <button class="btn btn-primary">Add to Cart</button>
            <button class="btn btn-success">Buy Now</button>
            <br><br><br>
        </div>
    </div> 
</div>
@endsection