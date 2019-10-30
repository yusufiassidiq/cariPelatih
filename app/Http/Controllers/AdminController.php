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
            'name'=> $calonPelatih->name,
            'email'=>$calonPelatih->email,
            'class_user_id'=>$calonPelatih->class_user_id,
            'password'=>$calonPelatih->password,    
        ]);
        $pelatihBaru->save();
        // return dd($pelatihBaru);
        return redirect(route('Admin.dashboard'));
    }
}
