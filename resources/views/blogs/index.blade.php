@extends('adminlte::page')
@section('title', 'Blogs')
@section('content_header')
    <h1>Blogs</h1>
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('blogs.create') }}" class="btn btn-primary">Create New Blog</a>
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
                        <th>Image</th>
                        <th>Content</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $blog)
                        <tr>
                            <td>{{ $blog->id }}</td>
                            <td>{{ $blog->title }}</td>
                            <td>
                                <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" style="width: 100px; height: auto;">
                            </td>                  
                            <td>{{ $blog->content }}</td>
                            <td>
                                <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-sm btn-info">Edit</a>
                                <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                                <a href="{{ route('dashboard', $blog->id) }}" class="btn btn-sm btn-info">Dashboard</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
