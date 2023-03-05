<?php

declare(strict_type=1);

namespace App\Interface;

interface ContactRepositroyInterface
{
  public function StoreContact(Contact $contact): void;
  public function GetContact(array $contacts): array;
  
}
