<?php

declare(strict_types=1);

namespace App\Repositories\Contact;

use Illuminate\Database\Eloquent\Collection;
use App\Models\Contact;

interface ContactRepositoryInterface
{
  public function createContact(string $name, string $email, string $content,int $age, int $gender, int $departmentId): Contact;
  public function getAllContact(): Collection;
}
