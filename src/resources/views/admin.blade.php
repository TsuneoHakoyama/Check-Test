@extends('layouts.app')
<style>
    svg.w-5.h-5 {
        width: 30px;
        height: 30px;
    }
</style>

@section('title')
Admin
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('header')
<form class="header-nav" action="/logout" method="post">
    @csrf
    <button class="for" type="submit">logout</button>
</form>
@endsection

@section('content')
<p class="page-title">Admin</p>
<div class="search">
    <form action="" class="search-form" method="post">
        @csrf
        <input type="text" class="search-form__text" name="" placeholder="名前やメールアドレスを入力してください">
        <select name="gender" id="gender" class="search-form__gender">
            <option class="select__gender" value="" disabled selected style="display:none;">性別</option>
            <option value="" class="select__gender">全て</option>
            <option value="" class="select__gender">男性</option>
        </select>
        <select name="category" id="" class="search-form__category">
            <option class="select__category" value="" disabled selected style="display:none;">お問合せの種類</option>
            <option value="" class="select__gender">全て</option>
            @foreach ($categories as $category)
            <option value="{{ $category['content'] }}"></option>
            @endforeach
        </select>
        <input type="date" name="date" id="" />
        <button class="button__search" type="submit">検索</button>
        <button class="button__reset" type="reset">リセット</button>
    </form>
    <div class="data-table">
        {{ $contacts->links() }}
        <table class="table">
            <tr>
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>お問合せの種類</th>
                <th></th>
            </tr>
            @foreach ($contacts as $contact)
            <tr>
                <td class="table__name">{{ $contact['last_name']."　".$contact['first_name'] }}</td>
                <td class="table__gender">{{ $contact['gender'] }}</td>
                <td class="table__email">{{ $contact['email'] }}</td>
                <td class="table__category">{{ $contact['category_id']}}</td>
                <td class="table__detail">
                    <button class="detail">詳細</button>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection