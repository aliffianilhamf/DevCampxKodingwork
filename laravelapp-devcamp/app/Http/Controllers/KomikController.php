<?php

namespace App\Http\Controllers;

use App\Models\Profil;


use Illuminate\Http\Request;

class KomikController extends Controller
{
    public function index()
    {
        $profils = Profil::all();

        return view('komik.komik', [
            'profils' => $profils
        ]);
    }
}
