@extends('layouts.app')
@section('content')
<div class="p-5 mb-4 bg-light rounded-3 text-center">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">All Books</h1>
        <p class="fs-4">The best online book shop</p>
        <button class="btn btn-primary btn-lg" type="button">Find out more</button>
    </div>
</div>

<div class="container">

        @foreach ($books as $book)
            <p>{{$book->title}}</p>


        @endforeach

</div>

@endsection
