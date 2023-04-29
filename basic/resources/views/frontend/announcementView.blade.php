<!-- resources/views/announcements/index.blade.php -->

{{--@extends('layouts.app')--}}

@extends('frontend.main_master')
@section('main')
    <br><br><br><br><br><br><br><br><br>
    <div class="container">
        <h1>Announcements</h1>
        <hr>

        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

{{--        <a href="{{ route('announcements.create') }}" class="btn btn-primary mb-3">Create Announcement</a>--}}

        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Created At</th>
{{--                <th>Actions</th>--}}
            </tr>
            </thead>
            <tbody>
            @foreach ($announcementsForView as $announcement)
                <tr>
                    <td>{{ $announcement->id }}</td>
                    <td>{{ $announcement->title }}</td>
                    <td>{{ $announcement->description }}</td>
                    <td>{{ $announcement->created_at->format('F j, Y, g:i a') }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $announcementsForView->links() }}
    </div>
@endsection
