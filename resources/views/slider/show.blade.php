@extends('layouts.app')
@section('content')

     <center ><img style="width: 50%; height: 500px;" src="{{ asset('assets/images/slider/'.$slider ->image_name) }}" alt=""></center>
     <div class="container card" style="width:50%; height:40%;padding: 20px">
        <form action="{{route('slider.update',$slider,$slider->id)}}" method="POST" enctype="multipart/form-data">
           <div class="mb-3">
               <label  for="exampleInputEmail1" class="form-label">title slider</label>
               <input type="text" class="form-control" name="title"  value="{{ $slider->title  }}"  placeholder="title slider"  id="exampleInputEmail1"  >
           </div>
           <div class="mb-3">
               <label  for="exampleInputEmail1" class="form-label">description slider</label>
               <input type="text" class="form-control" name="description" value="{{ $slider->description  }}"  placeholder="description slider"  id="exampleInputEmail1"  >
           </div>
           <label  for="exampleInputEmail1" class="form-label">slider image</label>
           <input type="file"  name="url_image"   multiple ><br><br>
           <button type="submit" class="btn btn-primary">update</button>
           @csrf
        @method('PUT')
       </form>
       </div>
@endsection
