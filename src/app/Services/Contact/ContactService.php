<?php

declare(strict_types=1);

namespace App\Services\Contact;

use App\Repositories\Contact\ContactRepositoryInterface;
use App\Services\Contact\ContactServiceInterface;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Contact;

class ContactService implements ContactServiceInterface
{
  private $ContactRepository;

  public function __construct(ContactRepositoryInterface $ContactRepository)
  {
      $this->ContactRepository = $ContactRepository;
  }

  public function createContact(string $name, string $email, string $content, int $departmentId): Contact
  {
    return $this->ContactRepository->createContact($name, $email, $content, $departmentId);
  }

  public function getAllContact(): Collection
  {
    return $this->ContactRepository->getAllContact();
  }
}

