@extends('layouts.app') 
@section('content')

<!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
                
            @endif
            -->
<style>
</style>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: -30px;   border-top: 5px solid #01B9F5 ;    
">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://www.mytechlogy.com/upload/by_users/AndreaMaria/311710051336HowWillMachineLearningChangeDigitalMarketing.png"
                alt="First slide" style="height:440px;">
            <div class="carousel-caption d-none d-md-block">
                <h5>Learn Machine Learning</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://i1.wp.com/venturelab.ca/wp-content/uploads/2018/02/Blockchain-Technology.jpg?fit=800%2C400&ssl=1"
                alt="Second slide" style="height:440px;">
            <div class="carousel-caption d-none d-md-block">
                <h5>What is a Blockchain and how does it work?</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://images.yourstory.com/2017/12/cloud-computing.jpg?auto=compress" alt="Third slide"
                style="height:440px;">
            <div class="carousel-caption d-none d-md-block">
                <h5>Cloud Computing.</h5>
            </div>
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

<div class="jumbotron" style="background-color: #ADD8E6;border-top: 5px solid #01B9F5;    border-radius: 0 !important;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/nKIu9yen5nc?autoplay=1;" frameborder="1" allow="autoplay;"
                    allowfullscreen></iframe>

            </div>
            <div class="col-md-6">
                <h2>Create Future!</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed odio impedit iusto, eius, dolores quae
                        autem doloribus sint nisi quibusdam possimus debitis! Quos hic, vitae quo assumenda velit aspernatur
                        ipsam.
                    </p>
            </div>
        </div>
    </div>
</div>
<div class="jumbotron" style="background-color: #ADD8E6; margin-top:-40px;border-top: 5px solid #01B9F5;    border-radius: 0 !important;
">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Iaxqllb03n8" frameborder="1" allow="autoplay;" allowfullscreen></iframe>


            </div>
            <div class="col-md-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/vt79JcPfZQA" frameborder="0" allow="autoplay; encrypted-media"
                    allowfullscreen></iframe>

            </div>
            <div class="col-md-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/ozLaklIFWUI" frameborder="0" allow="autoplay; encrypted-media"
                    allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/SzJ46YA_RaA" frameborder="0" allow="autoplay; encrypted-media"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
@endsection