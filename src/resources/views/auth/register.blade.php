@extends('layouts.app')

@section('title')
Registration
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('header')
<form class="header-nav" action="/login" method="get">
    @csrf
    <button class="for" type="submit">login</button>
</form>
@endsection

@section('content')
<p class="page-title">Register</p>

<div class="main__card">
    <div class="contents">
        <form class="content__input" action="/register" method="post">
            @csrf
            <div class="input__items">
                <p class="input__item-title">お名前</p>
                <input class="input__name" type="text" name="name" value="{{ old('name') }}" placeholder="例 山田　太郎">
            </div>
            <div class="alert__danger">
                @if ($errors->has('name'))
                @foreach($errors->get('name') as $message)
                <li>{{ $message }}</li>
                @endforeach
                @endif
            </div>
            <div class="input__items">
                <p class="input__item-title">メールアドレス</p>
                <input class="input__email" type="email" name="email" value="{{ old('email') }}" placeholder="例 test@example.com">
            </div>
            <div class="alert__danger">
                @if ($errors->has('email'))
                @foreach($errors->get('email') as $message)
                <li>{{ $message }}</li>
                @endforeach
                @endif
            </div>
            <div class="input__items">
                <p class="input__item-title">パスワード</p>
                <input class="input__pass" type="password" name="password" placeholder="例 coachtech1106">
            </div>
            <div class="alert__danger">
                @if ($errors->has('password'))
                @foreach($errors->get('password') as $message)
                <li>{{ $message }}</li>
                @endforeach
                @endif
            </div>
            <div class="input__button">
                <button class="button__submit" type="submit">登録</button>
            </div>
        </form>
    </div>
</div>
@endsection