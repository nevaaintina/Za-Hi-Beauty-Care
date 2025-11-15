<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Asumsi Anda punya Model Treatment. Jika tidak, gunakan array dummy.
// use App\Models\Treatment; 

class TreatmentController extends Controller
{
    // Data Dummy (jika Anda belum menggunakan database)
    private $treatments = [
        'anti-aging-facial' => [
            'title' => 'ANTI AGING FACIAL',
            'image' => 'images/assets/anti-aging-detail.jpg',
            'manfaat' => [
                'Membersihkan pori-pori, menghilangkan sel kulit mati, dan membantu regenerasi kulit.',
                'Menenangkan dan melembabkan kulit.',
                'Menghilangkan sel kulit mati dan merevitalisasi kulit.',
            ],
            'deskripsi' => 'Anti Aging Facial dikombinasikan dengan peeling Dr. Lacto Peel yang merupakan produk perawatan kulit berupa chemical peeling yang dirancang untuk:'
        ],
        'ipl-rejevu-facial' => [
            'title' => 'IPL REJEVU FACIAL',
            // ... data lainnya
        ],
        // ... data treatment lainnya
    ];

    public function show($slug)
    {
        // Dalam aplikasi nyata, Anda akan mencari data dari database:
        // $treatment = Treatment::where('slug', $slug)->firstOrFail();
        
        // Menggunakan data dummy:
        if (!array_key_exists($slug, $this->treatments)) {
            abort(404);
        }
        $treatment = $this->treatments[$slug];

        return view('treatment.detail', compact('treatment'));
    }
}