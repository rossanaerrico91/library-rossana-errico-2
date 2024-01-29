@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('books.store') }}" class="form" method="POST" enctype="multipart/form-data">
            @method('POST')
            @csrf
            
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control">

            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="pages" class="form-label">Pages</label>
            <input type="number" name="pages" class="form-control">

            @error('pages')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="image" class="form-label">Pages</label>
            <input type="file" name="image" class="form-control">

            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            {{--@if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif--}}

            <button type="submit" class="btn btn-primary mt-4">Create</button>
        </form>
    </div>
@endsection
