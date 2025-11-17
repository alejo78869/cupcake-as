@extends('layouts.app')

@section('content')
<h2>{{ $cupcake->name }}</h2>

<img src="{{ $cupcake->image ?? 'https://via.placeholder.com/300' }}" width="300">

<p>{{ $cupcake->description }}</p>

<p><strong>Preço:</strong> {{ $cupcake->price }} R$</p>

<form method="POST" action="{{ route('cart.add', $cupcake->id) }}">
    @csrf
    <button class="btn">Adicionar ao carrinho</button>
</form>

@endsection
