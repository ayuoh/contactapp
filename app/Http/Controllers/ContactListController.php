<?php

/**
 * プログラム名		：ContactListController.php
 * プログラム説明	：お問い合わせ管理システムの一覧のため、DBから全件データを取得するController
 * 作成日時			：2023/1/14
 * 作成者			：大木
 */

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactListController extends Controller
{
    public function index(Request $request)
    {
        // contactsテーブルの中身を新しい日付順に全件取得
        $contactList = Contact::orderBy('contact_date', 'desc')->get();
        return view('contactList', ['contactList' => $contactList]);
    }
}
