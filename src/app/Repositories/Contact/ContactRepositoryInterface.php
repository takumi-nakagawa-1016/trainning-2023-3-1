<?php


namespace App\Repositories\Contact;

use App\Entities\Contact;

interface ContactRepositoryInterface
{
  public function storeContact(Contact $contact): bool;
  public function getAllContact();
}
