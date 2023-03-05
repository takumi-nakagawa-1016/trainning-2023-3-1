<?php

declare(strict_type=1);

namespace App\Repository\Contact;

use App\Interface\ContactEQRepositroyInterface;
use App\Model\Contact;

class ContactEQRepository implements ContactRepositroyInterface
{
  public function StoreContact(ContactService ): void
  {
    $contact = new Contact;
    $contact->department_id = $request->department_id;
    $contact->name = $request->name;
    $contact->email = $request->email;
    $contact->content = $request->content;
    $contact->save();
  }

  public function GetAllContact(array $contacts): array
  {
    $contacts = Contact::all();
    return $contacts;
  }
}

