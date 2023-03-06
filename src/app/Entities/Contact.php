<?php
declare(strict_types=1);

namespace App\Entities;

class Contact
{
    protected $name;
    protected $email;
    protected $content;
    protected $departmentId;

    public function __construct($name, $email, $content, $departmentId)
    {
        $this->name  = $name;
        $this->email = $email;
        $this->content = $content;
        $this->departmentId = $departmentId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getDepartmentID(): int
    {
        return $this->departmentId;
    }
}
