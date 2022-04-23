@extends('layout')

@section('title', 'Inserir Material')
     
@section('cabecalho')
  <h1>Inserir novo material</h1>  
  <p>Inserir os materiais utilizados nos produtos.</p>
  <nav id="menu">
    <ul>
      <li class="linha-vert"><a href="{{route('pedidos.index')}}">Pedidos</a></li>
      <li class="linha-vert"><a href="#">Catálogo</a></li> 
      <li class="linha-vert"><a href="{{route('compras.index')}}">Material</a></li>
    </ul>
  </nav>
@endsection

@section('conteudo')
  
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
            <input type="text" name="embalagem" id="embalagem" class="form-control"/>
          </div>
          <div class="col">
            <label for="preco">Preço Total</label>
            <input type="text" name="preco" id="preco" class="form-control" onblur="calcular();" />
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="precoUnit">Preço Unitário</label>
            <input type="text" name="precoUnit" id="precoUnit" class="form-control">
          </div>
          <div class="col" id="button">
            <button class="btn btn-primary btn-lg">Inserir</button>
          </div>
        </div>
      </form>
    </div>
    
@endsection