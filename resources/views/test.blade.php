@extends('layouts.app')

{{-- 定義 content section 的內容 --}}
@section('content')

<div class="container">
    <div class="row justify-content">
        @include('layouts.test')
        <div class="col-md-8">
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://upload.cc/i1/2019/04/09/SOphxF.jpg" width="100%" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img src="https://upload.cc/i1/2019/04/09/SOphxF.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img src="https://upload.cc/i1/2019/04/09/SOphxF.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div>
        <hr>
    </div>
</div>
@endsection

