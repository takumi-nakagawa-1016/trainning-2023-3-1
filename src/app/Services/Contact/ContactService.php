<?php

declare(strict_type=1);

namespace App\Services\Contact;

use App\Repositories\Contact\ContactRepositoryInterface;
use App\Services\Contact\ContactServiceInterface;
use App\Entities\Contact;


class ContactService implements ContactServiceInterface
{
  private $ContactRepository;

  public function __construct(ContactRepositoryInterface $ContactRepository)
  {
      $this->ContactRepository = $ContactRepository;
  }

  public function storeContact(Contact $contact): bool
  {
    if ($this->storeContact($contact)) {
      return true;
    }
    return false;
  }

  public function getAllContact()
  {
    return $this->ContactRepository->getAllContact();
  }
}

