<?php


namespace App\Services\Contact;

use Illuminate\Database\Eloquent\Collection;

interface ContactServiceInterface
{
  public function createContact($string $name, string $email, string $content, int $departmentId): ContactRepository;
  public function getAllContact(): Collection;
}
