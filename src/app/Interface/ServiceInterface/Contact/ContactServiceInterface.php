<?php

declare(strict_type=1);

namespace App\Interface\ServiceInterface\Contact;

interface ContactServiceInterface
{
  public function existContact(int $id): bool;
  public function storeContact(Contact $contact): bool;
  public function getAllContact(array $contacts): array;
}
