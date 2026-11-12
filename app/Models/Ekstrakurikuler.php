<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Ekstrakurikuler extends Model
{
    use HasFactory;

    protected $table = "ekstrakurikulers";

    protected $fillable = [
        "name",
        "pembina",
        "jadwal",
        "deskripsi",
    ];

    public function pendaftarans()
    {
        return $this->hasMany(Pendaftaran::class, 'eskul_id');
    }

    public function siswas()
    {
        return $this->hasMany(Siswa::class, 'ekstrakurikuler_id');
    }

    public function admins()
    {
        return $this->hasMany(User::class, 'ekstrakurikuler_id')
                    ->where('role', 'admin_ekstra');
    }
}
