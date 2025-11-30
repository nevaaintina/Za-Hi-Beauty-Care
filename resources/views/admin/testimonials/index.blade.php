@extends('admin.layouts.admin')
@section('title','Testimonials')
@section('content')

@include('admin.partials.alerts')

<div class="flex items-center justify-between mb-4">
    <h2 class="text-2xl font-semibold">Testimonials</h2>
</div>

{{-- SEARCH FORM --}}
<div class="mb-4 flex items-center justify-between gap-4">
    <form action="{{ route('admin.testimonials.index') }}" method="GET" class="flex gap-2 w-full max-w-md">
        <input 
            type="text" 
            name="search" 
            value="{{ request('search') }}"
            placeholder="Search user, message, or service..."
            class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-pink-200"
        >
        <button class="bg-dark-pink text-white px-4 py-2 rounded-lg hover:brightness-110">
            Search
        </button>
    </form>

    @if(request('search'))
        <a href="{{ route('admin.testimonials.index') }}" 
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
                    <th class="px-6 py-3 font-semibold">Service</th>
                    <th class="px-6 py-3 font-semibold">Rating</th>
                    <th class="px-6 py-3 font-semibold">Message</th>
                    <th class="px-6 py-3 font-semibold">Image</th>
                    <th class="px-6 py-3 font-semibold">Published</th>
                    <th class="px-6 py-3 font-semibold text-right">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                @forelse($items as $i=>$t)
                <tr class="hover:bg-gray-50 transition-all">
                    <td class="px-6 py-4">{{ $items->firstItem() + $i }}</td>

                    <td class="px-6 py-4 font-medium text-gray-900">
                        {{ $t->user->name ?? 'Deleted User' }}
                    </td>

                    {{-- SERVICE --}}
                    <td class="px-6 py-4 font-medium text-gray-900">
                        {{ $t->service->name ?? '-' }}
                    </td>

                    {{-- RATING --}}
                    <td class="px-6 py-4 text-center text-yellow-500">
                        @for ($k = 1; $k <= 5; $k++)
                            @if ($k <= $t->rating)
                                <i class="fas fa-star text-xs"></i>
                            @else
                                <i class="far fa-star text-xs text-gray-300"></i>
                            @endif
                        @endfor
                    </td>

                    {{-- MESSAGE --}}
                    <td class="px-6 py-4 text-gray-700">
                        {{ Str::limit($t->message, 50) }}
                    </td>

                    {{-- IMAGE --}}
                    <td class="px-6 py-4">
    @if(is_array($t->images))
        @foreach($t->images as $img)
            <img src="{{ asset('storage/' . $img) }}" 
                 class="w-12 h-12 object-cover rounded-full inline-block mr-1 mb-1">
        @endforeach
    @else
        <span>No image</span>
    @endif
</td>


                    {{-- PUBLISHED --}}
                    <td class="px-6 py-4">
                        @if($t->published)
                            <span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-medium rounded-full">
                                Yes
                            </span>
                        @else
                            <span class="px-3 py-1 bg-gray-200 text-gray-600 text-xs font-medium rounded-full">
                                No
                            </span>
                        @endif
                    </td>

                    {{-- ACTIONS --}}
                    <td class="px-6 py-4 text-right space-x-3">
                        <form action="{{ route('admin.testimonials.destroy', $t) }}"
                              method="POST" 
                              class="inline-block"
                              onsubmit="return confirm('Delete this testimonial?')">
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
                    <td colspan="8" class="py-6 text-center text-gray-500">
                        No testimonials found
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- PAGINATION --}}
    <div class="mt-4">
        {{ $items->appends(request()->query())->links() }}
    </div>
</div>

@endsection
