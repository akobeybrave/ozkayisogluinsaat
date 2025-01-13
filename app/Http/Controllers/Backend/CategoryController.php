<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Traits\HandlesImageUpload;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

    use HandlesImageUpload;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('website.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('website.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
        ]);

        $imagePath = $this->saveImage($request->file('image'), null, 'categories');


        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name,),
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        $notification = array(
            'message' => 'Kategori başarıyla eklendi.',
            'alert-type' => 'success'
        );

        return redirect()->route('website.categories.index')->with($notification);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);

        return view('website.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
        ]);



        $category = Category::findOrFail($id);

        $imagePath = $this->saveImage($request->file('image'), $category->image, 'categories');

        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name,),
            'description' => $request->description,
            'image' => $imagePath,
        ]);


        $notification = array(
            'message' => 'Kategori başarıyla güncellendi.',
            'alert-type' => 'success'
        );


        return redirect()->route('website.categories.index')->with($notification);

    }



    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);

           // Kategoriye bağlı post var mı kontrol et
        //    if ($category->articles()->count() > 0) {
        //     return response()->json(['message' => 'Bu kategoriye bağlı postlar var, silme işlemi gerçekleştirilemez.'], 400);
        // }

        if ($category) {
            $category->delete(); // Kategoriyi sil
        }

        $notification = array(
            'message' => 'Kategori başarıyla silindi.',
            'alert-type' => 'success'
        );


        return redirect()->route('website.categories.index')->with($notification);

    }

}
