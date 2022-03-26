@extends('layouts.layout')
@section('content')

    <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.ixbt.com/img/n1/news/2021/7/1/samsung-galaxy-s22-ultra_large.jpg" width="1800" alt="Los Angeles">
            </div>
            <div class="carousel-item">
                <img src="https://mobidevices.ru/images/2021/06/Galaxy-S22_1.jpg" width="1800" alt="Chicago">
            </div>
            <div class="carousel-item">
                <img src="https://www.ixbt.com/img/n1/news/2021/7/1/samsung-s22-ultra-microsd-1024x676_large.jpg" width="1800" alt="New York">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <div class="row">
       <div class="col-md-3">
           <nav class="navbar bg-light">
               <!-- Links -->
               <ul class="navbar-nav w-100">
                   @foreach(\App\Models\Category::all() as $item)
                   <li class="nav-item">
                       <a class="nav-link   d-flex justify-content-around" href="#"><span>{{$item->name}}</span> <img src="{{asset('storage/'.$item->image)}}" class="rounded-circle" width="50" ></a>
                   </li>
                   @endforeach
               </ul>
           </nav>
       </div>

        <div class="col-md-9">
            <div class="row">
                @foreach(\App\Models\Product::all() as $item)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <img src="{{asset("storage/".$item->image)}}" width="100%" height="400">
                            </div>
                            <div class="card-body d-flex justify-content-around">
                                <h2>{{$item->name}}</h2>
                                <h3>{{$item->price}}</h3>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-danger">cart</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


    </div>

@endsection
