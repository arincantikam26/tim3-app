<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preferensi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'preferensi';

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'kriteria1', 'id');
    }
    public function kriteria_two()
    {
        return $this->belongsTo(Kriteria::class, 'kriteria2', 'id');
    }
}