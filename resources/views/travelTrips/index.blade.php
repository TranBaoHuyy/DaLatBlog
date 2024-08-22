@extends('adminlte::page')
@section('title', 'TravelTrips')
@section('content_header')
    <h1>TravelTrips</h1>
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('travelTrips.create') }}" class="btn btn-primary">Create New TravelTrips</a>
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
                        <th>Title Detail</th>
                        <th>Title Location</th>
                        <th>Content</th>
                        <th>Image</th>
                        <th>Figcaption</th>   
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($travelTrips as $travelTrip)
                        <tr>
                            <td>{{ $travelTrip->id }}</td>
                            <td>{{ $travelTrip->title }}</td>
                            <td>{{ $travelTrip->titleDetail }}</td>
                            <td>{{ $travelTrip->titleName }}</td>
                            <td>{{ $travelTrip->titleLocation }}</td>
                            <td>{{ $travelTrip->content }}</td>
                            <td>
                                <img src="{{ asset($travelTrip->image) }}" alt="{{ $travelTrip->titleName }}" style="width: 100px; height: auto;">
                            </td>          
                            <td>{{ $travelTrip->figcaption }}</td>        
                            <td>
                                <a href="{{ route('travelTrips.edit', $travelTrip->id) }}" class="btn btn-sm btn-info">Edit</a>
                                <form action="{{ route('travelTrips.destroy', $travelTrip->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                                <a href="{{ route('dashboard', $travelTrip->id) }}" class="btn btn-sm btn-info">Dashboard</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
