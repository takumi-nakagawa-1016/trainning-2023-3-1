<?php

declare(strict_type=1);

namespace App\Interface\RepositoryInterface\Contact;

interface ContactRepositroyInterface
{
  public function StoreContact(Contact $contact): void;
  public function GetAllContact(array $contacts): array;
  
}
