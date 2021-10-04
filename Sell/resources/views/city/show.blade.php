@extends('layouts.app')
@section('content')
    <style>
        #table {
            margin-top:.5s%;
            text-align: right;
        }
        #add{
            width: 12%;
            margin-bottom: 3%;
            padding: 1%
        }
    </style>
    <div class="container" id="table">

        <div class="card" style="padding: 2%">
        <table class="table table-dark    table-hover ">
            <thead>
            <th scope="col">price</th>
            <th scope="col">discrption</th>
            <th scope="col">name</th>
            <th scope="col"> </th>
            </thead>
            <tbody>
            @foreach($products as $item)
                <tr>
                   <td class="table-active">{{$item->price}}</td>
                     <td class="table-active">{{$item->description}}</td>
                    <td class="table-active">{{$item->name}}</td>
                    <th scope="row">{{$i++}}</th>
                </tr>
            @endforeach

            </tbody>

        </table>
         <div class="d-flex justify-content-center ">
                {{$products->links("pagination::bootstrap-4") }}
         </div>
        </div>
    </div>
@endsection
