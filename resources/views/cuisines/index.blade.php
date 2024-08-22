@extends('adminlte::page')
@section('title', 'Cuisine')
@section('content_header')
    <h1>Cuisine</h1>
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('cuisines.create') }}" class="btn btn-primary">Create New Cuisine</a>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Title Location</th>
                        <th>Image</th> 
                        <th>Figcaption</th>
                        <th>Content</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cuisines as $cuisine)
                        <tr>
                            <td>{{ $cuisine->id }}</td>
                            <td>{{ $cuisine->title }}</td>
                            <td>{{ $cuisine->titleLocation }}</td>
                            <td>
                                <img src="{{ asset($cuisine->image) }}" alt="{{ $cuisine->title }}" style="width: 100px; height: auto;">
                            </td> 
                            <td>{{ $cuisine->figcaption}}</td> 
                            <td>{{ $cuisine->content }}</td>            
                            <td>
                                <a href="{{ route('cuisines.edit', $cuisine->id) }}" class="btn btn-sm btn-info">Edit</a>
                                <form action="{{ route('cuisines.destroy', $cuisine->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                                <a href="{{ route('dashboard', $cuisine->id) }}" class="btn btn-sm btn-info">Dashboard</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
