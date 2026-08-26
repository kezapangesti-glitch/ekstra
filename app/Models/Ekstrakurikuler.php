<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstrakurikuler extends Model
{
    use HasFactory;

    protected $table ="ekstrakurikuler";
    protected $fillable = [
        "name",
        "pembina",
        "jadwal",
        "deskripsi",
    ];
    public function pendaftaran()
    {
        return $this->hasMany(Pendaftaran::class, "eskul_id");
    }
}