<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index($id)
    {
        $id = $id;
        $nama = "Aliffian";
        $umur = "20";
        $alamat = "Purwodadi";
        return view('biodata', [
            'nama' => $nama,
            'umur' => $umur,
            'alamat' => $alamat,
            'id' => $id
        ]);
    }
}
