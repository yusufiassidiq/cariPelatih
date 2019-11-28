<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriOlahraga;
use Auth;

class PencariController extends Controller
{
    public function index()
    {
        if (Auth::guest()){
            $kategoriOlahragas = KategoriOlahraga::all();
        return view('welcome', compact('kategoriOlahragas'));
        }
        if (Auth::user()->ClassUser->ClassUser == 'Pencari'){
            $kategoriOlahragas = KategoriOlahraga::all();
        return view('welcome', compact('kategoriOlahragas'));
        }
        elseif(Auth::user()->ClassUser->ClassUser == 'Admin'){
            return redirect('/admin');
        }
        elseif(Auth::user()->ClassUser->ClassUser == 'Pelatih'){
            return redirect('/pelatih');
        }
    }

    public function list_booking(){
        return view('pencari.booking');
    }
    
}
