<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Pengurus extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table="pengurus";
    protected $primaryKey = 'id_pengurus';
    protected $fillable = [
        "nama_pengurus",
        "gender",
        "hp",
        "email",
        "password",
        "aktif",
    ];
}
