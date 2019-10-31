<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalonPelatih extends Model
{
    protected $fillable = ['nama', 'email', 'password','class_user_id','kategoriOlahraga','tarif','profpic','cv','telp','alamat','tanggalLahir',
    'instagram','facebook','status',
    // ,'idClassUser'
    ];
    
    protected $table = 'calon_pelatih';

    protected $hidden = [
        'password', 'remember_token',
    ];
}
