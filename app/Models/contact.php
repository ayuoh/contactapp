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

class contact extends Model
{
    use HasFactory;
    // 割り当て許可(全て許可)
    protected $guarded = array('confirm-privacy');

    //DBのテーブル指定
    protected $table = 'contacts';
    // プライマリーキーを指定
    protected $primarykey = 'contact_id';
    // データの作成日のカラムを設定(更新はしないが設定しないと動かない)
    const CREATED_AT = 'contact_date';
    const UPDATED_AT = 'contact_date';

    // 引数に渡されたisbnの該当データをDBから取得する関数
    public function scopeSelectByContactId($query, $contactId)
    {
        return $query->where('contact_id', $contactId);
    }
}
