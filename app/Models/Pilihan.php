<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pilihan extends Model
{
    use HasFactory;
    protected $table = 'pilihan';
    protected $guarded = ['id'];

    public function jurusansekolah()
    {
        return $this->belongsTo(JurusanSekolah::class, 'id_jurusan_sekolah');
    }
    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'prodi_id');
    }
}