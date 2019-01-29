<?php

namespace App;
use Laravel\Passport\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'nik',
        'tempat_lahir',
        'tgl_lahir',
        'jenis_kelamin',
        'st_agama_kode',
        'alamat_tinggal',
        'alamat_asal',
        'no_telp',
        'pekerjaan',
        'roles',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getId() {
        return $this->id;
    }

    public function getUserRole() {
        return $this->roles;
    }

    public function TransMedisFisik()
    {
      return $this->hasMany('App\TransMedisFisik');
    }
}
