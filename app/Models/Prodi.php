<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;
    protected $table = 'prodi';
    protected $primaryKey = 'id_prodi';
    protected $guarded = ['id'];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id');
    }

    public function pilihans()
    {
        return $this->hasMany(Pilihan::class);
    }
    public function pertanyaans()
    {
        return $this->belongsTo(Pertanyaan::class, 'id_prodi', 'id');
    }
}
