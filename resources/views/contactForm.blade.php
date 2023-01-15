{{--
    プログラム名		：contactForm.blade.php
    プログラム説明	：書籍管理システムのbladeの元となるレイアウト
    作成日時			：2022/11/29
    作成者			：大木
--}}

@extends('common')

@section('title', 'お問い合わせ')
@section('main_class', 'contactForm')


@section('content')
<div>
  <p class="text-center">
    以下の項目をご記入いただき、確認ボタンを押してください。
    <span class="br">担当者より折り返しご連絡させていただきます。</span>
  </p>

  <form action="{{asset('/SendContact')}}" method="post">
    @csrf
    <div>
      <p>
        <span class="required">必須</span>
        <span class="bold">お問い合わせ内容</span>
      </p>
      <div class="form-area">
        <div>
          <input type="radio" id="item-1" name="contact_item" value="料金について" />
          <label for="item-1">料金について</label>
        </div>
        <div>
          <input type="radio" id="item-2" name="contact_item" value="サービスについて" />
          <label for="item-2">サービスについて</label>
        </div>
        <div>
          <input type="radio" id="item-3" name="contact_item" value="講師について" />
          <label for="item-3">講師について</label>
        </div>
        <div>
          <input type="radio" id="item-4" name="contact_item" value="サービスについて" />
          <label for="item-4">について</label>
        </div>
        <div>
          <input type="radio" id="item-5" name="contact_item" value="サービスについて" />
          <label for="item-5">サービスについて</label>
        </div>
      </div>
      @error('contact_item')
      <p class="warn">※{{$message}}</p>
      @enderror
    </div>

    <div>
      <p>
        <span class="required">必須</span>
        <span class="bold">詳細</span>
      </p>
      <div class="form-area">
        <textarea name="contact_content"></textarea>
      </div>
      @error('contact_content')
      <p class="warn">※{{$message}}</p>
      @enderror
    </div>

    <div>
      <p>
        <span class="required">必須</span>
        <label for="name">
          <span class="bold">お名前</span>
        </label>
      </p>
      <div class="form-area">
        <input type="text" id="name" name="name" value="" placeholder="山田華子" />
      </div>
      @error('name')
      <p class="warn">※{{$message}}</p>
      @enderror
    </div>

    <div>
      <p><label for="ruby"><span class="bold">ふりがな</span></label></p>
      <div class="form-area">
        <input type="text" id="ruby" name="ruby" value="" placeholder="やまだはなこ" />
      </div>
    </div>

    <div>
      <p><label for="age"><span class="bold">年齢</span></label></p>
      <div class="form-area">
        <input type="number" id="age" name="age" value="" placeholder="30" />
      </div>
    </div>

    <div>
      <p><span class="bold">性別</span></p>
      <div class="form-area gender">
        <div>
          <input type="radio" id="female" name="gender" value="女性">
          <label for="female">女性</label>
        </div>
        <div>
          <input type="radio" id="male" name="gender" value="男性">
          <label for="male">男性</label>
        </div>
        <div>
          <input type="radio" id="other" name="gender" value="その他">
          <label for="other">その他</label>
        </div>
      </div>
    </div>

    <div>
      <p>
        <span class="required">必須</span>
        <label for="email">
          <span class="bold">メールアドレス</span>
        </label>
      </p>
      <div class="form-area">
        <input type="email" id="email" name="email" value="" placeholder="abc@eikaiwa.com" />
      </div>
      @error('email')
      <p class="warn">※{{$message}}</p>
      @enderror
    </div>

    <div>
      <p><label for="phonenumber"><span class="bold">電話番号</span></label></p>
      <div class="form-area">
        <input type="tel" id="phonenumber" name="phonenumber" value="" />
      </div>
    </div>

    <div>
      <p>
        <label for="postcode"><span class="bold">郵便番号</span></label>
      </p>
      <div class="form-area">
        <input type="text" id="postcode" name="postcode" value="" />
      </div>
    </div>

    <div>
      <p>
        <label for="address"><span class="bold">住所</span></label>
      </p>
      <div class="form-area">
        <input type="text" id="address" name="address" value="" />
      </div>
    </div>

    <div>
      <p><span class="bold">利用規約</span></p>
      <div class="confirm-privacy-content">
        <div>
          <p>個人情報の取り扱いについて</p>
          <p>個人情報の取り扱いに関する事項に同意の上、お問い合わせください。</p>
        </div>
        <div>
          <p>お問い合わせの際に開示していただく個人情報について</p>
          <p>お問い合わせフォームを通じ開示していただいた個人情報については以下のようにお取り扱いいたします。</p>
        </div>
        <div>
          <p>個人情報の利用</p>
          <ol>
            <li>
              お問い合わせいただいた方を識別するために、氏名、メールアドレス、電話番号などの情報を利用いたします。
            </li>
            <li>お問い合わせに関する回答等の連絡をするために、氏名、メールアドレス、電話番号などの連絡先情報を利用いたします。</li>
            <li>上記の場合および法律によって認められる場合を除いて、お問い合わせいただいた方の個人情報を本人の同意を得ずに第三者に開示・提供することはありません
            </li>
          </ol>
        </div>
        <div>
          <p>個人情報の管理</p>
          <p>お預かりした個人情報は厳重に管理します。なお、一定期間保存の後、適切に廃棄手続を致します。</p>
        </div>
      </div>
      <div>
        <p>
          <input type="checkbox" id="confirm-privacy" name="confirm-privacy" />
          <span class="required">必須</span>
          <label for="confirm-privacy">
            <span class="bold">利用規約(個人情報の取り扱い)に同意する</span>
          </label>
        </p>
        @error('confirm-privacy')
        <p class="warn">※{{$message}}</p>
        @enderror
      </div>
    </div>

    <div><input type="submit" class="btn" name="send" value="送信"></div>

  </form>
</div>

@endsection
