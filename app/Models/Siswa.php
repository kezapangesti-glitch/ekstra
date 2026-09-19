<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Ekstrakurikuler;

class Siswa extends Model
{
    protected $table = 'siswas';

    protected $fillable = [
        'user_id',
        'name',
        'telp',
        'kelas',
        'ekstrakurikuler_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function ekstrakurikuler()
    {
        return $this->belongsTo(Ekstrakurikuler::class, 'ekstrakurikuler_id');
    }
}