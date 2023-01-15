{{--
    プログラム名		：contactList.blade.php
    プログラム説明	：お問い合せ管理システムのお問い合せ一覧の画面(管理者)
    作成日時			：2023/1/14
    作成者			：大木
--}}

@extends('common')

@section('title', 'お問い合わせ一覧')
@section('main_class', 'contactList admin')


@section('content')
<div>
  <table class="list-table">
    <tr>
      <th>氏名</th>
      <th>お問い合わせ区分</th>
      <th>お問い合わせ内容</th>
      <th>お問い合わせ日時</th>
      <th>状況</th>
    </tr>
    @foreach($contactList as $contact)
    <tr>
      <td>{{$contact->name}}</td>
      <td>{{$contact->contact_item}}</td>
      <td class="contact-content">
        <a href="{{asset('/contactDetail')}}?contact_id={{$contact->contact_id}}">
          {{$contact->contact_content}}
        </a>
      </td>
      <td>{{$contact->contact_date}}</td>
      <td>{{$contact->status}}</td>
    </tr>
    @endforeach
  </table>
</div>

@endsection
