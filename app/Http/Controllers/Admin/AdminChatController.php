<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChatMessage;

class AdminChatController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->search;

        $chats = ChatMessage::when($search, function ($q) use ($search) {
                $q->where('user_name', 'LIKE', "%$search%")
                  ->orWhere('message', 'LIKE', "%$search%");
            })
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        return view('admin.chats.index', compact('chats', 'search'));
    }

    // DELETE CHAT TERTENTU
    public function destroy($id)
    {
        ChatMessage::findOrFail($id)->delete();
        return redirect()->route('admin.chats.index')->with('success', 'Chat deleted successfully.');
    }
}
