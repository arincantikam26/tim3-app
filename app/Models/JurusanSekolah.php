<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JurusanSekolah extends Model
{
    use HasFactory;

    protected $table = 'jurusan_sekolahs';
    protected $guarded = ['id'];

}
