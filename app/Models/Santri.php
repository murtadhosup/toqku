<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    protected $table = 'santri';
    protected $primaryKey = 'id_santri';
    protected $fillable = [
        'nama_santri',
        'gender',
        'tgl_lahir',
        'kota_lahir',
        'nama_ortu',
        'alamat_ortu',
        'hp',
        'email',
        'password',
        'tgl_masuk',
        'aktif',
    ];
    public $incrementing = false;


}
