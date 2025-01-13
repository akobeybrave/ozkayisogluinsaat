<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Izolasyon;
use App\Models\Izolasyonimages;
use App\Traits\HandlesImageUpload;
use Illuminate\Http\Request;

use App\Traits\ImageUploadTrait;

class IzolasyonController extends Controller
{
    use HandlesImageUpload;
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $izolasyon = Izolasyon::find(1);
        $izolasyonImages = Izolasyonimages::all();
        $activeTab = session('activeTab', 'frontendText');
        return view('website.izolasyon.index', compact('izolasyon' , 'izolasyonImages',  'activeTab'));
    }

    public function izolasyonPageUpdate(Request $request){
        $request->validate([
            'pagedescription' => 'required',
        ]);

        $izolasyon = Izolasyon::find(1);

        $izolasyon->pagedescription = $request->pagedescription;
        $izolasyon->save();

        $notification = array(
            'message' => 'Sayfa Açıklama başarıyla güncellendi.',
            'alert-type' => 'success'
        );
        return redirect()->route('website.izolasyons.index')->with($notification)->with('activeTab', 'backendText');

    }

    public function izolasyonUpdate(Request $request){

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



        $izolasyon = Izolasyon::find(1);

        $izolasyon->title = $request->title;
        $izolasyon->description = $request->description;
        $izolasyon->subtitle1 = $request->subtitle1;
        $izolasyon->description1 = $request->description1;
        $izolasyon->subtitle2 = $request->subtitle2;
        $izolasyon->description2 = $request->description2;
        $izolasyon->subtitle3 = $request->subtitle3;
        $izolasyon->description3 = $request->description3;
        $izolasyon->save();

        $notification = array(
            'message' => 'Ön Sayfa Açıklama başarıyla güncellendi.',
            'alert-type' => 'success'
        );
        return redirect()->route('website.izolasyons.index')->with($notification)->with('activeTab', 'frontendText');
    }

    public function izolasyonResim1Update(Request $request)
    {

        $request->validate([
            'frontimage1' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
        ]);

        $izolasyon = Izolasyon::find(1);

        $imagePath = $this->saveImage($request->file('frontimage1'), $izolasyon->frontimage1, 'izolasyons');

        $izolasyon->update([
            'frontimage1' => $imagePath,
        ]);


        $notification = array(
            'message' => 'Resim 1 başarıyla güncellendi.',
            'alert-type' => 'success'
        );
        return redirect()->route('website.izolasyons.index')->with($notification)->with('activeTab', 'frontendImage');
    }

    public function izolasyonResim2Update(Request $request)
    {
        $request->validate([
            'frontimage2' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
        ]);

        $izolasyon = Izolasyon::find(1);

        $imagePath = $this->saveImage($request->file('frontimage2'), $izolasyon->frontimage2, 'izolasyons');

        $izolasyon->update([
            'frontimage2' => $imagePath,
        ]);

        $notification = array(
            'message' => 'Resim 2 başarıyla güncellendi.',
            'alert-type' => 'success'
        );
        return redirect()->route('website.izolasyons.index')->with($notification)->with('activeTab', 'frontendImage');
    }

    public function izolasyonResim3Update(Request $request)
    {
        $request->validate([
            'frontimage3' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
        ]);

        $izolasyon = Izolasyon::find(1);

        $imagePath = $this->saveImage($request->file('frontimage3'), $izolasyon->frontimage3, 'izolasyons');

        $izolasyon->update([
            'frontimage3' => $imagePath,
        ]);

        $notification = array(
            'message' => 'Resim 3 başarıyla güncellendi.',
            'alert-type' => 'success'
        );
        return redirect()->route('website.izolasyons.index')->with($notification)->with('activeTab', 'frontendImage');
    }

    public function izolasyonImagesStore(Request $request)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('images')) {

            $uploadedFiles = $this->uploadImages($request->file('images'), "uploads/izolasyonimages");

            if (empty($uploadedFiles)) {

                $notification = array(
                    'message' => 'Hiçbir resim yüklenemedi. Lütfen geçerli resimler yükleyin.',
                    'alert-type' => 'error'
                );
                return redirect()->route('website.izolasyons.index')->with($notification);
            }

            foreach ($uploadedFiles as $file) {
                Izolasyonimages::create([
                    'filename' => $file['filename'],
                    'filepath' => $file['filepath'],
                ]);
            }
        }

        $notification = array(
            'message' => 'Resimler başarıyla eklendi.',
            'alert-type' => 'success'
        );
        return redirect()->route('website.izolasyons.index')->with($notification)->with('activeTab', 'backendImage');

    }

    public function destroyMultiple(Request $request)
    {
        $request->validate([
            'images' => 'required|array',
        ]);

        $images = Izolasyonimages::whereIn('id', $request->images)->get();

        $filenames = $images->pluck('filename')->toArray();

        $this->deleteImages($filenames, "uploads/izolasyonimages");

        Izolasyonimages::whereIn('id', $request->images)->delete();

        $notification = array(
            'message' => 'Resimler başarıyla silindi.',
            'alert-type' => 'success'
        );
        return redirect()->route('website.izolasyons.index')->with($notification)->with('activeTab', 'backendImage');
    }


}

