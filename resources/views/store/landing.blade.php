@extends('layouts.app')

@section('title', 'Магазин комп\'ютерної техніки — Підбір ПК')

@section('content')
    <h1>Вітаємо у магазині комп'ютерної техніки</h1>

    <div style="background-color: #e0f7fa; padding: 10px; margin-bottom: 20px;">
        <h3>{{ $promoMessage }}</h3>
    </div>

    <h3>Категорії товарів:</h3>
    <ul>
        @foreach($categories as $category)
            <li>{{ $category }}</li>
        @endforeach
    </ul>

    <h2>Заявка на консультацію та збірку ПК</h2>

    <form method="POST" action="{{ route('store.consultation') }}">
        @csrf

        <div>
            <label for="name">Ваше ім'я:</label><br>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
            @error('name')
            <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="email">Ваш Email:</label><br>
            <input type="text" id="email" name="email" value="{{ old('email') }}">
            @error('email')
            <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="budget">Орієнтовний бюджет (грн):</label><br>
            <input type="number" id="budget" name="budget" value="{{ old('budget') }}">
            @error('budget')
            <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="message">Побажання до конфігурації ПК:</label><br>
            <textarea id="message" name="message" rows="4">{{ old('message') }}</textarea>
            @error('message')
            <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <br>
        <button type="submit">Надіслати запит</button>
    </form>
@endsection
