<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','class_user_id','profpic','cv','telp','alamat','tanggalLahir',
        'instagram','facebook'
        // ,'idClassUser'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function ClassUser()
    {
      return $this->belongsTo('App\ClassUser');
    }
    public function hasClassUser($classUser)
    {
        $role = $this->ClassUser;
        return $classUser == $role->ClassUser;
    }
    public function kategoriOlahraga()
    {
        return $this->belongsToMany('App\KategoriOlahraga')->withPivot('ended_at')->withTimestamps();
    }
}
