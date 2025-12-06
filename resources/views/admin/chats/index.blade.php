@extends('admin.layouts.admin')

@section('title', 'Manage Chats')

@section('content')

@include('admin.partials.alerts')

<div class="flex items-center justify-between mb-4">
    <h2 class="text-2xl font-semibold">Chat Messages</h2>
</div>

{{-- SEARCH --}}
<div class="mb-4 flex items-center justify-between gap-4">
    <form action="{{ route('admin.chats.index') }}" method="GET" class="flex gap-2 w-full max-w-md">
        <input 
            type="text" 
            name="search" 
            value="{{ request('search') }}"
            placeholder="Search username or message..."
            class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-pink-200"
        >
        <button class="bg-dark-pink text-white px-4 py-2 rounded-lg hover:brightness-110">
            Search
        </button>
    </form>

    @if(request('search'))
        <a href="{{ route('admin.chats.index') }}" 
           class="text-sm text-gray-600 hover:text-red-600">
            Reset
        </a>
    @endif
</div>

<div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200">
    <div class="overflow-hidden rounded-xl border border-gray-200">

        <table class="min-w-full table-auto">
            <thead class="bg-gray-100 sticky top-0 z-10">
                <tr class="text-left text-gray-700">
                    <th class="px-6 py-3 font-semibold">#</th>
                    <th class="px-6 py-3 font-semibold">User</th>
                    <th class="px-6 py-3 font-semibold">Message</th>
                    <th class="px-6 py-3 font-semibold">Sender</th>
                    <th class="px-6 py-3 font-semibold">Time</th>
                    <th class="px-6 py-3 font-semibold text-right">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                @forelse($chats as $i => $chat)
                <tr class="hover:bg-gray-50 transition-all">
                    <td class="px-6 py-4">
                        {{ $chats->firstItem() + $i }}
                    </td>

                    <td class="px-6 py-4 font-medium text-gray-900">
                        {{ $chat->user_name }}
                    </td>

                    <td class="px-6 py-4 text-gray-700">
                        {{ Str::limit($chat->message, 60) }}
                    </td>

                    <td class="px-6 py-4 text-gray-900">
                        <span class="px-3 py-1 rounded-full text-xs font-medium 
                            {{ $chat->sender == 'admin' ? 'bg-blue-100 text-blue-700' : 'bg-green-100 text-green-700' }}">
                            {{ ucfirst($chat->sender) }}
                        </span>
                    </td>

                    <td class="px-6 py-4 text-gray-600 text-sm">
                        {{ $chat->created_at->format('d M Y, H:i') }}
                    </td>

                    {{-- DELETE --}}
                    <td class="px-6 py-4 text-right space-x-3">
                        <form action="{{ route('admin.chats.destroy', $chat->id) }}"
                              method="POST"
                              onsubmit="return confirm('Delete this chat?')"
                              class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 hover:text-red-800 font-medium">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="py-6 text-center text-gray-500">
                        No chat messages found
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>

    </div>

    {{-- PAGINATION --}}
    <div class="mt-4">
        {{ $chats->appends(request()->query())->links() }}
    </div>
</div>

@endsection
