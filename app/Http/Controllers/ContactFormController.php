<?php

/**
 * プログラム名		：ContactFormController.php
 * プログラム説明	：お問い合わせ管理システムの新規のお問い合わせ登録のためのController
 * 作成日時			：2023/1/14
 * 作成者			：大木
 */

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactFormController extends Controller
{
    public function create(Request $request)
    {
        // バリデーションのルールを設定
        $rules = [
            'contact_item' => 'required',
            'contact_content' => 'required',
            'name' => 'required',
            'email' => 'required',
            'confirm-privacy' => 'required'
        ];
        // エラーメッセージを指定
        $messages = [
            'contact_item.required' => 'お問い合わせ項目を選択してください。',
            'contact_content.required' => 'お問合せの内容を記入してください。',
            'name.required' => 'お名前を記入してください。',
            'email.required' => 'メールアドレスを記入してください。',
            'confirm-privacy.required' => '個人情報の取り扱いに関するチェックは必須です。'
        ];

        // 入力されたデータを取得、トークンは削除する
        $form = $request->all();
        unset($form['_token']);

        // Validatorインスタンスの生成
        $validator = Validator::make($form, $rules, $messages);

        // バリデーション引っかかったらエラー画面へ遷移
        if ($validator->fails()) {
            return redirect('/')->withErrors($validator)->withInput();
        }

        // 入力されたデータを格納するモデルクラスを生成
        $contact = new contact();
        // DBに登録
        $contact->fill($form)->save();

        return view('/sendSuccessfully');
    }
}
