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
    <form action="{{route('city.update',$city   )}}" method="POST"   enctype="multipart/form-data">
        <div class="mb-3">
            <label  for="exampleInputEmail1" class="form-label">name City</label>
            <input type="text" class="form-control "  name="name" placeholder="{{$city->name}}"  id="exampleInputEmail1" aria-describedby="emailHelp">
         </div>

        <button type="submit" class="btn btn-primary">update</button>
        @csrf
        @method('PUT')
    </form>
</div>
@endsection
