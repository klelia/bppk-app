@extends('layouts.app')
@section('content')
<div class="p-5 mb-4 bg-light rounded-3 text-center">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Lara-library</h1>
        <p class="fs-4">Come to find out our amazing books collection</p>
        <button class="btn btn-primary btn-lg" type="button">Find out more</button>
    </div>
</div>
<div class="books py-5">
    <div class="container">

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
    @foreach ($books as $book)
    <div class="carousel-item {{$loop->first ? 'active': ''}}">
        <img src="{{$book->cover_image}}" class="d-block" alt="{{$book->title}}">
      </div>
    @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
    </div>
</div>
<div class="books py-5">
    <div class="container">
        <div class="row">
            @forelse ($books as $book)
            <div class="col">
                <div class="card">
                    <img class="card-img-top" src="{{$book->cover_image}}" alt="">
                    <div class="card-body">
                        <h3 class="card-title">
                            {{$book->title}}
                        </h3>
                        <p class="card-text">
                            {{$book->plot}}
                        </p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                Sorry no books yet!
            </div>
            @endforelse
        </div>
    </div>
</div>

@endsection
