<?php

declare(strict_types=1);

namespace App\Services\Contact;

use Illuminate\Database\Eloquent\Collection;

interface ContactServiceInterface
{
  public function createContact(string $name, string $email, string $content, int $departmentId);
  public function getAllContact(): Collection;
}
