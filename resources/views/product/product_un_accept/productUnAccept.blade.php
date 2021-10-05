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
             <th scope="col">Action</th>
            <th scope="col">Status Sell</th>
            <th scope="col">User</th>
            <th scope="col">Address</th>
            <th scope="col">Price</th>
            <th scope="col">Category</th>
            <th scope="col">Description</th>
            <th scope="col">Name</th>
            <th scope="col">Id</th>
            </thead>
            <tbody>
            @foreach($products as $item)

                <tr>
                    <td class="table-active">
                        <div class="row">
                            <div class="col">
                                <form  action="{{ route('accept',$item->id)}}" method="post" >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-primary">Accept</button>
                                </form>
                            </div>
                        <div style="width: 30px;height:10px;" ></div>
                            <div class="col">
                                <form  action="{{route('productunaccept.show',$item)}}"  >
                                    @csrf
                                     <button type="submit" class="btn btn-outline-dark" style="width:70px ">Show</button>
                                </form>
                            </div>
                            <div style="width: 10px" ></div>
                        </div>
                    </td>
                    <td class="table-active">
                        @if ($item->status_sell)
                            sold
                        @endif
                        @if (!$item->status_sell)
                        Unsoll
                    @endif
                    </td>
                    <td class="table-active">{{$item ->user['name']}}</td>
                    <td class="table-active">{{$item->address}}</td>
                    <td class="table-active">{{$item->price}}</td>
                    <td class="table-active">
                        @if ($item->category!=null)
                            {{ $item->category->name }}
                        @endif


                    </td>
                    <td class="table-active">{{$item->description}}</td>
                    <td class="table-active">{{$item->name}}</td>
                    <th scope="row">{{$item->id}}</th>
                </tr>
            @endforeach
            </tbody>

        </table>
         <div class="d-flex justify-content-center ">
                {!!$products ->links("pagination::bootstrap-4")!!}
             </div>
        </div>
    </div>
@endsection
