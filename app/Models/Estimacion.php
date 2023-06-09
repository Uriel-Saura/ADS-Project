<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estimacion extends Model
{
    use HasFactory;

    public function catalogos(){
        return $this->belongsToMany(Catalogo::class, 'catalogo_estimacion');
    }
}
