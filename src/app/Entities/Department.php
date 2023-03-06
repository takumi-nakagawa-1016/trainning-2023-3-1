<?php
declare(strict_types=1);

namespace App\Entities;

class Department
{
    protected $id;
    protected $name;
    protected $maneger_name;

    public function __construct(int $id, string $name, string $maneger_name)
    {
        $this->id     = $id;
        $this->name  = $name;
        $this->maneger_name = $maneger_name;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getManagerName(): string
    {
        return $this->manager_name;
    }

}
