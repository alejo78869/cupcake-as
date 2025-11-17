@extends('layouts.app')

@section('content')
<h2>🛒 Seu Carrinho</h2>

@if(count($cart) === 0)
    <p>Seu carrinho está vazio.</p>
@else
    @foreach($cart as $id => $item)
        <div class="cupcake-card" style="width: 300px;">
            <h3>{{ $item['name'] }}</h3>
            <p>Preço: {{ $item['price'] }} R$</p>
            <p>Quantidade: {{ $item['quantity'] }}</p>

            <form method="POST" action="{{ route('cart.remove', $id) }}">
                @csrf
                <button class="btn">Remover</button>
            </form>
        </div>
    @endforeach
@endif
@endsection
