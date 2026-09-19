<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstrakurikuler extends Model
{
    use HasFactory;

    protected $table ="ekstrakurikulers";
    protected $fillable = [
        "name",
        "pembina",
        "jadwal",
        "deskripsi",
    ];
    public function siswas()
    {
        return $this->hasMany(Siswa::class, 'ekstrakurikuler_id');
    }

    public function pendaftaran()
    {
        return $this->hasMany(Pendaftaran::class, 'ekstrakurikuler_id');
    }
}