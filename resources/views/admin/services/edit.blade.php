@extends('admin.layouts.admin')
@section('title','Edit Service')
@section('content')
@include('admin.partials.alerts')

<form action="{{ route('admin.services.update',$item) }}" method="POST" enctype="multipart/form-data" class="bg-white p-4 rounded shadow">
    @method('PUT')
    @include('admin.services._form')
    <button class="bg-dark-pink text-white px-4 py-2 rounded">Update</button>
</form>
@endsection
