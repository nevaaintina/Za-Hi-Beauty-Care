@csrf

<div class="grid grid-cols-1 gap-4">

    <label class="block">
        <span class="text-sm font-medium">Category</span>
        <select name="category" required class="mt-1 block w-full border rounded p-2">
            <option value="">-- Select Category --</option>
            @foreach(['salon','aset','promo','pricelist','certificate'] as $cat)
                <option value="{{ $cat }}" 
                    {{ old('category', $item->category ?? '') == $cat ? 'selected' : '' }}>
                    {{ ucfirst($cat) }}
                </option>
            @endforeach
        </select>
    </label>

    <label class="block">
        <span class="text-sm font-medium">Description</span>
        <textarea name="description" class="mt-1 block w-full border rounded p-2">{{ old('description', $item->description ?? '') }}</textarea>
    </label>

    <label class="block">
        <span class="text-sm font-medium">Image</span>
        <input type="file" name="image" class="mt-1 block w-full">

        @if(!empty($item->image))
            <img src="{{ asset('storage/'.$item->image) }}" class="w-32 h-20 object-cover mt-2 rounded">
        @endif
    </label>

</div>
