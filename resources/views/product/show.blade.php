@extends('layouts.app')
@section('content')
    <style>
        input{
            text-align: left;
        }
        #content{
            text-align: left;

            margin-top: 3%;
            width: 50%;
        }
    </style>
 <div class="container card-header" id="content" style="padding:3%">
@foreach ($product as $item )
<div class="row ">

<div>
<div class="contanier">
<h2>user name </h2>
</div>
<h4 style="color: red">{{$item->user->name }}</h4>
</div>

<div>
<div class="contanier">
 <h2>product name </h2>
 </div>
 <h4 style="color: red">{{$item->name }}</h4>
</div>

<div>
<div class="contanier">
<h2>product description </h2>
</div>
<h4 style="color: red">{{$item->description }}</h4>
</div>


<div>
<div class="contanier">
<h2>product address </h2>
</div>
<h4 style="color: red">{{$item->address }}</h4>
</div>

<div>
<div class="contanier">
<h2>product price </h2>
</div>
<h4 style="color: red">{{$item->price }}</h4>
</div>

<div>
    <div class="contanier">
    <h2>product city </h2>
    </div>
    <h4 style="color: red">{{$item->city->name }}</h4>
    </div>


<div>
    <div class="contanier">
    <h2>product category </h2>
    </div>
    <h4 style="color: red">{{$item->category->name }}</h4>
    </div>








</div>
<div class="row " ><br>
    <div class="contanier">
        <h2>imags</h2>
    </div>
@foreach ($item->imags as $image )
<img class="container col " src="{{asset('assets/images/products/'.$image ->image_name)}}" alt="{{asset('assets/images/products/'.$image ->image_name)}}" height='200px'  >
@endforeach
</div>
@endforeach
@endsection
