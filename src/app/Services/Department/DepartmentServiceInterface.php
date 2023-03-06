<?php

declare(strict_types=1);

namespace App\Services\Department;

use Illuminate\Database\Eloquent\Collection;

/**
 * Interface DepartmentRepository
 * Departmentのデータ操作を行うRepository
 */
interface DepartmentServiceInterface
{
  /**
   * DBから取得したDepartmentをコントローラーに渡します
   * @return Collection 取得したDepartmentインスタンスの配列
   */
  public function getAllDepartment(): Collection;
}
