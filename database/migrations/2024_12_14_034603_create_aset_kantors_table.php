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
        Schema::create('aset_kantors', function (Blueprint $table) {

            $table->id();
            $table->string('category');
            $table->string('image');
            $table->string('name');
            $table->text('deskripsi');
            $table->string('pemilik');
            $table->text('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aset_kantors');
    }
};
