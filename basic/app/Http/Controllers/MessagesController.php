<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
        $messages = Message::orderBy('created_at', 'desc')->get();

        return view('messages.index', compact('messages'));
    }

    public function show(Message $message)
    {
        $message->read = true;
        $message->save();

        return view('messages.show', compact('message'));
    }

    public function create()
    {
        return view('messages.create');
    }

    public function store(Request $request)
    {
        $message = new Message();
        $message->from = auth()->user()->email;
        $message->to = $request->input('to');
        $message->subject = $request->input('subject');
        $message->body = $request->input('body');
        $message->save();

        return redirect()->route('messages.index');
    }

    public function reply(Message $message)
    {
        return view('messages.reply', compact('message'));
    }

    public function sendReply(Request $request, Message $message)
    {
        $reply = new Message();
        $reply->from = auth()->user()->email;
        $reply->to = $message->from;
        $reply->subject = $request->input('subject');
        $reply->body = $request->input('body');
        $reply->save();

        return redirect()->route('messages.index');
    }
}
