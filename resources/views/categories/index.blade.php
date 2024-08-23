@extends('adminlte::page')
@section('title', 'Categories')
@section('content_header')
    <h1>Categories</h1>
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('categories.create') }}" class="btn btn-primary">Create New Category</a>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-info">Edit</a>
                                <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                                <a href="{{ route('dashboard', $category->id) }}" class="btn btn-sm btn-info">Dashboard</a>
                            </td>
                        </tr>         
                    @endforeach
                    
                </tbody> 
            </table>
        </div>
        <div style="display: flex;justify-content:center;align-items:center;margin-top:15px">{{ $categories->links('pagination::bootstrap-4') }}</div>
    </div>
@stop
