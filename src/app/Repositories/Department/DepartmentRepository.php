<?php

declare(strict_types=1);

namespace App\Repositories\Department;

use App\Repositories\Department\DepartmentRepositoryInterface;
use App\Services\Department\DepartmentService;
use App\Services\Department\DepartmentServiceInterface;
use App\Entities\Department;
use App\Models\Department AS DepartmentModel;
use Illuminate\Database\Eloquent\Collection;

class DepartmentRepository implements DepartmentRepositoryInterface
{

  protected $DepartmentModel;

  public function __construct(DepartmentModel $DepartmentModel)
  {
    $this->DepartmentModel = $DepartmentModel;
  }

  public function getAllDepartment(): Collection
  {
    $Departments = DepartmentModel::all();
    return $Departments;
  }
}

