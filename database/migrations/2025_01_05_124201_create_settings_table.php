<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('owner');
            $table->string('brand');
            $table->string('url');
            $table->string('title');
            $table->string('tel');
            $table->string('mobile');
            $table->string('city');
            $table->string('town');
            $table->string('district');
            $table->string('address');
            $table->longText('google_map');
            $table->string('lat');
            $table->string('lng');
            $table->string('email_info');
            $table->string('email_muhasebe');
            $table->string('facebook');
            $table->string('instagram');
            $table->text('footer_description');
            $table->text('meta_description');
            $table->string('logo');
            $table->string('favicon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
