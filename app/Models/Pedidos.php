<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;
    protected $fillable = ['data', 'cliente', 'tema', 'nome', 'idade', 'qtd', 'urgente', 'prazo'];
}

