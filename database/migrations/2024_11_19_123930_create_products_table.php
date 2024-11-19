<?php

use App\Models\Product;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id('termek_id');
            $table->string('nev');
            $table->string('kep');
            $table->string('kategoria');
            $table->string('szin');
            $table->string('méret');
            $table->integer('ar');
            $table->timestamps();
        });

        Product::create([
            'nev'=> 'Hordó alakú macskabútor',
            'kep'  => 'kepek/butor1.png',
            'kategoria'=> 'Bútor',
            'szin' => 'fekete',
            'méret'=> 'M',
            'ar' => 12995
        ]);
        Product::create([
            'nev'=> 'Macskabútor',
            'kep'  => 'kepek/butor2.png',
            'kategoria'=> 'Bútor',
            'szin' => 'bézs',
            'méret'=> 'S',
            'ar' => 12995
        ]);
        Product::create([
            'nev'=> 'Ablakra akasztható fekhely',
            'kep'  => 'kepek/butor3.png',
            'kategoria'=> 'Bútor',
            'szin' => 'szürke',
            'méret'=> 'L',
            'ar' => 12995
        ]);
        Product::create([
            'nev'=> 'Macska mászóka',
            'kep'  => 'kepek/butor4.png',
            'kategoria'=> 'Bútor',
            'szin' => 'fekete',
            'méret'=> 'L',
            'ar' => 12995
        ]);
        Product::create([
            'nev'=> 'Kaktusz alakú kaparófa',
            'kep'  => 'kepek/butor5.png',
            'kategoria'=> 'Bútor',
            'szin' => 'bézs',
            'méret'=> 'M',
            'ar' => 12995
        ]);
        Product::create([
            'nev'=> 'Macska fekhely',
            'kep'  => 'kepek/butor6.png',
            'kategoria'=> 'Bútor',
            'szin' => 'szürke',
            'méret'=> 'S',
            'ar' => 12995
        ]);
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
