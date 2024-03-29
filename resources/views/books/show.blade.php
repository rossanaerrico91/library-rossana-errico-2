@extends('layouts.app')
@section('content')
    <div class="container  d-flex justify-content-center">
        <div class="card col-5">
            <img src="{{ Storage::url($book->image) }}" class="card-img-top img-thumbnail" alt="{{ $book->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $book->title }}</h5>
                <p class="card-text">There are {{ $book->pages }} pages in this book</p>
            </div>
        </div>
    </div>
@endsection
