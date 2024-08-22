@extends('layouts.app')
@section('content')
<h1>Blogs</h1>
<a href="{{ route('blogs.show') }}">Show all Blog</a>
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Image</th>
            <th>Content</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($blogs as $blog)
        <tr>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->image }}</td>
            <td>{{ $blog->content }}</td>
            <td>
                <a href="{{ route('blogs.edit', $blog) }}">Edit</a>
                <form action="{{ route('blogs.destroy', $blog) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
