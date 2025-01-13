<?php

namespace App\Traits;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;

trait ImageUploadTrait
{

    /**
     * Klasörleri kontrol eder ve yoksa oluşturur.
     *
     * @param string $uploadPath
     * @return void
     */
    protected function ensureUploadDirectoriesExist($uploadPath)
    {
        $directories = ['large', 'medium', 'small'];

        foreach ($directories as $directory) {
            $path = public_path("{$uploadPath}/{$directory}");
            if (!file_exists($path)) {
                mkdir($path, 0777, true); // Klasörü oluştur
            }
        }
    }

    /**
     * Resimleri yükler ve farklı boyutlarda kaydeder.
     *
     * @param \Illuminate\Http\UploadedFile[] $images
     * @param string $uploadPath
     * @return array
     */
    public function uploadImages($images, $uploadPath)
    {

        // Klasörleri kontrol et ve yoksa oluştur
        $this->ensureUploadDirectoriesExist($uploadPath);

        $uploadedFiles = [];

        foreach ($images as $file) {

            try {

                $manager = new ImageManager(new Driver());

                // Orijinal resmi yükle
                $image = $manager->read($file);

                // Dosya adını özelleştir (zaman damgası + rastgele string + .webp)
                $filename = time() . '_' . Str::random(10) . '.webp';

                // Large boyut (1200x900)
                $image->resize(1200, 900);
                $largePath = public_path("{$uploadPath}/large/{$filename}");
                $image->toWebp()->save($largePath);

                // Medium boyut (800x600)
                $image->resize(800, 600);
                $mediumPath = public_path("{$uploadPath}/medium/{$filename}");
                $image->toWebp()->save($mediumPath);

                // Small boyut (400x300)
                $image->resize(400, 300);
                $smallPath = public_path("{$uploadPath}/small/{$filename}");
                $image->toWebp()->save($smallPath);

                $uploadedFiles[] = [
                    'filename' => $filename,
                    'filepath' => "{$uploadPath}/small/{$filename}", // Small klasöründeki yolu kaydediyoruz
                ];

            }catch (\Exception $e) {
                // Hata durumunda loglama veya kullanıcıya bilgi verme
                \Log::error("Resim işlenirken hata oluştu: " . $e->getMessage());
                continue; // Bir sonraki dosyaya geç
            }
        }

        return $uploadedFiles;
    }

    /**
     * Resimleri siler.
     *
     * @param array $filenames
     * @param string $uploadPath
     * @return void
     */
    public function deleteImages($filenames, $uploadPath)
    {

        foreach ($filenames as $filename) {

            $largePath = public_path("{$uploadPath}/large/{$filename}");
            $mediumPath = public_path("{$uploadPath}/medium/{$filename}");
            $smallPath = public_path("{$uploadPath}/small/{$filename}");

            if (file_exists($largePath)) {
                unlink($largePath);
            }
            if (file_exists($mediumPath)) {
                unlink($mediumPath);
            }
            if (file_exists($smallPath)) {
                unlink($smallPath);
            }
        }
    }
}
