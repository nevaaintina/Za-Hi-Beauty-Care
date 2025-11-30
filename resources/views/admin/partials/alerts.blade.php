@if(session('success'))
<div class="mb-4 p-3 bg-green-50 border border-green-200 text-green-800 rounded">
    {{ session('success') }}
</div>
@endif
@if($errors->any())
<div class="mb-4 p-3 bg-red-50 border border-red-200 text-red-800 rounded">
    <ul class="list-disc pl-5">
        @foreach($errors->all() as $e) <li>{{ $e }}</li> @endforeach
    </ul>
</div>
@endif
