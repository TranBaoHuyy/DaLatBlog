@extends('adminlte::page')
@section('title', 'Edit Cuisine')
@section('content_header')
    <h1>Edit Cuisine</h1>
@stop
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('cuisines.update', $blog) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $cuisines->title) }}" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="titleLocation">Title Location</label>
                    <input type="text" class="form-control @error('titleLocation') is-invalid @enderror" id="titleLocation" name="titleLocation" value="{{ old('title', $cuisines->titleLocation) }}" required>
                    @error('titleLocation')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Upload Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="figcaption">Figcaption</label>
                    <textarea class="form-control @error('figcaption') is-invalid @enderror" id="figcaption" name="figcaption">{{ old('figcaption', $cuisines->figcaption) }}</textarea>
                    @error('figcaption')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div> 
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content">{{ old('content', $cuisines->content) }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div> 
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@stop
