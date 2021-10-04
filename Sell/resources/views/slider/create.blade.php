@extends('layouts.app')
@section('content')
<div class="container card" style="width:50%; height:40%;padding: 20px">
 <form action="{{route('slider.store')}}" method="POST"  enctype="multipart/form-data">
    <div class="mb-3">
        <label  for="exampleInputEmail1" class="form-label">title slider</label>
        <input type="text" class="form-control" name="title"   placeholder="title slider"  id="exampleInputEmail1"  >
    </div>
    <div class="mb-3">
        <label  for="exampleInputEmail1" class="form-label">description slider</label>
        <input type="text" class="form-control" name="description"  placeholder="description slider"  id="exampleInputEmail1"  >
    </div>
    <label  for="exampleInputEmail1" class="form-label">slider image</label>
    <input type="file"  name="url_image" multiple><br><br>
    <button type="submit" class="btn btn-primary">create</button>
    @csrf
    @method('POST')
</form>
</div>
@endsection
