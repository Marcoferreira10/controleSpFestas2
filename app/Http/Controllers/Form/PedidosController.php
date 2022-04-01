<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Models\Pedidos;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pedidos = Pedidos::all();
        $mensagem = $request->session()->get('mensagem');
        return view('Admin.pages.index', compact(['pedidos', 'mensagem']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.pages.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedido = Pedidos::create($request->all());
        $request->session()->flash(
            'mensagem', "Pedido {$pedido->id} adicionado com sucesso. Cliente: {$pedido->cliente}"
        );
        return redirect('/pedidos');
    }        
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Pedidos::destroy($id);
        $request->session()->flash(
            'mensagem', "Pedido excluído com sucesso!"
        );

        return redirect('/pedidos');
        
    }

    /**
     * Search Pedidos
     */

     public function search(Request $request)
     {
        
          $pedidos = $this->repository->search($request->filter);
         return view('Admin.index', ['pedidos'=> $pedidos,]);
     }
}