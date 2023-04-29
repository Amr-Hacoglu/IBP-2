<!-- resources/views/announcements/index.blade.php -->

{{--@extends('layouts.app')--}}

@extends('admin.admin_master')
@section('admin')
    <br><br><br>
    <div class="my-div">
        <div class="container">
            <h1>Announcements</h1>
            <hr>

            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <a href="{{ route('announcements.create') }}" class="btn btn-primary mb-3">Create Announcement</a>

            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($announcements as $announcement)
                    <tr>
                        <td>{{ $announcement->id }}</td>
                        <td>{{ $announcement->title }}</td>
                        <td>{{ $announcement->description }}</td>
                        <td>{{ $announcement->created_at->format('F j, Y, g:i a') }}</td>
                        <td>
                            <a href="{{ route('announcements.edit', $announcement) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('announcements.destroy', $announcement) }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this announcement?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {{ $announcements->links() }}
        </div>
    </div>
    <style>
        .my-div {
            background-color: #fff;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            border-radius: 50px;
            padding: 20px;
            margin: 30px auto;
            max-width: 800px;
        }
    </style>

@endsection
