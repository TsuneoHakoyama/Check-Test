@extends('layouts.app')

@section('title')
Confirm
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/css/confirm.css') }}">
@endsection

@section('content')
@section('content')
<div class="confirm">
    <div class="main-title">
        <p>Confirm</p>
    </div>
    <form action="/thanks" class="confirm-form" method="post">
        @csrf
        <table class="confirm-form__table">
            <tr class="table__row">
                <th class="confirm__name">お名前</th>
                <td class="confirm__item-name">
                    <input type="text" name="name" value="{{ $contact['last_name'].'　'.$contact['first_name'] }}" readonly />
                    <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
                    <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
                </td>
            </tr>
            <tr class="table__row">
                <th class="confirm__gender">性別</th>
                <td class="confirm__item-gender">
                    <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly />
                    <input type="hidden" name="gender" value="{{ $contact['gender'] }}" readonly />
                </td>
            </tr>
            <tr class="table__row">
                <th class="confirm__email">メールアドレス</th>
                <td class="confirm__item-email">
                    <input type="text" name="email" value="{{ $contact['email'] }}" readonly />
                </td>
            </tr>
            <tr class="table__row">
                <th class="confirm__tel">電話番号</th>
                <td class="confirm__item-tel">
                    <input type="text" name="tell" value="{{ $contact['tel-no_1'].$contact['tel-no_2'].$contact['tel-no_3'] }}" readonly />
                    <input type="hidden" name="tel-no_1" value="{{ $contact['tel-no_1'] }}">
                    <input type="hidden" name="tel-no_2" value="{{ $contact['tel-no_2'] }}">
                    <input type="hidden" name="tel-no_3" value="{{ $contact['tel-no_3'] }}">
            </tr>
            <tr class="table__row">
                <th class="confirm__address">住所</th>
                <td class="confirm__item-address">
                    <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
                </td>
            </tr>
            <tr class="table__row">
                <th class="confirm__building">建物名</th>
                <td class="confirm__item-building">
                    <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
                </td>
            </tr>
            <tr class="table__row">
                <th class="confirm__categories">お問い合わせの種類</th>
                <td class="confirm__item-category">
                    <input type="text" name="category_id" value="{{ $contact['category_id'] }}" readonly />
                </td>
            </tr>
            <tr class="table__row">
                <th class="confirm__detail">お問合せ内容</th>
                <td class="confirm__item-detail">
                    <input type="text" name="detail" value="{{ $contact['detail'] }}" readonly />
                </td>
            </tr>
        </table>
        <div class="confirm__button">
            <button class="submit" type="submit">送信</button>
            <button class="rollback" type="submit" name="back" value="back">修正</button>
        </div>
    </form>
</div>
@endsection