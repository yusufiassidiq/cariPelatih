<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriOlahraga;

class PencariController extends Controller
{
    public function index()
    {
        $kategoriOlahragas = KategoriOlahraga::all();
        // return view('pencari.dashboard', compact('kategoriOlahragas'));
        return view('welcome', compact('kategoriOlahragas'));
    }

    public function list_pelatih()
    {
        return view('list_pelatih');
    }
}
