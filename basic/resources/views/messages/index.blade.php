<!-- resources/views/messages/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Messages</h1>

    <table>
        <thead>
        <tr>
            <th>From</th>
            <th>Subject</th>
            <th>Date</th>
            <th>Read</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($messages as $message)
            <tr>
                <td>{{ $message->from }}</td>
                <td><a href="{{ route('messages.show', $message) }}">{{ $message->subject }}</a></td>
                <td>{{ $message->created_at->format('Y-m-d H:i:s') }}</td>
                <td><input type="checkbox" {{ $message->read ? 'checked' : '' }} disabled></td>
            </tr>
        @endforeach
        </tbody>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                padding: 12px 15px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }

            th {
                background-color: #f2f2f2;
            }

            tr:hover {
                background-color: #f5f5f5;
            }

            td input[type="checkbox"] {
                margin-left: auto;
                margin-right: auto;
                display: block;
            }

        </style>
    </table>
@endsection
