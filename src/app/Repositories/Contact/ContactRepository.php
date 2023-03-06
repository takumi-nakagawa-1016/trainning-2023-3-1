<?php

declare(strict_type=1);

namespace App\Repositories\Contact;

use App\Repositories\Contact\ContactRepositoryInterface;
use App\Services\Contact\ContactService;
use App\Services\Contact\ContactServiceInterface;
use App\Models\Contact;

class ContactRepository implements ContactRepositoryInterface
{

  protected $Contact;

  public function __construct(Contact $Contact)
  {
    $this->Contact = $Contact;
  }

  public function createContact($contactRequested)
  {
    $contact = new Contact;
    $contact::create(
      [
        'name' => $contactRequested->name,
        'email' => $contactRequested->email,
        'content' => $contactRequested->content,
        'department_id' => $contactRequested->department_id
      ]
      );
  }

  public function getAllContact()
  {
    $contacts = Contact::with('department')->get();
    return $contacts;
  }
}

