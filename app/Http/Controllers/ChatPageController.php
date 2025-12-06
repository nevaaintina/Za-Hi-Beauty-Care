<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatMessage;

class ChatPageController extends Controller
{

    public function index()
    {
        $messages = ChatMessage::orderBy('created_at')->get();

        return view('consultation.chat', [
            'messages' => $messages,
            'replyTo'  => null
        ]);
    }

    //ADMIN – BUKA CHAT BERDASARKAN USER
    public function openFromAdmin($user)
    {
        $messages = ChatMessage::orderBy('created_at')->get();

        return view('consultation.chat', [
            'messages' => $messages,
            'replyTo'  => $user
        ]);
    }

    //USER KIRIM PESAN
    public function send(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:500',
        ]);

        ChatMessage::create([
            'user_name' => auth()->user()->name ?? 'Anonim',
            'message'   => $request->message,
            'sender'    => 'user'
        ]);

        return redirect()->route('chat.index');
    }

    //HAPUS PESAN (USER boleh hapus pesan sendiri, ADMIN bebas)

    public function delete($id)
    {
        $chat = ChatMessage::findOrFail($id);

        $username = auth()->user()->name ?? null;
        $isAdmin  = auth()->check() && auth()->user()->role === 'admin';

        // user hanya boleh hapus pesan miliknya
        if ($username === $chat->user_name || $isAdmin) {
            $chat->delete();
        }

        return back();
    }
}
