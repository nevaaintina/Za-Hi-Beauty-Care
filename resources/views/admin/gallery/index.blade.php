@extends('admin.layouts.admin')
@section('title','Gallery')
@section('content')

@include('admin.partials.alerts')

<div class="flex items-center justify-between mb-4">
    <h2 class="text-2xl font-semibold">Gallery</h2>

    <a href="{{ route('admin.gallery.create') }}" 
       class="bg-dark-pink text-white px-4 py-2 rounded-lg shadow hover:brightness-110 transition">
        Add Gallery
    </a>
</div>

{{-- SEARCH FORM --}}
<div class="mb-4 flex items-center justify-between gap-4">
    <form action="{{ route('admin.gallery.index') }}" method="GET" class="flex gap-2 w-full max-w-md">
        <input 
            type="text" 
            name="search" 
            value="{{ request('search') }}"
            placeholder="Search description or category..."
            class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-pink-200"
        >
        <button class="bg-dark-pink text-white px-4 py-2 rounded-lg hover:brightness-110">
            Search
        </button>
    </form>

    @if(request('search'))
        <a href="{{ route('admin.gallery.index') }}" 
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
                    <th class="px-6 py-3 font-semibold">Image</th>
                    <th class="px-6 py-3 font-semibold">Description</th>
                    <th class="px-6 py-3 font-semibold">Category</th>
                    <th class="px-6 py-3 font-semibold text-right">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                @forelse($items as $i=>$g)
                <tr class="hover:bg-gray-50 transition-all">
                    <td class="px-6 py-4">
                        {{ $items->firstItem() + $i }}
                    </td>

                    <td class="px-6 py-4">
                        @if($g->image)
                            <img src="{{ asset('storage/'.$g->image) }}" 
                                 class="w-20 h-20 object-cover rounded-lg shadow-sm">
                        @else
                            <div class="w-20 h-20 bg-gray-100 rounded-lg flex items-center justify-center text-xs text-gray-500">
                                No image
                            </div>
                        @endif
                    </td>

                    <td class="px-6 py-4 font-medium text-gray-900">
                        {{ $g->description }}
                    </td>

                    <td class="px-6 py-4 capitalize text-gray-700">
                        {{ $g->category }}
                    </td>

                    <td class="px-6 py-4 text-right space-x-3">
                        <a href="{{ route('admin.gallery.edit', $g) }}"
                           class="text-blue-600 hover:text-blue-800 font-medium transition">
                            Edit
                        </a>

                        <form action="{{ route('admin.gallery.destroy', $g) }}" 
                              method="POST" 
                              class="inline-block"
                              onsubmit="return confirm('Delete this item?')">
                            @csrf 
                            @method('DELETE')
                            <button class="text-red-600 hover:text-red-800 font-medium transition">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="py-6 text-center text-gray-500">
                        No gallery items found
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- PAGINATION + SEARCH QUERY --}}
    <div class="mt-4">
        {{ $items->appends(request()->query())->links() }}
    </div>
</div>

@endsection
