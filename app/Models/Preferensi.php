<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preferensi extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table = 'preferensis';
    

    public function preferensi()
    {
        return $this->hasMany(Preferensi::class);
    }
}
