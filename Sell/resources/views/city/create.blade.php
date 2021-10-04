@extends('layouts.app')
@section('content')

    <style>
        input{
            text-align: left;
        }
        #content{
            padding: 100px;
            text-align: left;
            margin-top: 3%;
            width: 40%;
        }
    </style>
    <div class="container card-header" id="content">
        <form action="{{route('city.store')}}" method="POST"  enctype="multipart/form-data">
            <div class="mb-3">
                <label  for="exampleInputEmail1" class="form-label">name City</label>
                <input type="text" class="form-control" name="name" value="name" placeholder="name Category"  id="exampleInputEmail1"  >
            </div>

            <button type="submit" class="btn btn-primary">create</button>
            @csrf
            @method('POST')
        </form>
    </div>
@endsection
