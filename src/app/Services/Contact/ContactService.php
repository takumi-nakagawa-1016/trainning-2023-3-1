<?php

declare(strict_type=1);

namespace App\Services\Contact;

use App\Repositories\Contact\ContactRepositoryInterface;
use App\Services\Contact\ContactServiceInterface;

use App\Models\Contact;

class ContactService implements ContactServiceInterface
{
  private $ContactRepository;

  public function __construct(ContactRepositoryInterface $ContactRepository)
  {
      $this->ContactRepository = $ContactRepository;
  }

  public function createContact($contactRequested)
  {
    return $this->ContactRepository->createContact($contactRequested);
  }

  public function getAllContact()
  {
    return $this->ContactRepository->getAllContact();
  }
}

