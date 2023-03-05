<?php

declare(strict_type=1);

namespace App\Services\Contact;

use App\Interface\ContactEQRepositroyInterface;

class ContactService
{
  private $contact;

  public function __construct(ConstractRepositoryInterface $contact)
  {
      $this->contact = $contact;
  }

  public function StoreContact(CreateRequest $request): void
  {
    $this
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

