<?php

declare(strict_type=1);

namespace App\Services\Contact;

use App\Interface\ServiceInterface\Contact\ContactServiceInterface;
use App\Interface\RepositoryInterface\Contact\ContactRepositoryInterface;

class ContactService
{
  private $contactRepository;

  public function __construct(ContactRepositoryInterface $contactRepository)
  {
      $this->contactRepository = $contactRepository;
  }

  public function existContact(int $id): bool
  {
    if (!$this->contactRepository->findByContactId($id)) {
      return false;
    }
    return ture;
  }

  public function storeContact(ContactService $contactRepository): bool
  {
    if ($this->storeContact($contactRepository)) {
      return true;
    }
    return false;
  }

  public function getAllContact(array $contacts): array
  {
    $contacts = Contact::all();
    return $contacts;
  }
}

