<?php

declare(strict_types=1);

namespace App\Repositories\Contact;

use Illuminate\Database\Eloquent\Collection;

interface ContactRepositoryInterface
{
  public function createContact(string $name, string $email, string $content, int $departmentId);
  public function getAllContact(): Collection;
}
