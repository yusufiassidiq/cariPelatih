<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\CalonPelatih;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Session;
use Auth;
use App\KategoriOlahraga;

class AdminController extends Controller
{
    public function index(){
        $calonPelatihs = CalonPelatih::all();
        return view('admin.dashboard',compact('calonPelatihs'));
        // return view('admin.dashboard');
    }

    
    
    public function deleteCalonPelatih($id){
        $calonPelatih = CalonPelatih::find($id);
        $calonPelatih->delete();
        return redirect(route('Admin.dashboard'));
    }

    public function terimaCalonPelatih($id){
        $calonPelatih = CalonPelatih::find($id);
        $calonPelatih->update([
            'status'=>'Diterima'
        ]);
        $pelatihBaru = new User([
            'nama'=> $calonPelatih->nama,
            'email'=>$calonPelatih->email,
            'profpic'=>$calonPelatih->profpic,
            'cv'=>$calonPelatih->cv,
            'tarif'=>$calonPelatih->tarif,
            'alamat'=>$calonPelatih->alamat,
            'telp'=>$calonPelatih->telp,
            'class_user_id'=>$calonPelatih->class_user_id,
            'password'=>$calonPelatih->password,    
        ]);
        $pelatihBaru->save();
        $iduser = $calonPelatih->id;
        $user = User::find($iduser);
        $namakategoriOlahraga = $calonPelatih->kategoriOlahraga;
        $kategoriOlahraga = KategoriOlahraga::where('namaOlahraga',$namakategoriOlahraga)->first();
        $user->kategoriOlahraga()->attach($kategoriOlahraga);
        // return dd($user,$kategoriOlahraga);
        return redirect(route('Admin.dashboard'));
    }
}
