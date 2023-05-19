<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estimacion extends Model
{
    use HasFactory;

    public function catalogo(){
        return $this->belongsTo(Catalogo::class, 'id_catalogo', 'id');
    }
}
