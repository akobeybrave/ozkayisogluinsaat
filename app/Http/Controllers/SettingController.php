<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::find(1);
        $activeTab = session('activeTab', 'site');
        return view('website.setting.index', compact('setting', 'activeTab'));
    }

    public function edit()
    {
        $setting = Setting::find(1);
        return view('website.setting.edit', compact('setting'));
    }

    public function update(Request $request)
    {
        $setting = Setting::find(1);

        $data = $request->only(
            'owner',
            'brand',
            'url',
            'title',
            'tel',
            'mobile',
            'city',
            'town',
            'address',
            'google_map',
            'lat',
            'lng',
            'email1',
            'email2',
            'facebook',
            'instagram',
            'footer_description',
            'meta_description',
        );

        $setting->update($data);

        $notification = array(
            'message' => 'Ayarlar Güncellendi',
            'alert-type' => 'success'
        );

        return to_route("website.settings.index")->with($notification);
    }

    public function updateSiteBilgileri(Request $request)
    {
        $request->validate([
            'owner' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'url' => 'required|url|max:255',
            'title' => 'required|string|max:255',
        ]);

        $setting = Setting::firstOrNew();
        $setting->owner = $request->owner;
        $setting->brand = $request->brand;
        $setting->url = $request->url;
        $setting->title = $request->title;
        $setting->save();

        $notification = array(
            'message' => 'Site bilgileri başarıyla güncellendi.',
            'alert-type' => 'success'
        );


        return redirect()->back()->with($notification)->with('activeTab', 'site');
    }

    public function updateIletisimBilgileri(Request $request)
    {
        $request->validate([
            'city' => 'required|string|max:255',
            'town' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'tel' => 'required|string|max:20',
            'mobile' => 'required|string|max:20',
            'email_info' => 'required|string|max:255',
            'email_muhasebe' => 'required|string|max:255',
            'facebook' => 'required|string|max:255',
            'instagram' => 'required|string|max:255',
        ]);

        $setting = Setting::firstOrNew();

        $setting->city = $request->city;
        $setting->town = $request->town;
        $setting->district = $request->district;
        $setting->address = $request->address;
        $setting->tel = $request->tel;
        $setting->mobile = $request->mobile;
        $setting->email_info = $request->email_info;
        $setting->email_muhasebe = $request->email_muhasebe;
        $setting->facebook = $request->facebook;
        $setting->instagram = $request->instagram;

        $setting->save();

        $notification = array(
            'message' => 'İletişim bilgileri başarıyla güncellendi.',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification)->with('activeTab', 'contact');
    }


    public function updateMedya(Request $request)
    {
        $request->validate([
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'favicon' => 'nullable|image|mimes:ico,png|max:1024',
        ]);

        $setting = Setting::firstOrNew();

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            $setting->logo = $logoPath;
        }

        if ($request->hasFile('favicon')) {
            $faviconPath = $request->file('favicon')->store('favicons', 'public');
            $setting->favicon = $faviconPath;
        }

        $setting->save();

        $notification = array(
            'message' => 'Medya dosyaları başarıyla güncellendi.',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification)->with('activeTab', 'media');
    }



    public function logoEdit()
    {
        $setting = Setting::find(1);
        return view('admin.setting.logo-edit', compact('setting'));
    }

    public function logoUpdate(Request $request)
    {
        $logo = Setting::find(1);
        $oldImage = $logo->logo;
        $image_path = "uploads/logos/";

        if($request->hasFile("logo")) {
            $image = $request->logo;
            $ext = ".webp";
            $day = date('d');
            $mounth = date('m');
            $year = date('Y');
            $imageName = uniqid() . '-' . $day . '-' . $mounth . '-' . $year . $ext;
            $image->move(public_path($image_path), $imageName);
            $logo->logo = $imageName;
            if (File::exists(public_path($image_path . $oldImage))) {
                File::delete(public_path($image_path . $oldImage));
            }
        }
        $logo->save();

        $notification = array(
            'message' => 'Logo Güncellendi',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification)->with('activeTab', 'media');
    }

    public function faviconEdit()
    {
        $setting = Setting::find(1);
        return view('admin.setting.favicon-edit', compact('setting'));
    }


    public function faviconUpdate(Request $request)
    {
        $favicon = Setting::find(1);
        $oldImage = $favicon->favicon;
        $image_path = "uploads/logos/";

        if($request->hasFile("favicon")) {
            $image = $request->favicon;
            $ext = ".webp";
            $day = date('d');
            $mounth = date('m');
            $year = date('Y');
            $imageName = uniqid() . '-' . $day . '-' . $mounth . '-' . $year . $ext;
            $image->move(public_path($image_path), $imageName);
            $favicon->favicon = $imageName;
            if (File::exists(public_path($image_path . $oldImage))) {
                File::delete(public_path($image_path . $oldImage));
            }
        }
        $favicon->save();

        $notification = array(
            'message' => 'Favicon Güncellendi',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification)->with('activeTab', 'media');
    }
}
