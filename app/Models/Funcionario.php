<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'ap_paterno', 'ap_materno', 'unidades_id'];

    
    public function unidades(){

        return $this->belongsTo(Unidade::class, 'unidades_id');
    }
    public function computadores(){
        return $this->hasMany(Computador::class);
    }
}
