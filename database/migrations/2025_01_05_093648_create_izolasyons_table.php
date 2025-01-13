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
        Schema::create('izolasyons', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('description')->nullable();

            $table->string('subtitle1')->nullable();
            $table->text('description1')->nullable();

            $table->string('subtitle2')->nullable();
            $table->text('description2')->nullable();

            $table->string('subtitle3')->nullable();
            $table->text('description3')->nullable();

            $table->string('frontimage1')->nullable();
            $table->string('frontimage2')->nullable();
            $table->string('frontimage3')->nullable();

            $table->longText('pagedescription')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('izolasyons');
    }
};
