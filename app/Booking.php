<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $fillable = ['biaya','user_id','pelatih_id','namaPelatih','tanggal', 'durasi', 'catatan','buktiPembayaran','status'];

}

