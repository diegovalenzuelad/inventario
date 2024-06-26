<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sistema extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function computadores()
    {
        return $this->hasMany(Computador::class);
    }
    
}
