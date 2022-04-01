<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Pedidos extends Model
{
    use HasFactory;
    
    protected $fillable = ['data', 'cliente', 'tema', 'nome', 'idade', 'qtd', 'urgente', 'prazo'];
    

    public function search($filter = null, Request $request)
    {
        $results = $this->where(function($query) use($filter, $request){
            $query = Pedidos::query();

        $request->validate([
            'data_inicio' => 'nullable|date_format:d/m/Y',
            'data_fim'    => 'required_if:data_incio|date_format:d/m/Y',
        ]);
        $data_incio = \DateTime::createFromFormat('d/m/Y', $request->get('data_incio'));
        $data_fim   = \DateTime::createFromFormat('d/m/Y', $request->get('data_fim'));
        
        if ($data_incio && $data_fim) {
            $query->whereDate('created_at', '>=', $data_incio);
            $query->whereDate('created_at', '<=', $data_fim);
        }
        
    })
    ->paginate();
    
        return $results;
    }
    
}

