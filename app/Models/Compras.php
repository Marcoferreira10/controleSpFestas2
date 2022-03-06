<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    use HasFactory;
    protected $table = 'compras';
    protected $fillable = ['data', 'material', 'embalagem', 'preco', 'precoUnit'];

    function calcPreco($preco, $precoUnit)
    {
        $this->preco = $preco;
        $this->precoUnit = $precoUnit;

        
    }
}
