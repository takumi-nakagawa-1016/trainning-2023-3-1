<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Contactモデル　お問い合わせに関するモデル
 * @param string $name 名前
 * @param string $email メールアドレス
 * @param string $content  お問い合わせ内容
 * @param int $age 年齢
 * @param int $gender 性別
 * @param int[] $departmentId 
 */
class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'content','age', 'gender', 'department_id'];

    

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    /**
     * Contactテーブルにはgenderは数字で表記されているため表示する際には数字を性別に変換するためのメソッド
     * @return string 性別　[1->"男",2->"女性",3->"未選択"]
     */
    // public function changeNumberIntoGender(int $contactGenderNumber):string
    // {
    //     if($contactGenderNumber === 1){
            
    //     }
    // }
}
