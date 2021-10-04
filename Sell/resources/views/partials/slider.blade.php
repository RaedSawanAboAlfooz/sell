<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-md-down-none " >
         <img src="{{asset('assets/images/11.jpg')}} " alt="profile" height="30" width="30" style="border: solid whit ; border-radius: 50px 50px 50px 50px ; margin-right: 10px" >
                   Mada
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
        <use xlink:href="assets/brand/coreui-pro.svg#signet"></use>
        </svg>
        </div>
    <ul class="c-sidebar-nav">
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="{{ route('slider.index') }}"> Slider</a>
    </li>

    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="{{ route('category.index') }}"> Categorye</a>
    </li>

    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="{{ route('city.index') }}"> Citys</a>
    </li>


    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="{{ route('unAccept') }}"> All Products UnAccept</a>
    </li>
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="{{route('Accepted') }}"> All Products Accepted</a>
    </li>


    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href=""> Producr </a>
    </li>



     <li class="c-sidebar-nav-item">

        <a class="c-sidebar-nav-link" href="/"  href=""
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
            log out </a>
      </li>
    </ul>
</div>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
