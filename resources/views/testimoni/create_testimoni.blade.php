@extends('layouts.app')

@section('title', 'Tambah Testimoni - ZA & Hi')

@section('content')
@include('layouts.header')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
/* ================== STAR STYLE ================== */
.rating-star i{
    color:#d1d5db;
    cursor:pointer;
    transition:.3s;
}

.rating-star i.hovered,
.rating-star i.active{
    color:#FFD700;
    text-shadow:0 0 8px #FFD700;
}

@keyframes cring {
    0%   { transform: scale(.8) rotate(0deg); }
    40%  { transform: scale(1.5) rotate(15deg); }
    80%  { transform: scale(.9) rotate(-10deg); }
    100% { transform: scale(1) rotate(0deg); }
}
.cring { animation: cring .4s ease; }

/* CARD STYLE */
.form-card{
    transition:.3s;
    box-shadow:0 12px 25px rgba(0,0,0,.2);
}
.form-card:hover{
    transform:translateY(-6px);
    box-shadow:0 25px 40px rgba(0,0,0,.35);
}
</style>

<section class="min-h-screen py-16 px-4 sm:px-6 lg:px-8" style="background-color:#FFE2E2;">
    <div class="max-w-xl mx-auto p-8 rounded-xl border-4 border-[#E195AB] form-card"
         style="background-color:#f8e1e6;">
        
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">
            Bagikan Pengalaman Anda
        </h2>

        <form method="POST" action="{{ route('testimoni.store') }}"
              enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- ================== PILIH LAYANAN ================== -->
            <div>
                <label class="block font-medium text-gray-700 mb-2">
                    Pilih Layanan
                </label>

                <select name="service_id" required 
                        class="w-full px-3 py-2 border rounded-lg bg-white">
                    <option value="">-- Pilih layanan yang ingin direview --</option>

                    @foreach($services as $service)
                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                    @endforeach
                </select>

                @error('service_id')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- UPLOAD FOTO -->
            <div>
                <label class="block font-medium text-gray-700 mb-2">
                    Upload Foto (Max 5)
                </label>
                <input type="file" name="images[]" multiple 
                       class="w-full px-3 py-2 border rounded-lg bg-white">
                <small class="text-gray-600 italic">
                    Bisa upload lebih dari satu. Maksimal 5 foto.
                </small>

                @error('images')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
                @error('images.*')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- RATING -->
            <div>
                <label class="block text-lg font-medium text-gray-700 mb-2">
                    Beri Rating
                </label>

                <div id="stars" class="flex space-x-2 text-3xl rating-star">
                    @for($i = 1; $i <= 5; $i++)
                        <i class="fa-regular fa-star" data-value="{{ $i }}"></i>
                    @endfor
                </div>

                <input type="hidden" name="rating" id="rating" value="0">

                @error('rating')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- ULASAN -->
            <div>
                <label class="block font-medium text-gray-700 mb-2">
                    Ulasan Anda
                </label>
                <textarea name="message" rows="5" required
                    class="w-full px-4 py-3 border rounded-lg bg-white"></textarea>

                @error('message')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                class="w-full py-3 bg-[#E195AB] text-white font-semibold rounded-lg shadow-md hover:bg-[#D18D9F] transition">
                Kirim Testimoni
            </button>
        </form>
    </div>
</section>

@include('layouts.footer')

<script>
const stars = document.querySelectorAll('#stars i');
const ratingInput = document.getElementById('rating');

stars.forEach((star, index) => {
    star.addEventListener('mouseover', () => {
        stars.forEach((s, i) => s.classList.toggle('hovered', i <= index));
    });

    star.addEventListener('mouseout', () => {
        stars.forEach(s => s.classList.remove('hovered'));
    });

    star.addEventListener('click', () => {
        const value = index + 1;
        ratingInput.value = value;

        stars.forEach((s, i) => {
            s.classList.toggle('active', i < value);

            if(i < value){
                s.classList.remove('fa-regular');
                s.classList.add('fa-solid', 'cring');
                setTimeout(() => s.classList.remove('cring'), 400);
            } else {
                s.classList.remove('fa-solid');
                s.classList.add('fa-regular');
            }
        });
    });
});
</script>

@endsection
