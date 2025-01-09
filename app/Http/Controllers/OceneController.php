<?php

namespace App\Http\Controllers;

use App\Models\Ocene;
use Illuminate\Http\Request;

class OceneController extends Controller
{
    public function index()
    {
       $ocene =  Ocene::all();
       return view("welcome", compact("ocene"));
    }

    public function dodajOcenu(Request $request)
    {
        $request->validate([
            "predmet" => "required|string|unique:ocene",
            "ocena" => "required|integer|min:1|max:5",
            "profesor" => "required|string"
        ]);

        Ocene::create([
           "predmet" => $request->get("predmet"),
            "ocena" => $request->get("ocena"),
            "profesor" => $request->get("profesor")
        ]);
        return redirect("/");
    }
}
