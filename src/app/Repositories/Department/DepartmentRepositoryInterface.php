<?php

declare(strict_types=1);

namespace App\Repositories\Department;

use Illuminate\Database\Eloquent\Collection;

interface DepartmentRepositoryInterface
{
  public function getAllDepartment(): Collection;
}
