<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $table = 'tbl_jurusan';
    protected $guarded = [];

    public function prodis()
    {
        return $this->hasMany(Prodi::class);
    }
}