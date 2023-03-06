<?php

declare(strict_types=1);

namespace App\Repositories\Contact;

use Illuminate\Database\Eloquent\Collection;
use App\Models\Contact;

/**
 * Interface ContactRepository
 * Contactのデータ操作を行うRepository
 */
interface ContactRepositoryInterface
{
  /**
   * Contactを作成します
   * @param string $name 名前
   * @param string $email メールアドレス
   * @param string $content  お問い合わせ内容
   * @param int $age 年齢
   * @param int $gender 性別
   * @param int[] $departmentId 
   * @return Contact 作成したContact
   */
  public function createContact(string $name, string $email, string $content,int $age, int $gender, int $departmentId): Contact;
  /**
   * ContactをDBから全て取得します 
   * @return Collection 取得したContactインスタンスの配列
   */
  public function getAllContact(): Collection;
}
