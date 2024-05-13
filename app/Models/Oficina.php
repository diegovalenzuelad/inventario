<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'unidades_id', 'sedes_id'];

    public function unidades(){
        return $this->belongsTo(Unidade::class,'unidades_id');
    }

    public function sedes(){
        return $this->belongsTo(Sede::class, 'sedes_id');
    }
}
