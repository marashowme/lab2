@extends('layouts.app')

@section('title', 'Заявку прийнято')

@section('content')
    <h1 class="success">Дякуємо! Ваша заявка успішно прийнята</h1>
    <p>Наш менеджер зв'яжеться з вами найближчим часом.</p>

    <h3>Деталі заявки:</h3>
    <ul>
        <li><strong>Клієнт:</strong> {{ $name }}</li>
        <li><strong>Email:</strong> {{ $email }}</li>
        <li><strong>Бюджет:</strong> {{ $budget }} грн</li>
        <li><strong>Вимоги до ПК:</strong> {{ $message }}</li>
    </ul>

    <p>
        <a href="{{ route('store.landing') }}">Повернутися на головну сторінку магазину</a>
    </p>
@endsection
