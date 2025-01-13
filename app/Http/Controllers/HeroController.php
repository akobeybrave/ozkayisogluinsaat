<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Hero;
use App\Traits\HandlesImageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HeroController extends Controller
{

    use HandlesImageUpload;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heroDatas = Hero::all();
        return view('website.hero.index', compact('heroDatas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('website.hero.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'hero_title' => 'required|string|max:255',
            'hero_subtitle' => 'required|string|max:255',
            'hero_slogan' => 'required|string|max:255',
            'hero_image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
        ]);

        $imagePath = $this->saveImage($request->file('hero_image'), null, 'hero');

        Hero::create([
            'hero_title' => $request->hero_title,
            'hero_subtitle' => $request->hero_subtitle,
            'hero_slogan' => $request->hero_slogan,
            'hero_image' => $imagePath,
        ]);

        $notification = array(
            'message' => 'Slide başarıyla eklendi.',
            'alert-type' => 'success'
        );

        return redirect()->route('website.heroes.index')->with($notification);
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
    public function edit(Hero $hero)
    {
        return view('website.hero.edit', compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'hero_title' => 'required|string|max:255',
            'hero_subtitle' => 'required|string|max:255',
            'hero_slogan' => 'required|string|max:255',
            'hero_image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
        ]);

        $hero = Hero::find($id);

        $imagePath = $this->saveImage($request->file('hero_image'), $hero->hero_image, 'hero');

        $hero->update([
            'hero_title' => $request->hero_title,
            'hero_subtitle' => $request->hero_subtitle,
            'hero_slogan' => $request->hero_slogan,
            'hero_image' => $imagePath,
        ]);

        $notification = array(
            'message' => 'Slide başarıyla güncellendi.',
            'alert-type' => 'success'
        );

        return redirect()->route('website.heroes.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Hero::findOrFail($id);

        if ($data) {
            $data->delete();
        }

        $notification = array(
            'message' => 'Slide başarıyla silindi.',
            'alert-type' => 'success'
        );


        return redirect()->route('website.heroes.index')->with($notification);
    }
}
