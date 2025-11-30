@extends('admin.layouts.admin')
@section('title','Add Gallery')
@section('content')

<div class="bg-white p-6 rounded shadow">
    <h2 class="text-xl font-semibold mb-4">Add Gallery Item</h2>

    <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
        @include('admin.gallery._form')
        <div class="mt-4">
        <button class="bg-dark-pink text-white px-4 py-2 rounded">Save</button>
        <a href="{{ route('admin.gallery.index') }}" class="ml-2 text-gray-600">Cancel</a>
    </div>
    </form>
</div>

@endsection
