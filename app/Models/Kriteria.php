<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;
    protected $table = 'kriteria';
    protected $guarded = ['id'];

    public function pertanyaans()
    {
        return $this->hasMany(Pertanyaan::class, 'id_kriteria');
    }
}