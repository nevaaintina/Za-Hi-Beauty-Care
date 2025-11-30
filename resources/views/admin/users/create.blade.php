@extends('admin.layouts.admin')
@section('title','Create User')
@section('content')
@include('admin.partials.alerts')

<div class="flex justify-between items-center mb-6">
    <h2 class="text-3xl font-bold text-gray-800">Create New User</h2>
</div>

<div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200 max-w-2xl mx-auto">
    <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
         @include('admin.users._form')
         <div class="mt-4">
        <button class="bg-dark-pink text-white px-4 py-2 rounded">Save</button>
        <a href="{{ route('admin.users.index') }}" class="ml-2 text-gray-600">Cancel</a>
    </div>
    </form>
</div>

@endsection
