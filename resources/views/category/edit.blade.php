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
    <form action="{{route('category.update',$category)}}" method="POST"   enctype="multipart/form-data">
        <div class="mb-3">
            <label  for="exampleInputEmail1" class="form-label">name category</label>
            <input type="text" class="form-control "  name="name" placeholder="{{$category->name}}"  id="exampleInputEmail1" aria-describedby="emailHelp">
         </div>

         <div class="mb-3 ">
            <label  for="exampleInputEmail1" class="form-label">Image category</label><br><br>
            {{-- <input type="file" class="form-control"  name="name" placeholder="{{$category->name}}"  id="exampleInputEmail1" aria-describedby="emailHelp"> --}}
            <input type="file"  name="url_image" multiple><br><br>
           <center> <img src="{{asset('assets/images/Category/'.$category->name_image)}}" alt="{{asset('assets/images/Category/'.$category->name_image)}}" width="300px"></center>
         </div>
        <button type="submit" class="btn btn-primary">update</button>
        @csrf
        @method('PUT')
    </form>
</div>
@endsection
