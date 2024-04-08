@extends('layouts.app')

@section('title')
Contact-Form
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/css/index.css') }}">
@endsection

@section('content')
<div class="contact">
    <div class="main-title">
        <p>Contact</p>
    </div>
    <form class="input-form" action="/confirm" method="post">
        @csrf
        <table class="input-form__table">
            <tr class="table__row">
                <th class="input__name">
                    <p class="input__title">お名前</p>
                </th>
                <td class="input__item-name">
                    <input class="input__last-name" type="text" name="last_name" value="{{ old('last_name') }}" placeholder=" 例: 山田" />
                    <input class="input__first-name" type="text" name="first_name" value="{{ old('first_name') }}" placeholder=" 例: 太郎" />
                    <div class="alert__danger">
                        @if ($errors->has('last_name'))
                        @foreach($errors->get('last_name') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                        @endif
                        @if ($errors->has('first_name'))
                        @foreach($errors->get('first_name') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                        @endif
                    </div>
                </td>
            </tr>
            <tr class="table__row">
                <th class="input__gender">
                    <p class="input__title">性別</p>
                </th>
                <td class="gender">
                    <input class="select__gender" type="radio" name="gender" value="1" checked />男性
                    <input class="select__gender" type="radio" name="gender" value="2" />女性
                    <input class="select__gender" type="radio" name="gender" value="3" />その他
                    <div class="alert__danger">
                        @if ($errors->has('gender'))
                        @foreach($errors->get('gender') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                        @endif
                    </div>
                </td>
            </tr>
            <tr class="table__row">
                <th class="input__email">
                    <p class="input__title">メールアドレス</p>
                </th>
                <td class="mail-address">
                    <input class="input__email-address" type="email" name="email" id="" value="{{ old('email') }}" placeholder=" test@example.com">
                    <div class="alert__danger">
                        @if ($errors->has('email'))
                        @foreach($errors->get('email') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                        @endif
                    </div>
                </td>
            </tr>
            <tr class="table__row">
                <th class="input__tel">
                    <p class="input__title">電話番号</p>
                </th>
                <td class="tel-no">
                    <input class="input__tell-1" type="text" name="tel-no_1" value="{{ old('tel-no_1') }}" placeholder="080"> -
                    <input class="input__tell-2" type="text" name="tel-no_2" value="{{ old('tel-no_2') }}" placeholder="1234"> -
                    <input class="input__tell-3" type="text" name="tel-no_3" value="{{ old('tel-no_3') }}" placeholder="5678">
                    <div class="alert__danger">
                        @if ($errors->has('tel-no_1'))
                        @foreach($errors->get('tel-no_1') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                        @endif
                        @if ($errors->has('tel-no_2'))
                        @foreach($errors->get('tel-no_2') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                        @endif
                        @if ($errors->has('tel-no_3'))
                        @foreach($errors->get('tel-no_3') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                        @endif
                    </div>
                </td>
            </tr>
            <tr class="table__row">
                <th class="input__item-address">
                    <p class="input__title">住所</p>
                </th>
                <td class="address">
                    <input class="input__address" type="text" name="address" value="{{ old('address') }}" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
                    <div class="alert__danger">
                        @if ($errors->has('address'))
                        @foreach($errors->get('address') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                        @endif
                    </div>
                </td>
            </tr>
            <tr class="table__row">
                <th class="input__building">
                    <p class="building__name">建物名</p>
                </th>
                <td class="building__name">
                    <input class="building__name" type="text" name="building" value="{{ old('building') }}" placeholder="例: 千駄ヶ谷マンション101">
                </td>
            </tr>
            <tr class="table__row">
                <th class="input__categories">
                    <p class="input__title">お問い合わせの種類</p>
                </th>
                <td class="categories">
                    <select class="select__categories" name="category_id" id="">
                        <option class="category" value="{{ old('content') }}" disabled selected style="display:none;">選択してください</option>
                        @foreach ($categories as $category)
                        <option class="category" value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                        @endforeach
                    </select>
                    <div class="alert__danger">
                        @if ($errors->has('category_id'))
                        @foreach($errors->get('category_id') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                        @endif
                    </div>
                </td>
            </tr>
            <tr class="table__row">
                <th class="input__detail">
                    <p class="input__title">お問い合わせ内容</p>
                </th>
                <td class="detail">
                    <div class="textarea__board">
                        <textarea class="input__detail-text" name="detail" id="" placeholder="お問合せ内容をご記載ください">{{ old('detail') }}</textarea>
                    </div>
                    <div class="alert__danger">
                        @if ($errors->has('detail'))
                        @foreach($errors->get('detail') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                        @endif
                    </div>
                </td>
            </tr>
        </table>
        <div class="button">
            <button class="button__submit" type="submit">確認画面</button>
        </div>
    </form>
</div>
@endsection