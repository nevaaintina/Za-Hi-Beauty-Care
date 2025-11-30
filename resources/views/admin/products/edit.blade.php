@extends('admin.layouts.admin')
@section('title','Edit Product')
@section('content')
@include('admin.partials.alerts')

<form action="{{ route('admin.products.update', $item) }}" method="POST" enctype="multipart/form-data" class="bg-white p-4 rounded shadow">
    @method('PUT')
    @include('admin.products._form')
    <div class="mt-4">
        <button class="bg-dark-pink text-white px-4 py-2 rounded">Update</button>
        <a href="{{ route('admin.products.index') }}" class="ml-2 text-gray-600">Cancel</a>
    </div>
</form>
@endsection
