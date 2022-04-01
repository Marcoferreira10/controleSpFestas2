@extends('templates.layout')

@section('title')
  Cadastro
@endsection

@section('cabecalho')
  <h1>Cadastros</h1>
  <p>Cadastrar os pedidos solicitados e materiais para uso no dia a dia </p>
  <nav id="menu">
    <ul>
        <li class="linha-vert"><a href="{{ route('pedidos.index')}}">Pedidos</a></li>
        <li class="linha-vert"><a href="#">Catálogo</a></li>
        <li class="linha-vert"><a href="{{ route('compras.index')}}">Material</a></li>
    </ul>
</nav>
@endsection

@section('conteudo')
      
  <h2 id="cadastro">Cadastrar Pedidos</h2>
  <div class="container">
    <form action="{{ route('pedidos.store') }}" method="post">
    @csrf
      <div class="row">
        <div class="col">
          <label for="data">Data</label>
          <input type="date" class="form-control"  name="data">
        </div>
        <div class="col">
          <label for="cliente">Cliente</label>
          <input type="text" class="form-control" name="cliente">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="tema">Tema</label>
          <input type="text" class="form-control" name="tema">
        </div>
        <div class="col"> 
          <label for="nome">Nome</label>
          <input type="text" class="form-control" name="nome">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="idade">Idade</label>
          <input type="text" class="form-control" name="idade">
        </div>
        <div class="col">
          <label for="qtd">Quantidade</label>
          <input type="integer" class="form-control" name="qtd">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="urgente">Urgente?</label>
          <input class="form-check-input" type="checkbox" value="S" name="urgente">
        </div>
        <div class="col">
          <label for="prazo">Para Quando?</label>
          <input type="date" class="form-control" name="prazo">
        </div>
      </div> 
    
      <div id="button">
        <button class="btn btn-primary">Adicionar</button>
      </div>
    </form>
  </div>
 @endsection