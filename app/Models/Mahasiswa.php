<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';


    protected $fillable = [
        'Fullname',
        'NIM',
        'NIDN',
        'Tempat_Lahir',
        'Tanggal_Lahir',
        'Alamat'
    ];
}