@csrf

{{-- Name --}}
<label class="block mb-3">
    <span class="text-sm font-medium">Name</span>
    <input
        type="text"
        name="name"
        value="{{ old('name', $item->name ?? '') }}"
        class="w-full border rounded p-2 focus:ring focus:ring-blue-200"
        required
    >
</label>

{{-- Description --}}
<label class="block mb-3">
    <span class="text-sm font-medium">Description</span>
    <textarea
        name="description"
        class="w-full border rounded p-2 h-28 focus:ring focus:ring-blue-200"
    >{{ old('description', $item->description ?? '') }}</textarea>
</label>

{{-- Category --}}
<label class="block mb-3">
    <span class="text-sm font-medium">Category</span>
    <select
        name="category"
        class="w-full border rounded p-2 focus:ring focus:ring-blue-200"
        required
    >
        @php
            $selected = old('category', $item->category ?? '');
        @endphp
        
        <option value="facial" {{ $selected === 'facial' ? 'selected' : '' }}>Facial</option>
        <option value="body" {{ $selected === 'body' ? 'selected' : '' }}>Body</option>
        <option value="hair" {{ $selected === 'hair' ? 'selected' : '' }}>Hair</option>
    </select>
</label>

{{-- Image --}}
<label class="block mb-3">
    <span class="text-sm font-medium">Image</span>
    <input type="file" name="image" class="w-full">

    @if(!empty($item->image))
        <img
            src="{{ asset('storage/'.$item->image) }}"
            class="w-32 h-20 mt-2 rounded object-cover border"
            alt="Preview"
        >
    @endif
</label>
