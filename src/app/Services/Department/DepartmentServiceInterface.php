<?php

declare(strict_types=1);

namespace App\Services\Department;

use Illuminate\Database\Eloquent\Collection;

interface DepartmentServiceInterface
{
  public function getAllDepartment(): Collection;
}
