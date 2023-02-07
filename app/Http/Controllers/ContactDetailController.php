<?php

/**
 * プログラム名		：ContactDetailController.php
 * プログラム説明	：お問い合わせ管理システムの詳細表示のため、DBから1件データを取得するController
 * 作成日時			：2023/1/14
 * 作成者			：大木
 */

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactDetailController extends Controller
{
    public function index(Request $request)
    {
        $contact = new Contact();

        // 送られてきたidのお問い合せ情報をDBから取得
        $detailContact = $contact->selectByContactId($request->contact_id);

        // DBにデータが存在しなかった場合、エラー画面に遷移
        if ($detailContact == null) {
            $errorMsgs = ["対象のお問い合わせがが存在しません。"];
            return view('error', ['errorMsgs' => $errorMsgs]);
        }

        return view('contactDetail', ['contact' => $detailContact]);
    }
}
