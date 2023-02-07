<?php

/**
 * プログラム名		：contact.php
 * プログラム説明	：DBの contactsテーブルのModelクラス
 * 作成日時			：2023/1/14
 * 作成者			：大木
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    // 割り当て許可(以下は登録時に入れないものを指定している)
    protected $guarded = array('confirm-privacy', 'status');

    //DBのテーブル指定
    protected $table = 'contacts';
    // プライマリーキーを指定
    protected $primarykey = 'contact_id';
    // データの作成日のカラムを設定(更新はしないが設定しないと動かない)
    const CREATED_AT = 'contact_date';
    const UPDATED_AT = 'contact_date';

    // 引数に渡されたisbnの該当データをDBから取得する関数
    public function SelectByContactId($contactId)
    {
        return Contact::where('contact_id', $contactId)->first();
    }

    public function insertContact($insertContact)
    {
        Contact::fill($insertContact)->save();
    }
}
