<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'ap_paterno', 'ap_materno', 'unidad_id'];

    
    public function Unidad(){

        return $this->belongsTo(Unidade::class);
    }
    public function computadores(){
        return $this->hasMany(Computador::class);
    }
}
