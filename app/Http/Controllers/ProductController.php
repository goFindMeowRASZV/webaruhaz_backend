<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() //alapfüggvények amiket minden controllerben használunk
    {
        return Product::all(); //select * from Lendings
    }

    public function store(Request $request) 
    {
        $record = new Product();
        $record->fill($request->all()); // létrehozunk egyúj rekordot és utána kitöltjük az összeset
        $record->save(); //elmentjük a módosításokat
    }
    public function show(string $termek_id)   {
        $lending = Product::where('termek_id', $termek_id)   //paramétereket megnézi, hopgy megfelelnek e a különböző mezőknek
        ->get();
        return $lending[0]; //lekérdezi, hogy létezik e ilyen rekord, visszatér egy listával, aminek az egyetlen eleme lesz az a rekord
    }

    public function destroy($termek_id)
    {
        $this->show($termek_id)->delete(); //kitörli a megadott paraméterekkel rendelkező rekordot
    }
}



