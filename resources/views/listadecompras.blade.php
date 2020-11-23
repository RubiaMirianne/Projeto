@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
  <div class="conteiner col-md-8">
    <div class="card bg-lpurple">
      <div class="card-body text-white">
        <div class="row justify-content-center"><h1 style="font-size:60px">{{$filtro}}</h1></div>
          <div class="row offset-md-10">
            <select id="seletor">
              <option>Todos</option>
              @foreach($selecao as $item)
                <option>{{ $item->categoria }}</option>
              @endforeach
            </select>
           </div>
          <div class="row">
      <table class="table">
        <thead style="font-size:30px; color:white">
          <tr>
            <th scope="col">Produtos</th>
            <th scope="col">Preço</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody style="font-size:20px; color:white">
        @foreach($dados as $item)
          <tr>
            <th scope="row">{{ $item->nome }}</th>
            <td>{{ $item->preco }}</td>
            <td><a class="nav-link" href="{{ route('Carrinho') }}"><img src="{{url('/img/carrinho.svg')}}" alt=""></td>
          </tr>
        @endforeach
        </tbody>
      </table>
      {{ $dados ->links() }}
    </div>
  </div>
</div>
</div>
</div>
<script>
