<!-- resources/views/messages/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>New Message</h1>

    <form action="{{ route('messages.store') }}" method="post">
        @csrf

        <div>
            <label for="from">From:</label><br>
            <input type="text" id="from" name="from" required>
        </div>

        <div>
            <label for="subject">Subject:</label><br>
            <input type="text" id="subject" name="subject" required>
        </div>

        <div>
            <label for="body">Message:</label><br>
            <textarea id="body" name="body" required></textarea>
        </div>

        <button type="submit">Send</button>
    </form>
    <STYLE>
        form {
            margin: 0 auto;
            width: 50%;
        }

        label {
            display: inline-block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        textarea {
            height: 200px;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
            font-size: 16px;
            font-weight: bold;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

    </STYLE>
@endsection
