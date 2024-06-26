<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    use HasFactory;

    protected $fillable = ['anexo', 'marca_id', 'modelo', 'tipo', 'macaddress', 'ip', 'serie'];

    public function marca(){
        return $this->belongsTo(Marca::class);
    }
    public function computadores(){
        return $this->hasMany(Computador::class);
    }
}
