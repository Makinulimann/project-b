<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = ['gambar', 'nama_kelas', 'deskripsi'];

    public function materi()
    {
        return $this->hasMany(Materi::class);
    }
}
