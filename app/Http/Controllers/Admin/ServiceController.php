<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $items = Service::latest()->paginate(15);
        return view('admin.services.index', compact('items'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|string|max:255',
            'description'=>'nullable|string',
            'image'=>'nullable|image|max:2048',
            'category'=>'required|in:facial,body,hair'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('services','public');
        }

        Service::create($data);

        return redirect()->route('admin.services.index')
            ->with('success','Service created.');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', ['item'=>$service]);
    }

    public function update(Request $request, Service $service)
    {
        $data = $request->validate([
            'name'=>'required|string|max:255',
            'description'=>'nullable|string',
            'image'=>'nullable|image|max:2048',
            'category'=>'required|in:facial,body,hair'
        ]);

        if ($request->hasFile('image')) {
            if ($service->image){
                Storage::disk('public')->delete($service->image);
            }
            $data['image'] = $request->file('image')->store('services','public');
        }

        $service->update($data);

        return redirect()->route('admin.services.index')
            ->with('success','Service updated.');
    }

    public function destroy(Service $service)
    {
        if ($service->image){
            Storage::disk('public')->delete($service->image);
        }

        $service->delete();

        return redirect()->route('admin.services.index')
            ->with('success','Service deleted.');
    }
}
