@extends('layouts.add')
@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
    </div>
    <form action="/contacts/confirm" method="post" class="form">
        @csrf
        <div class="form-group">
            <div class="form-group__title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form-group__content">
                <div class="form__input--text">
                    <input type="text" name="name" placeholder="テスト太郎" value="{{ old('name') }}">
                </div>
                @error('name')
                <div class="form__error">
                    {{ $message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="form-group__title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form-group__content">
                <div class="form__input--text">
                    <input type="email" name="email" placeholder="abc@example.com" value="{{ old('email') }}">
                </div>
                @error('email')
                <div class="form__error">
                    {{ $message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="form-group__title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form-group__content">
                <div class="form__input--text">
                    <input type="tel" name="tel" placeholder="0901234567" value="{{ old('tel') }}">
                </div>
                @error('tel')
                <div class="form__error">
                    {{ $message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="form-group__title">
                <span class="form__label--item">お問い合わせ内容</span>
            </div>
            <div class="form-group__content">
                <div class="form__input--text">
                    <textarea name="content" placeholder="資料をいただきたいです" rows="7"></textarea>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-group__button">
                <div class="form__button">
                    <button class="form__button--submit">送信</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection