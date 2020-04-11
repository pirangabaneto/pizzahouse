@extends('layouts.app')

@section('content')

    <div class="content">
        <img id="logo-img" src="/img/pizzahouse-logo.jpg" alt="pizza house logo">
        <div class="title m-b-md">
            The North's Best Pizzas
        </div>
        <p class="msg"> {{ session('msg') }}</p>
        <a href="{{ route('pizzas.create') }}">Order a Pizza</a>
    </div>
</div>
@endsection
