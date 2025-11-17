@extends('layouts.app')

@section('content')
<h2>🍰 Nossos Cupcakes</h2>

<div style="display: flex; flex-wrap: wrap;">
    @foreach($cupcakes as $cupcake)
        <div class="cupcake-card" style="width: 250px;">
            <img src="{{ $cupcake->image ?? 'https://via.placeholder.com/250' }}">
            <h3>{{ $cupcake->name }}</h3>
            <p>{{ $cupcake->price }} R$</p>

            <a class="btn" href="{{ route('cupcake.show', $cupcake->id) }}">
                Ver detalhes
            </a>
        </div>
    @endforeach
</div>
@endsection
