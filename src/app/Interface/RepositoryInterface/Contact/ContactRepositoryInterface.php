<?php

declare(strict_type=1);

namespace App\Interface\RepositoryInterface\Contact;

use App\Model\Contact;

interface ContactRepositoryInterface
{
  public function findByContactId(int $id): ?eloquentContact;
  public function storeContact(Contact $contact): bool;
  public function getAllContact(array $contacts): array;
}
