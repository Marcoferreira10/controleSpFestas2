@extends('layout')

@section('cabecalho')
<h1>Pedidos</h1>
<p> Todos os pedidos</p>
@endsection

@section('conteudo')
<main>
  <nav id="menu">
    <ul>
        <li class="linha-vert"><a href="{{ route('pedidos.create')}}">Cadastrar</a></li>
        <li class="linha-vert"><a href="#">Catálogo</a></li>
        <li class="linha-vert"><a href="#">Material</a></li>
    </ul>
</nav>
<div class="container">
  <form action="">
    <tr>
      <th>Data</th>
      <th>Cliente</th>
      <th>Tema</th>
      <th>Nome</th>
      <th>Idade</th>
      <th>Quantidade</th>
      <th>Urgente</th>
      <th>Data Entrega</th>
    </tr>
    <tr class="list-group">
      @foreach ($pedidos as $pedido)
        <td class="list-group-item">{{ $pedido }}</td>
      @endforeach
    </tr>
    
  </form>
    
</div>
</main>

<footer>

</footer>
@endsection