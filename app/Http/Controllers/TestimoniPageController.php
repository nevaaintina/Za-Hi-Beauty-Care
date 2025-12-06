<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\Service;

class TestimoniPageController extends Controller
{
    
    public function index()
    {
        // FIX: Ambil relasi service juga!
        $testimonials = Testimonial::with(['user', 'service'])
            ->where('published', 1)
            ->latest()
            ->get();

        return view('testimoni.testimoni', compact('testimonials'));
    }

    public function create()
{
    $services = Service::all();
    return view('testimoni.create_testimoni', compact('services'));
}

public function store(Request $request)
{
    $request->validate([
        'service_id' => 'required|exists:services,id',
        'rating'     => 'required|integer|min:1|max:5',
        'message'    => 'required|string',
        'images.*'   => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $imagePaths = [];

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $img) {
            $imagePaths[] = $img->store('testimoni', 'public');
        }
    }

    Testimonial::create([
        'user_id'    => auth()->id(),
        'service_id' => $request->service_id,
        'rating'     => $request->rating,
        'message'    => $request->message,
        'images'     => $imagePaths,
        'published'  => 1,
    ]);

    return redirect()->route('testimoni.index')
        ->with('success', 'Testimoni berhasil dikirim!');
}

}
