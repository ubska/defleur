@extends('layouts.app')

@section('content')
    <section id="hero">
        <h1>Добро пожаловать в Defleur</h1>
        <p>Лучшие букеты и композиции</p>
    </section>

    <section id="categories">
        <h2>Категории</h2>
        <div class="grid">
            @foreach ($categories as $category)
                <a href="{{ route('catalog.category', $category->slug) }}">{{ $category->name }}</a>
            @endforeach
        </div>
    </section>

    <section id="products">
        <h2>Популярные товары</h2>
        <div class="grid">
            @foreach ($products as $product)
                <div>
                    <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
                    <h3>{{ $product->name }}</h3>
                    <p>{{ $product->price }} BYN</p>
                </div>
            @endforeach
        </div>
    </section>
@endsection
