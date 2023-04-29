@extends('layouts.app')

@section('content')
    <div class="message-container">
        <div class="message-header">
            <h1>{{ $message->subject }}</h1>
            <p>From: {{ $message->from }}</p>
            <p>Date: {{ $message->created_at->format('Y-m-d H:i:s') }}</p>
        </div>

        <div class="message-content">
            <p>{{ $message->body }}</p>
        </div>

        <div class="message-footer">
            <form action="{{ route('messages.reply', $message) }}" method="post">
                @csrf

                <button type="submit" class="reply-button">Reply</button>
            </form>
        </div>
    </div>
    <style>
        .message-container {
            margin: 20px 0;
        }

        .message-header {
            background-color: #eee;
            padding: 10px;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .message-content {
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 10px;
        }

        .message-footer {
            margin-top: 10px;
        }

        .reply-button {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
        }

        .reply-button:hover {
            background-color: #388e3c;
        }

    </style>
@endsection
