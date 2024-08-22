@extends('adminlte::page')
@section('title', 'Edit TravelTrip')
@section('content_header')
    <h1>Edit TravelTrip</h1>
@stop
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('travelTrips.update', $travelTrips) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $travelTrips->title) }}" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="titleDetail">Title Detail</label>
                    <input type="text" class="form-control @error('titleDetail') is-invalid @enderror" id="titleDetail" name="titleDetail" value="{{ old('titleDetail', $travelTrips->titleDetail ) }}" required>
                    @error('titleDetail')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="titleName">Title Name</label>
                    <input type="text" class="form-control @error('titleName') is-invalid @enderror" id="titleName" name="titleName" value="{{ old('titleName', $travelTrips->titleName ) }}" required>
                    @error('titleName')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="titleLocation">Title Location</label>
                    <input type="text" class="form-control @error('titleLocation') is-invalid @enderror" id="titleLocation" name="titleLocation" value="{{ old('title', $travelTrips->titleLocation) }}" required>
                    @error('titleLocation')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content">{{ old('content', $travelTrips->content) }}</textarea>
                    @error('content')
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
                    <input type="text" class="form-control @error('figcaption') is-invalid @enderror" id="figcaption" name="figcaption" value="{{ old('figcaption', $travelTrips->figcaption) }}" required>
                    @error('figcaption')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@stop
