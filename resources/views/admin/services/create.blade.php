@extends('admin.layouts.admin')
@section('title','Add Service')
@section('content')
@include('admin.partials.alerts')

<form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-4 rounded shadow">
    @include('admin.services._form')
    <div class="mt-4">
        <button class="bg-dark-pink text-white px-4 py-2 rounded">Save</button>
        <a href="{{ route('admin.services.index') }}" class="ml-2 text-gray-600">Cancel</a>
    </div>
</form>
@endsection
