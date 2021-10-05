@extends('layouts.app' )
@section('content')
    <style>
        #table {
            text-align: right;
        }
        #add{
            width: 12%;
            margin-bottom: 3%;
            padding: 1%
        }
    </style>
    <div class="container" id="table">
        <div class="card"  style="padding-top:2%" >


              <form class="col" action="{{ route('city.create') }}">
              @csrf
              <button type="submit" id="add" class="btn btn-outline-dark" style="width: 12%">add City</button>
              </form>


        </div>
        <div class="card" style="padding: 20px" >
        <table class="table table-dark    table-hover ">
            <thead>
            <th scope="col"><center>Action</center></th>
            <th scope="col">name</th>
            <th scope="col">id</th>
            </thead>
            <tbody>
            @foreach($city as $item)
                <tr>
                    <td class="table-active">
                        <div class="row  ">
                            <div class="col">
                                <form method="post" action="{{route('city.destroy',$item->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">delete</button>
                                </form>
                            </div>
                            <div class="col">
                                <form method="put" action="{{ route('city.edit',$item) }}">
                                    @csrf
                                    @method('PUT')
                                        <button type="submit" class="btn btn-outline-warning">update</button>
                                </form>
                            </div>
                            <div class="col">
                                <form  action="{{ route('city.show',$item) }}">
                                    @csrf
                                    @method('GET')
                                    <button type="submit" class="btn btn-outline-primary">show Produts from Category</button>
                                </form>
                            </div>
                        </div>
                    </td >
                        <td class="table-active">
                            {{$item->name}}
                        </td>
                    <th scope="row"  style="width: 5%"> {{$item->id}}</th>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center ">
            {!!$city ->links("pagination::bootstrap-4")!!}
        </div>
    </div>
    </div>

@endsection


