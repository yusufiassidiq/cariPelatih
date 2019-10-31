<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CalonPelatih;
use Validator;
use File;
use Hash;
use App\User;
use App\KategoriOlahraga;

class PelatihController extends Controller
{
    public function index()
    {
        return view('pelatih.dashboard');
    }
    public function registerPelatih()
    {
        $kategoriOlahragas = KategoriOlahraga::all();
        return view('pelatih.register_pelatih', compact('kategoriOlahragas'));
    }
    public function addPelatih(Request $request){
        $messages = [
            'required' => 'Tolong isi form :attribute',
        ];

        $validator = Validator::make(request()->all(), [
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'profpic' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'cv' => 'required|image|mimes:jpeg,png,jpg|max:2048',
 
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        
        $profpic = $request->file('profpic');
        if(!empty($profpic)){
        $namaprofpic = time()."_".$profpic->getClientOriginalName();
        // isi dengan nama folder tempat kemana gambar diupload
		$tujuan_upload = 'pelatihfile/profpic';
        $profpic->move($tujuan_upload,$namaprofpic);
        }

        $cv = $request->file('cv');
        if(!empty($cv)){
        $namacv = time()."_".$cv->getClientOriginalName();
        // isi dengan nama folder tempat kemana gambar diupload
		$tujuan_upload = 'pelatihfile/cv';
        $cv->move($tujuan_upload,$namacv);
        }
        $idkategori = $request->kategoriOlahraga;
        $kategori = KategoriOlahraga::find($idkategori);
        // dd($kategori);
        $calonPelatih = new CalonPelatih([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            // 'facebook' => $request->facebook,
            // 'instagram' => $request->instagram,
            'kategoriOlahraga' =>$kategori->namaOlahraga,
            'telp' => $request->telp,
            'tarif' => $request->tarif,
            'profpic' => $namaprofpic,
            'cv' => $namacv,
            'class_user_id' => '2',
            'status' => 'Menunggu Konfirmasi', 
            'password' => (Hash::make($request->password)),
        ]);
        $calonPelatih->save();
        
        return redirect()
            ->route('registerPelatih')
            ->with(['success' => 'Pendaftaran anda berhasil! Verifikasi akan dilakukan oleh pihak kami']);        
    }
}
