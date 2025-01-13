<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Mimari;
use App\Models\Mimariimages;
use App\Models\Tadilat;
use App\Traits\HandlesImageUpload;
use Illuminate\Http\Request;

use App\Traits\ImageUploadTrait;

class MimariController extends Controller
{
    use HandlesImageUpload;
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mimari = Mimari::find(1);
        $mimariImages = Mimariimages::all();
        $activeTab = session('activeTab', 'frontendText');
        return view('website.mimari.index', compact('mimari' , 'mimariImages', 'activeTab'));
    }

    public function mimariPageUpdate(Request $request){
        $request->validate([
            'pagedescription' => 'required',
        ]);

        $mimari = Mimari::find(1);

        $mimari->pagedescription = $request->pagedescription;
        $mimari->save();

        $notification = array(
            'message' => 'Sayfa Açıklama başarıyla güncellendi.',
            'alert-type' => 'success'
        );
        return redirect()->route('website.mimaris.index')->with($notification)->with('activeTab', 'backendText');

    }
    public function mimariUpdate(Request $request){

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'subtitle1' => 'required',
            'description1' => 'required',
            'subtitle2' => 'required',
            'description2' => 'required',
            'subtitle3' => 'required',
            'description3' => 'required',
        ]);



        $mimari = Mimari::find(1);

        $mimari->title = $request->title;
        $mimari->description = $request->description;
        $mimari->subtitle1 = $request->subtitle1;
        $mimari->description1 = $request->description1;
        $mimari->subtitle2 = $request->subtitle2;
        $mimari->description2 = $request->description2;
        $mimari->subtitle3 = $request->subtitle3;
        $mimari->description3 = $request->description3;
        $mimari->save();

        $notification = array(
            'message' => 'Ön Sayfa Açıklama başarıyla güncellendi.',
            'alert-type' => 'success'
        );
        return redirect()->route('website.mimaris.index')->with($notification)->with('activeTab', 'frontendText');
    }

    public function mimariResim1Update(Request $request)
    {

        $request->validate([
            'frontimage1' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
        ]);

        $mimari = Mimari::find(1);

        $imagePath = $this->saveImage($request->file('frontimage1'), $mimari->frontimage1, 'mimaris');

        $mimari->update([
            'frontimage1' => $imagePath,
        ]);


        $notification = array(
            'message' => 'Resim 1 başarıyla güncellendi.',
            'alert-type' => 'success'
        );
        return redirect()->route('website.mimaris.index')->with($notification)->with('activeTab', 'frontendImage');
    }

    public function mimariResim2Update(Request $request)
    {
        $request->validate([
            'frontimage2' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
        ]);

        $mimari = Mimari::find(1);

        $imagePath = $this->saveImage($request->file('frontimage2'), $mimari->frontimage2, 'mimaris');

        $mimari->update([
            'frontimage2' => $imagePath,
        ]);

        $notification = array(
            'message' => 'Resim 2 başarıyla güncellendi.',
            'alert-type' => 'success'
        );
        return redirect()->route('website.mimaris.index')->with($notification)->with('activeTab', 'frontendImage');
    }

    public function mimariResim3Update(Request $request)
    {
        $request->validate([
            'frontimage3' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
        ]);

        $mimari = Mimari::find(1);

        $imagePath = $this->saveImage($request->file('frontimage3'), $mimari->frontimage3, 'mimaris');

        $mimari->update([
            'frontimage3' => $imagePath,
        ]);

        $notification = array(
            'message' => 'Resim 3 başarıyla güncellendi.',
            'alert-type' => 'success'
        );
        return redirect()->route('website.mimaris.index')->with($notification)->with('activeTab', 'frontendImage');
    }

    public function mimariImagesStore(Request $request)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('images')) {

            $uploadedFiles = $this->uploadImages($request->file('images'), "uploads/mimariimages");

            if (empty($uploadedFiles)) {

                $notification = array(
                    'message' => 'Hiçbir resim yüklenemedi. Lütfen geçerli resimler yükleyin.',
                    'alert-type' => 'error'
                );
                return redirect()->route('website.mimaris.index')->with($notification);
            }

            foreach ($uploadedFiles as $file) {
                Mimariimages::create([
                    'filename' => $file['filename'],
                    'filepath' => $file['filepath'],
                ]);
            }
        }

        $notification = array(
            'message' => 'Resimler başarıyla eklendi.',
            'alert-type' => 'success'
        );
        return redirect()->route('website.mimaris.index')->with($notification)->with('activeTab', 'backendImage');

    }

    public function destroyMultiple(Request $request)
    {
        $request->validate([
            'images' => 'required|array',
        ]);

        $images = Mimariimages::whereIn('id', $request->images)->get();

        $filenames = $images->pluck('filename')->toArray();

        $this->deleteImages($filenames, "uploads/mimariimages");

        Mimariimages::whereIn('id', $request->images)->delete();

        $notification = array(
            'message' => 'Resimler başarıyla silindi.',
            'alert-type' => 'success'
        );
        return redirect()->route('website.mimaris.index')->with($notification)->with('activeTab', 'backendImage');
    }


}

