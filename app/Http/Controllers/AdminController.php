<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Session;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    // protected function validator(array $request)
    // {
    //     return Validator::make($request, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:6', 'confirmed'],
    //         // 'alamat' => ['nullable','string', 'max:255'],
    //         // 'telp' => ['nullable','string', 'min:11', 'max:13'],
    //     ]);
    // }
    public function addPelatih(Request $request){
        $messages = [
            'required' => 'Tolong isi form :attribute',
        ];

        $validator = Validator::make(request()->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
 
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        
        $pelatih = new User([
            'name' => $request->nama,
            // 'alamat' => $request->alamat,
            'email' => $request->email,
            // 'facebook' => $request->facebook,
            // 'instagram' => $request->instagram,
            // 'telp' => $request->telp,
            'class_user_id' => '2',
            'password' => ($request->password),
        ]);
        $pelatih->save();
        return redirect()
            ->route('welcome')
            ->with(['success' => 'Pelatih berhasil ditambahkan!']);
            
    }
}
