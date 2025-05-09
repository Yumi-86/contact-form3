@extends('layouts.add')
@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm-form__content">
    <div class="confirm-form__heading">
        <h2>お問い合わせ内容確認</h2>
    </div>
    <form action="/contacts" method="post" class="form">
        @csrf
        <table class="form-table">
            <tr class="form-table__row">
                <th class="form-table__heading">名前</th>
                <td class="form-table__dtl">
                    <input type="text" name="name"  class="form-table__input--name" value="{{ $contact['name'] }}" readonly>
                </td>
            </tr>
            <tr class="form-table__row">
                <th class="form-table__heading">メールアドレス</th>
                <td class="form-table__dtl">
                    <input type="email" name="email"  class="form-table__input--email" value="{{ $contact['email'] }}" readonly>
                </td>
            </tr>
            <tr class="form-table__row">
                <th class="form-table__heading">電話番号</th>
                <td class="form-table__dtl">
                    <input type="tel" name="tel"  class="form-table__input--tel" value="{{ $contact['tel'] }}" readonly>
                </td>
            </tr>
            <tr class="form-table__row">
                <th class="form-table__heading">お問い合わせ内容</th>
                <td class="form-table__dtl">
                    <input type="text" name="content"  class="form-table__input--content" value="{{ $contact['content'] }}" readonly>
                </td>
            </tr>
        </table>
        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
        </div>
    </form>
</div>
@endsection