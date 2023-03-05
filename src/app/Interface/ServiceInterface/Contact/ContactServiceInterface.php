<?php

declare(strict_type=1);

namespace App\Interface\ServiceInterface\Contact;

interface ContactServiceInterface
{
  public function StoreContact(Contact $contact): void;
  public function GetAllContact(array $contacts): array;
}
