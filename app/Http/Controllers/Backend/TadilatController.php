<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Tadilat;
use App\Models\Tadilatimages;
use App\Traits\HandlesImageUpload;
use Illuminate\Http\Request;

use App\Traits\ImageUploadTrait;

class TadilatController extends Controller
{
    use HandlesImageUpload;
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tadilat = Tadilat::find(1);
        $tadilatImages = Tadilatimages::all();
        $activeTab = session('activeTab', 'frontendText');
        return view('website.tadilat.index', compact('tadilat' , 'tadilatImages', 'activeTab'));
    }

    public function tadilatPageUpdate(Request $request){
        $request->validate([
            'pagedescription' => 'required',
        ]);

        $tadilat = Tadilat::find(1);

        $tadilat->pagedescription = $request->pagedescription;
        $tadilat->save();

        $notification = array(
            'message' => 'Sayfa Açıklama başarıyla güncellendi.',
            'alert-type' => 'success'
        );
        return redirect()->route('website.tadilats.index')->with($notification)->with('activeTab', 'backendText');

    }
    public function tadilatUpdate(Request $request){

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



        $tadilat = Tadilat::find(1);

        $tadilat->title = $request->title;
        $tadilat->description = $request->description;
        $tadilat->subtitle1 = $request->subtitle1;
        $tadilat->description1 = $request->description1;
        $tadilat->subtitle2 = $request->subtitle2;
        $tadilat->description2 = $request->description2;
        $tadilat->subtitle3 = $request->subtitle3;
        $tadilat->description3 = $request->description3;
        $tadilat->save();

        $notification = array(
            'message' => 'Ön Sayfa Açıklama başarıyla güncellendi.',
            'alert-type' => 'success'
        );
        return redirect()->route('website.tadilats.index')->with($notification)->with('activeTab', 'frontendText');
    }

    public function tadilatResim1Update(Request $request)
    {

        $request->validate([
            'frontimage1' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
        ]);

        $tadilat = Tadilat::find(1);

        $imagePath = $this->saveImage($request->file('frontimage1'), $tadilat->frontimage1, 'tadilats');

        $tadilat->update([
            'frontimage1' => $imagePath,
        ]);


        $notification = array(
            'message' => 'Resim 1 başarıyla güncellendi.',
            'alert-type' => 'success'
        );
        return redirect()->route('website.tadilats.index')->with($notification)->with('activeTab', 'frontendImage');
    }

    public function tadilatResim2Update(Request $request)
    {
        $request->validate([
            'frontimage2' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
        ]);

        $tadilat = Tadilat::find(1);

        $imagePath = $this->saveImage($request->file('frontimage2'), $tadilat->frontimage2, 'tadilats');

        $tadilat->update([
            'frontimage2' => $imagePath,
        ]);

        $notification = array(
            'message' => 'Resim 2 başarıyla güncellendi.',
            'alert-type' => 'success'
        );
        return redirect()->route('website.tadilats.index')->with($notification)->with('activeTab', 'frontendImage');
    }

    public function tadilatResim3Update(Request $request)
    {
        $request->validate([
            'frontimage3' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
        ]);

        $tadilat = Tadilat::find(1);

        $imagePath = $this->saveImage($request->file('frontimage3'), $tadilat->frontimage3, 'tadilats');

        $tadilat->update([
            'frontimage3' => $imagePath,
        ]);

        $notification = array(
            'message' => 'Resim 3 başarıyla güncellendi.',
            'alert-type' => 'success'
        );
        return redirect()->route('website.tadilats.index')->with($notification)->with('activeTab', 'frontendImage');
    }

    public function tadilatImagesStore(Request $request)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('images')) {

            $uploadedFiles = $this->uploadImages($request->file('images'), "uploads/tadilatimages");

            if (empty($uploadedFiles)) {

                $notification = array(
                    'message' => 'Hiçbir resim yüklenemedi. Lütfen geçerli resimler yükleyin.',
                    'alert-type' => 'error'
                );
                return redirect()->route('website.tadilats.index')->with($notification);
            }

            foreach ($uploadedFiles as $file) {
                Tadilatimages::create([
                    'filename' => $file['filename'],
                    'filepath' => $file['filepath'],
                ]);
            }
        }

        $notification = array(
            'message' => 'Resimler başarıyla eklendi.',
            'alert-type' => 'success'
        );
        return redirect()->route('website.tadilats.index')->with($notification)->with('activeTab', 'backendImage');

    }

    public function destroyMultiple(Request $request)
    {
        $request->validate([
            'images' => 'required|array',
        ]);

        $images = Tadilatimages::whereIn('id', $request->images)->get();

        $filenames = $images->pluck('filename')->toArray();

        $this->deleteImages($filenames, "uploads/tadilatimages");

        Tadilatimages::whereIn('id', $request->images)->delete();

        $notification = array(
            'message' => 'Resimler başarıyla silindi.',
            'alert-type' => 'success'
        );
        return redirect()->route('website.tadilats.index')->with($notification)->with('activeTab', 'backendImage');
    }


}

