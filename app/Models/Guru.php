<?php

namespace App\Models;


// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Guru extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'guru';
    protected $primaryKey ='nip';
    protected $fillable = [
        'nip',
        'nama_lengkap',
        'jabatan',
        'email',
        'password',
    ];

   
    protected $hidden = [
        'password',
        'remember_token',
    ];

        protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    //public function getAuthIdentifierName()
    //{
       // return 'nip';
    //}
    
}
