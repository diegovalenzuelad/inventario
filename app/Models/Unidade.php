<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'sedes_id'];

    public function oficinas(){
        return $this->hasMany(Oficina::class);
    }
    public function sedes(){
        return $this->belongsTo(Sede::class, 'sedes_id');
    }

    public function funcionarios(){
        return $this->hasMany(Funcionario::class);
    }
}
