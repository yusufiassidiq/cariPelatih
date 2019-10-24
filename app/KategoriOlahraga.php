<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriOlahraga extends Model
{
    protected $fillable = ['namaOlahraga'];
    protected $table = 'kategori_olahraga';
    public $incrementing = false;
    
    // public function pelatihs()
}
