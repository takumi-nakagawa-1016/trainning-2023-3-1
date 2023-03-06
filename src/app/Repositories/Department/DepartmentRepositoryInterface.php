<?php

declare(strict_types=1);

namespace App\Repositories\Department;

use Illuminate\Database\Eloquent\Collection;
/**
 * Interface DepartmentRepository
 * Departmentのデータ操作を行うRepository
 */
interface DepartmentRepositoryInterface
{
  /**
   * DepartmentをDBから全て取得します 
   * @return Collection 取得したDepartmentインスタンスの配列
   */
  public function getAllDepartment(): Collection;
}
