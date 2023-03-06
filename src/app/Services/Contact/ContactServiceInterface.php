<?php


namespace App\Services\Contact;

use App\Entities\Contact;

interface ContactServiceInterface
{
  public function storeContact(Contact $contact): bool;
  public function getAllContact();
}
