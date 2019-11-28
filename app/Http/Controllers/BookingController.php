<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use Validator;
use File;
use Hash;
use App\User;
use App\KategoriOlahraga;
use Auth;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function bookPelatih(Request $request){
        $temptgl = $request->tanggal;
        $tanggal = Carbon::parse($temptgl)->format('Y-m-d H:i:s');
        $idPelatih = $request->idPelatih;
        $tarifpelatih = User::find($idPelatih)->tarif;
        // dd($tarifpelatih);
        $booking = new Booking([
            'user_id' => $request->idPencari,
            'pelatih_id' => $request->idPelatih,
            'tanggal' => date($tanggal),
            'catatan' =>$request->catatan,
            'durasi'=>$request->durasi,
            'namaPelatih'=>$request->namaPelatih,
            'biaya'=>$tarifpelatih*$request->durasi,
            'status'=>"0",//0 belum konfirmasi, 1 pending, 2 sukses, 3 gagal
            // 'buktiPembayaran' => $request->buktiPembayaran,
            // 'status' => $request->status,
        ]);
        // dd($booking);
        $booking->save();
        return redirect()
            ->back()
            ->with(['success' => 'Pendaftaran anda berhasil! Verifikasi akan dilakukan oleh pihak kami']);
    }
    
}
