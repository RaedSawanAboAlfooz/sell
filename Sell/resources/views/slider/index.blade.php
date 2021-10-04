@extends('layouts.app')
@section('content')
{{-- {{route('city.store')}}  --}}
{{-- <div style="margin-bottom: 4%" class="container "><center><a href="{{ route("slider.create") }}"><button type="submit" class="btn btn-primary">create new image from slider </button></a></center></div> --}}

{{-- model create new slider  --}}
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
{{-- end  model create new slider  --}}





  <div style="margin-left: 15%;margin-right: 15%" id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    @if (count($images)>1)
       <ol class="carousel-indicators " style="margin-bottom: 6%">
    @for ($i=0 ;$i<count($images);$i++)
        @if ($i==0)
         <li data-target="#myCarousel" data-slide-to="".$i class="active"></li>
        @else
        <li data-target="#myCarousel" data-slide-to="".$i></li>
        @endif
    @endfor
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner   " >
        @foreach($images as $image)
        <div class="{{ $loop->first }}active item carousel-item" data-slide-number="{{ $loop->index }}">
           <img src="{{asset('assets/images/slider/'.$image ->image_name)}}" class="img-fluid" alt="slider-listing" style="width: 965px; height: 500px;">
           <div class="row gx-5">
            <div class="col" style="margin-left: 20%">
                <form method="post" action="{{route('slider.destroy',$image )}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">delete</button>
                </form>
            </div>
            <div class="col">
                <form method="get" action="{{route('slider.show',$image)}}">
                    @csrf
                    <button type="submit" class="btn btn-success">update</button>
                </form>
            </div>
          </div>
        </div>
     @endforeach
    </div>

    {{-- <form method="post" action="{{route('slider.destroy',$image )}}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-outline-danger">delete</button>
    </form> --}}



    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
    @else

    @if (count($images)==1)
        <img style="width: 965px; height: 500px;" src="{{ asset('assets/images/slider/'.$images[0] ->image_name) }}" alt="">
    @else
          no slider in data base
    @endif



     @endif

  </div>

@endsection
