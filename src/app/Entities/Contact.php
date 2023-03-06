<?php
declare(strict_types=1);

namespace App\Entities;

class Contact
{
    protected $id;
    protected $name;
    protected $email;
    protected $content;
    protected $department_id;

    public function __construct(int $id, string $name, string $author)
    {
        $this->id     = $id;
        $this->name  = $name;
        $this->email = $email;
        $this->content = $content;
        $this->department_if = $department_id;
    }

    public function getId(): int
    {
        return $this->id;
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

    public function getDepartmentID(): string
    {
        return $this->department_id;
    }
}
