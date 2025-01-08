<?php

namespace App\Http\Controllers;

use App\Models\Ocene;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $ocene = Ocene::all();
        return view("/allProducts", compact("ocene"));
    }

    public function delete($products)
    {
       $singleProduct = Ocene::where(["id" => $products])->first();
       if($singleProduct == null)
       {
           die("Ovaj proizovd ne postoji!");
       }
       $singleProduct->delete(); // Varijabla $singleProduct vec sadrzi nas proizvod, pomocu delete-a mi njega brisemo i sda kada korisnik klikne na dugme obirsisi izvrsice se ovo.
        return redirect()->back(); // ovo znaci da kada se izvrsi delete vrati nas na tu stranicu.
    }
}
