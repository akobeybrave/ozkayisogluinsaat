<?php



use App\Http\Controllers\Backend\ArticleController;
use App\Http\Controllers\Backend\IzolasyonController;
use App\Http\Controllers\Backend\MimariController;
use App\Http\Controllers\Backend\TadilatController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\WebsiteDashboardController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/tadilat', [HomeController::class, 'tadilat'])->name('tadilat');

Route::get('/cizim', [HomeController::class, 'cizim'])->name('cizim');

Route::get('/izolasyon', [HomeController::class, 'izolasyon'])->name('izolasyon');

Route::get('/hakkimizda', [HomeController::class, 'about'])->name('about');

Route::get('/iletisim', [HomeController::class, 'contact'])->name('contact');


Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send-email');




Route::middleware(['auth', 'admin'])->prefix("admin")->name("admin.")->group(function () {

    Route::get('dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');

    Route::resource("users", UserController::class);

    Route::post('users/toggle-status/{id}', [UserController::class, 'toggleStatus'])->name('users.toggle-status');

    Route::get('users/change-password/{id}', [UserController::class, 'changePassword'])->name('users.change-password');
    Route::post('users/update-password/{id}', [UserController::class, 'updatePassword'])->name('users.update-password');


});


Route::middleware(['auth', 'website'])->prefix("website")->name("website.")->group(function () {

    Route::get('/dashboard', [WebsiteDashboardController::class, 'dashboard'])->name('dashboard');

    Route::resource("categories", CategoryController::class);

    Route::resource("tadilats", TadilatController::class);

    Route::post('tadilat-update', [TadilatController::class, 'tadilatUpdate'])->name('tadilat-update');
    Route::post('tadilat-page-update', [TadilatController::class, 'tadilatPageUpdate'])->name('tadilat-page-update');
    Route::post('tadilat-resim1-update', [TadilatController::class, 'tadilatResim1Update'])->name('tadilat-resim1-update');
    Route::post('tadilat-resim2-update', [TadilatController::class, 'tadilatResim2Update'])->name('tadilat-resim2-update');
    Route::post('tadilat-resim3-update', [TadilatController::class, 'tadilatResim3Update'])->name('tadilat-resim3-update');
    Route::post('tadilat-images-store', [TadilatController::class, 'tadilatImagesStore'])->name('tadilat-images-store');
    Route::delete('tadilat-images-delete', [TadilatController::class, 'destroyMultiple'])->name('tadilat-images-delete');


    Route::resource("mimaris", MimariController::class);

    Route::post('mimari-update', [MimariController::class, 'mimariUpdate'])->name('mimari-update');
    Route::post('mimari-page-update', [MimariController::class, 'mimariPageUpdate'])->name('mimari-page-update');
    Route::post('mimari-resim1-update', [MimariController::class, 'mimariResim1Update'])->name('mimari-resim1-update');
    Route::post('mimari-resim2-update', [MimariController::class, 'mimariResim2Update'])->name('mimari-resim2-update');
    Route::post('mimari-resim3-update', [MimariController::class, 'mimariResim3Update'])->name('mimari-resim3-update');
    Route::post('mimari-images-store', [MimariController::class, 'mimariImagesStore'])->name('mimari-images-store');
    Route::delete('mimari-images-delete', [MimariController::class, 'destroyMultiple'])->name('mimari-images-delete');


    Route::resource("izolasyons", IzolasyonController::class);

    Route::post('izolasyon-update', [IzolasyonController::class, 'izolasyonUpdate'])->name('izolasyon-update');
    Route::post('izolasyon-page-update', [IzolasyonController::class, 'izolasyonPageUpdate'])->name('izolasyon-page-update');
    Route::post('izolasyon-resim1-update', [IzolasyonController::class, 'izolasyonResim1Update'])->name('izolasyon-resim1-update');
    Route::post('izolasyon-resim2-update', [IzolasyonController::class, 'izolasyonResim2Update'])->name('izolasyon-resim2-update');
    Route::post('izolasyon-resim3-update', [IzolasyonController::class, 'izolasyonResim3Update'])->name('izolasyon-resim3-update');
    Route::post('izolasyon-images-store', [IzolasyonController::class, 'izolasyonImagesStore'])->name('izolasyon-images-store');
    Route::delete('izolasyon-images-delete', [IzolasyonController::class, 'destroyMultiple'])->name('izolasyon-images-delete');

    Route::get('/settings', [SettingController::class, 'index'])->name("settings.index");
    Route::get('/settings/edit', [SettingController::class, 'edit'])->name("settings.edit");
    Route::post('/settings/update', [SettingController::class, 'update'])->name("settings.update");

    Route::get('/settings/logo-edit', [SettingController::class, 'logoEdit'])->name("settings.logo-edit");
    Route::post('/settings/logo/update', [SettingController::class, 'logoUpdate'])->name("settings.logo.update");

    Route::get('/settings/favicon-edit', [SettingController::class, 'faviconEdit'])->name("settings.favicon-edit");
    Route::post('/settings/favicon/update', [SettingController::class, 'faviconUpdate'])->name("settings.favicon.update");

    Route::get('/ayarlar', [SettingController::class, 'index'])->name('ayarlar.index');
    Route::post('/ayarlar/site-bilgileri', [SettingController::class, 'updateSiteBilgileri'])->name('ayarlar.updateSiteBilgileri');
    Route::post('/ayarlar/iletisim-bilgileri', [SettingController::class, 'updateIletisimBilgileri'])->name('ayarlar.updateIletisimBilgileri');
    Route::post('/ayarlar/medya', [SettingController::class, 'updateMedya'])->name('ayarlar.updateMedya');

    Route::resource("heroes", HeroController::class);


});




require __DIR__.'/auth.php';
