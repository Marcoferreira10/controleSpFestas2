@extends('templates.layout')

@section('title', 'Compras')
    


@section('cabecalho')
<h1>Compras de Materiais</h1>
<p>Aqui vão as informações das compras de material para fazer as sacolinhas</p>
<nav id="menu">
    <ul>
        <li class="linha-vert"><a href="{{ route('pedidos.index') }}">Pedidos</a></li>
        <li class="linha-vert"><a href="#">Catálogo</a></li>
        <li class="linha-vert"><a href="{{route('compras.create')}}">Inserir Material</a></li>
    </ul>
</nav>
@endsection

@section('conteudo') 

  <table class="table" >
      <thead>
          <th>Ordem</th>
          <th>Data Compra</th>
          <th>Material</th>
          <th>Embalagem</th>
          <th>Preço Total</th>
          <th>Preço Unitário</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($compras as $compra)
          <tr>
            <td>{{ $compra->id }}</td>
            <td>{{ date('d/m/Y', strtotime($compra->data)) }}</td>
            <td>{{ $compra->material }}</td>
            <td>{{ $compra->embalagem }}</td>
            <td>{{ $compra->preco }}</td>
            <td>{{ $compra->precoUnit }}</td>
            <td>
              <form action="compra/{{ $compra->id }}" method="POST"
                  onsubmit="return confirm('Tem certeza que deseja excluir esta compra de material: {{ $compra->nome }}?')">
                  
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
