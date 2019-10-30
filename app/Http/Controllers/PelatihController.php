<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CalonPelatih;
use Validator;
use File;
use Hash;

class PelatihController extends Controller
{
    public function index()
    {
        return view('pelatih.dashboard');
    }

    public function registerPelatih()
    {
        return view('pelatih.register_pelatih');
    }
    

    public function addPelatih(Request $request){
        $messages = [
            'required' => 'Tolong isi form :attribute',
        ];

        $validator = Validator::make(request()->all(), [
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'imgURL' => 'image|mimes:jpeg,png,jpg|max:2048',
 
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $imgURL = $request->file('imgURL');
        if(isset($imgURL))
        {
        $namaimgURL = time()."_".$imgURL->getClientOriginalName();
        // $namaProfpic = "asd";
        // isi dengan nama folder tempat kemana gambar diupload
		$tujuan_upload = 'pelatih/profpic';
        $imgURL->move($tujuan_upload,$namaimgURL);
        }
        else{
            dd("asd");
        }
        
        
        $calonPelatih = new CalonPelatih([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            // 'facebook' => $request->facebook,
            // 'instagram' => $request->instagram,
            'telp' => $request->telp,
            'tarif' => $request->tarif,
            'profpic' => $namaimgURL,
            'class_user_id' => '2',
            'status' => 'Menunggu Konfirmasi', 
            'password' => (Hash::make($request->password)),
        ]);
        
        $calonPelatih->save();
        
        // return redirect()
        //     ->route('welcome')
        //     ->with(['success' => 'Pendaftaran anda berhasil! Verifikasi akan dilakukan oleh pihak kami']);        
    }
}
