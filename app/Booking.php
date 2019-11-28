<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $fillable = ['user_id','pelatih_id','tanggal', 'durasi', 'catatan','buktiPembayaran','status'];
}
