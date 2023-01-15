{{--
    プログラム名		：sendSuccessfully.blade.php
    プログラム説明	：お問い合せ管理システムのお問い合せ送信後の画面
    作成日時			：2023/1/14
    作成者			：大木
--}}

@extends('common')

@section('title', 'お問い合わせありがとうございました。')
@section('main_class', 'sendSuccessfully')


@section('content')
<div>
  <p>
    お問い合わせいただき、ありがとうございました。
    <span class="br">3営業日以内に担当者から連絡がない場合は、</span>
    <span class="br">お手数ですが、直接お電話にてお問い合わせをお願いいたします。</span>
  </p>

  <p><a href="{{asset('/')}}" class="btn">フォームへ戻る</a></p>
</div>

@endsection
