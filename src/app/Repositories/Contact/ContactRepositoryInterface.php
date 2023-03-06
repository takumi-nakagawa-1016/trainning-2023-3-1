<?php


namespace App\Repositories\Contact;

use Illuminate\Database\Eloquent\Collection;

interface ContactRepositoryInterface
{
  public function createContact($string $name, string $email, string $content, int $departmentId): Contact;
  public function getAllContact(): Collection;
}
