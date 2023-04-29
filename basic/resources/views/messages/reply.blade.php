@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Reply to Message from {{ $message->from }}</div>
        <div class="card-body">
            <form method="POST" action="{{ route('messages.sendReply', $message->id) }}">
                @csrf
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" name="subject" id="subject" class="form-control">
                </div>

                <div class="form-group">
                    <label for="body">Message:</label>
                    <textarea name="body" id="body" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Send Reply</button>
            </form>

        </div>
        <style>
            .card {
                width: 100%;
                margin-bottom: 20px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            .card-header {
                background-color: #f2f2f2;
                padding: 10px 15px;
                border-bottom: 1px solid #ccc;
                border-top-left-radius: 4px;
                border-top-right-radius: 4px;
            }

            .card-body {
                padding: 15px;
            }

            .form-group {
                margin-bottom: 15px;
            }

            label {
                font-weight: bold;
                display: block;
                margin-bottom: 5px;
            }

            input[type="text"],
            textarea {
                width: 100%;
                padding: 10px;
                border-radius: 4px;
                border: 1px solid #ccc;
            }

            button[type="submit"] {
                display: block;
                width: 100%;
                padding: 10px;
                border-radius: 4px;
                border: none;
                background-color: #007bff;
                color: #fff;
                font-weight: bold;
            }

        </style>
    </div>
@endsection
