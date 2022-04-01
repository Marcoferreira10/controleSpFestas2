<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    use HasFactory;
    
    protected $fillable = ['data', 'material', 'embalagem', 'preco', 'precoUnit'];
    public $timestamps = false;

}    
