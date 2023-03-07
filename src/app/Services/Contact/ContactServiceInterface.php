<?php

declare(strict_types=1);

namespace App\Services\Contact;

use Illuminate\Database\Eloquent\Collection;
use App\Models\Contact;

/**
 * Interface ContactRepository
 * Contactのデータ操作を行うRepository
 */
interface ContactServiceInterface
{
  /**
   * Requestをコントロラーからリポジトリーに渡します
   * @param string $name 名前
   * @param string $email メールアドレス
   * @param string $content  お問い合わせ内容
   * @param int $age 年齢
   * @param int $gender 性別
   * @param int[] $departmentId 
   * @return Contact 渡すContact
   */
  public function createContact(string $name, string $email, string $content,int $age, int $gender, int $departmentId): Contact;
  
  /**
   * DBから取得したContactをコントローラーに渡します
   * @return Collection 取得したContactインスタンスの配列
   */
  public function getAllContact(): Collection;
}
