@extends('layout')

@section('cabecalho')
  <h1>Cadastros</h1>
  <p>Cadastrar os pedidos solicitados e materiais para uso no dia a dia </p>
@endsection

@section('conteudo')
  <main>
    <nav id="menu">
      <ul>
          <li class="linha-vert"><a href="{{ route('pedidos.index')}}">Pedidos</a></li>
          <li class="linha-vert"><a href="#">Catálogo</a></li>
          <li class="linha-vert"><a href="#">Material</a></li>
      </ul>
  </nav>
  <div class="container">
    <h3>Cadastrar Pedidos</h3>
    <form class="row g-2" action="{{ route('pedidos.store')}}" method="post">
    @csrf
      <div>
        <label for="data">Data</label>
        <input type="date" name="data">
      </div>
      <div> 
        <label for="cliente">Cliente</label>
        <input type="text" name="cliente">
      </div>
      <div>
        <label for="tema">Tema</label>
        <input type="text" name="tema">
      </div>
      <div> 
        <label for="nome">Nome</label>
        <input type="text" name="nome">
      </div>
      <div>
        <label for="idade">Idade</label>
        <input type="text" name="idade">
      </div>
      <div>
        <label for="qtd">Quantidade</label>
        <input type="integer" name="qtd">
      </div>
      <div>
        <label for="urgente">Urgente?</label>
        <input type="checkbox" name="urgente">
      </div>
    <div>
      <label for="prazo">Para Quando?</label>
      <input type="date" name="prazo">
    </div>
      
      </div>
    </form>
  </div>
    <button type="submit" class="btn btn-primary">Adicionar</button><br>
  </main>

  <footer>

  </footer>
@endsection