<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;

trait HandlesImageUpload
{
    public function saveImage(?UploadedFile $image, ?string $currentImage, string $directory): ?string
    {
        if ($image) {
            // Eski resmi sil
            if ($currentImage && file_exists(public_path($currentImage))) {
                unlink(public_path($currentImage));
            }

            // Yeni resmi kaydet
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = "uploads/$directory";
            $image->move(public_path($imagePath), $imageName);

            return "$imagePath/$imageName";
        }

        return $currentImage; // Yeni resim yoksa mevcut resmi döndür
    }
}