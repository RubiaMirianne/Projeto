@extends('layouts.app')

@section('content')
<style>
  .div {
    display: flex;
    flex-direction: column;
    border: 2px solid #BE8FCE;
    border-radius: 4px;
    min-width: 100px;
    max-width: 800px;
    width: 100%;
  }

  .th {
    color: #000000;
    font-size: 24px;
    font-weight: 100;
    text-align: center;
  }

  .td {
    color: #000000;
    font-size: 20px;
    font-weight: 100;
    text-align: center;
  }

  .bt {
    border: none;
    background-color: #038420;
    color: #ffffff;
    font-size: 20px;
    width: 50px;
    margin: 0;
    padding: 0;
  }
</style>

@php
$valor = $carrinho->total
@endphp
<div class="div">
  <span style="border-bottom: 1px solid #971ac2;">Vamos às compras?</span>
  <table>
    <tr style="display: flex; flex: 1 auto; justify-content: space-around; margin-top: 24px; margin-bottom: 24px;">
      <th class="th">Produto</th>
      <th class="th">Preço</th>
      <th class="th">Adicionar</th>
    </tr>
    @foreach($produtos as $produto)
    <tr style="display: flex; flex: 1 auto; justify-content: space-around;">
      <td class="td">{{ $produto->nome }}</td>
      <td class="td">R$ {{ $produto->valor }}</td>
      <td>
        <button class="bt">+</button>
      </td>
    </tr>
    @endforeach
  </table>
  <span style="border-top: 1px solid #971ac2;">Valor total: {{ $valor }}</span>
</div>
@endsection