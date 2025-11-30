<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $items = Testimonial::with(['user', 'service'])
            ->when($search, function ($query) use ($search) {
                $query->where('message', 'like', "%$search%")
                      ->orWhereHas('user', function ($q) use ($search) {
                          $q->where('name', 'like', "%$search%");
                      })
                      ->orWhereHas('service', function ($q) use ($search) {
                          $q->where('name', 'like', "%$search%");
                      });
            })
            ->latest()
            ->paginate(10);

        return view('admin.testimonials.index', compact('items'));
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        
        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial successfully deleted.');
    }
}
