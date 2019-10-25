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

    public function addPelatih(Request $request){
        $messages = [
            'required' => 'Tolong isi form :attribute',
        ];

        $validator = Validator::make(request()->all(), [
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
 
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        // if (Auth::check()){

        // }
        
        $calonPelatih = new CalonPelatih([
            'name' => $request->nama,
            // 'alamat' => $request->alamat,
            'email' => $request->email,
            // 'facebook' => $request->facebook,
            // 'instagram' => $request->instagram,
            // 'telp' => $request->telp,
            'class_user_id' => '2',
            'status' => 'Menunggu Konfirmasi', 
            'password' => (Hash::make($request->password)),
        ]);
        $calonPelatih->save();
        return redirect()
            ->route('welcome')
            ->with(['success' => 'Pendaftaran anda berhasil! Verifikasi akan dilakukan oleh pihak kami']);        
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
