@extends('layout')


@section('title')
    Pedidos
@endsection

@section('cabecalho')
<h1>Pedidos</h1>
<p> Aqui temos a relação dos pedidos confirmados e pagos pelos clientes</p>
<nav id="menu">
  <ul>
      <li class="linha-vert"><a href="{{ route('pedidos.create')}}">Cadastrar</a></li>
      <li class="linha-vert"><a href="#">Catálogo</a></li>
      <li class="linha-vert"><a href="{{ route('compras.index') }}">Material</a></li>
  </ul>
</nav>
@endsection

@section('conteudo')


  @if (!empty($mensagem))
  <div class="alert alert-success">
    {{ $mensagem }}
  </div> 
  @endif
      
    <form action="{{ route('pedidos.search')}}" method="POST" id="pesquisa">
      @csrf
      <label for="data_inicio">Data Inicial</label>
      <input type="date" value="{{ request('data_inicio') }}" name="data_inicio" class="form_control">
      <label for="data_fim">Data Final</label>
      <input type="date" value="{{ request('data_fim') }}" name="data_fim" class="form_control">
      <button type="submit" class="btn btn-info">Pesquisar</button>
    </form>
  

  <table class="table">
    <thead>
      <tr>
        <th>Pedido</th>
        <th>Data</th>
        <th>Cliente</th>
        <th>Tema</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>Quantidade</th>
        <th>Arte Pronta</th>
        <th>Urgente</th>
        <th>Data Entrega</th>
        <th>Concluído</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pedidos as $pedido)
        <tr>
          <td>{{ $pedido->id }}</td>
          <td>{{ date('d/m/Y', strtotime($pedido->data)) }}</td>
          <td>{{ $pedido->cliente }}</td>
          <td>{{ $pedido->tema }}</td>
          <td>{{ $pedido->nome }}</td>
          <td>{{ $pedido->idade }}</td>
          <td>{{ $pedido->qtd }}</td>
          <td id="check">
            <input class="form-check-input" id="cb[{{ $pedido->id }}]" type="checkbox" onclick="cbClick({{ $pedido->id }})">
          </td>
          <td>{{ $pedido->urgente }}</td>
          <td>{{  date('d/m/Y', strtotime($pedido->prazo)) }}</td>
          <td>
            <a href=""><button type="button" class="btn btn-info">Finalizado</button></a>
          </td>
          <td>
            <form action="pedidos/{{ $pedido->id }}" method="POST"
                onsubmit="return confirm('Tem certeza que deseja excluir o pedido do cliente: {{ $pedido->cliente }}?')">
                
              @csrf
              @method('delete')
              <button class="btn btn-danger">Remover</button>
            </form>
          </td>
        </tr>
        
      @endforeach
      
    </tbody>
  </table>
@endsection

 


 
