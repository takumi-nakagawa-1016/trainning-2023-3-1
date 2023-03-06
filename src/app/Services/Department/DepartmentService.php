<?php

declare(strict_type=1);

namespace App\Services\Department;

use App\Repositories\Department\DepartmentRepositoryInterface;
use App\Services\Department\DepartmentServiceInterface;
use App\Entities\Department;


class DepartmentService implements DepartmentServiceInterface
{
  private $DepartmentRepository;

  public function __construct(DepartmentRepositoryInterface $DepartmentRepository)
  {
      $this->DepartmentRepository = $DepartmentRepository;
  }

  public function getAllDepartment()
  {
    return $this->DepartmentRepository->getAllDepartment();
  }
}
