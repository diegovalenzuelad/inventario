<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    use HasFactory;

    protected $fillable = ['codigo', 'serie', 'marca_id', 'cpu', 'ram', 'sistema_id', 'macadress', 'ip', 'funcionario_id', 'telefono_id', 'impresora_id', 'monitor_id', 'trabajo_id'];

    public function computador(){
        return $this->belongsTo(Computador::class);
    }
}
