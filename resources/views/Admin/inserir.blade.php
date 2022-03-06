@extends('layout')

@section('title', 'Inserir Material')
     
@section('cabecalho')
  <h1>Inserir novo material</h1>  
@endsection

@section('conteudo')
  <main>
    <nav id="menu">
      <ul>
        <li class="linha-vert"><a href="{{route('pedidos.index')}}">Pedidos</a></li>
        <li class="linha-vert"><a href="#">Catálogo</a></li> 
        <li class="linha-vert"><a href="{{route('compras.index')}}">Material</a></li>
      </ul>
    </nav>
    <h2 id="cadastro">Inserir Novo Material</h2>
    <div class="container">
      <form action="{{route('compras.store')}}" method="POST">
        @csrf
        <div class="row">
          <div class="col">
            <label for="data">Data</label>
            <input type="date" name="data" class="form-control">
          </div>
          <div class="col">
            <label for="material">Material</label>
            <input type="text" name="material" class="form-control">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="embalagem">Embalagem</label>
            <input type="integer" name="embalagem" class="form-control">
          </div>
          <div class="col">
            <label for="preco">Preço Total</label>
            <input type="integer" name="preco" class="form-control">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="precoUnit">Preço Unitário</label>
            <input type="integer" name="precoUnit" class="form-control">
          </div>
          <div class="col" id="button">
            <button class="btn btn-primary btn-lg">Inserir</button>
          </div>
        </div>
      </form>
    </div>
  </main>
@endsection