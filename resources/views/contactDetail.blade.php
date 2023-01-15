{{--
    プログラム名		：contactDetail.blade.php
    プログラム説明	：お問い合せ管理システムのお問い合せ詳細の画面(管理者)
    作成日時			：2023/1/14
    作成者			：大木
--}}

@extends('common')

@section('title', 'お問い合わせ詳細')
@section('main_class', 'contactDetail admin')


@section('content')
<div>
  <div>
    <a href="{{asset('/contactList')}}">お問い合わせ一覧</a>
  </div>

  <table class="detail-table">
    <tr>
      <th>お問い合わせ日時</th>
      <td>{{$contact->contact_date}}</td>
    </tr>
    <tr>
      <th>氏名</th>
      <td>{{$contact->name}}</td>
    </tr>
    <tr>
      <th>ふりがな</th>
      <td>{{$contact->ruby}}</td>
    </tr>
    <tr>
      <th>年齢</th>
      <td>{{$contact->age}}</td>
    </tr>
    <tr>
      <th>性別</th>
      <td>{{$contact->gender}}</td>
    </tr>
    <tr>
      <th>メールアドレス</th>
      <td>{{$contact->email}}</td>
    </tr>
    <tr>
      <th>電話番号</th>
      <td>{{$contact->phonenumber}}</td>
    </tr>
    <tr>
      <th>住所</th>
      <td>
        <ul>
          <li>{{$contact->postcode}}</li>
          <li>{{$contact->address}}</li>
        </ul>
      </td>
    </tr>
    <tr>
      <th>お問い合わせ項目</th>
      <td>{{$contact->contact_item}}</td>
    </tr>
    <tr>
      <th>お問い合わせ内容</th>
      <td>{{$contact->contact_content}}</td>
    </tr>
  </table>

  <div>
    <form action="{{asset('/reply')}}" method="post">
      @csrf
      <div>
        <label for="reply">返信</label>
        <textarea name="reply_content" id="reply"></textarea>
      </div>

      <div><input type="submit" value="送信" /></div>
    </form>
  </div>
</div>

@endsection
