<?php

declare(strict_type=1);

namespace App\Repositories\Contact;

use App\Interface\RepositoryInterface\Contact\ContactRepositoryInterface;
use App\Model\Contact;

class ContactEQRepository implements ContactRepositoryInterface
{

  private $eloquentContact;

  public function __construct(ContactRepositoryInterface $contactRepository)
  {
    $this->eloquentContact = $contactRepository;
  }

  public function findByContactId(int $id): ?Contact
  {
    $record = $this->eloquentContact->whereId($id)->first();
    if ($record === null) {
      return null;
    }
    return Contact(
      $record->id,
      $record->department_id,
      $record->email,
      $record->content
    );
  }

  public function storeContact(Contact $contactRequested): bool
  {
    $contact = $this->eloquentContact->newInstance();
    $contact->department_id = $contactRequested->department_id;
    $contact->name = $contactRequested->name;
    $contact->email = $contactRequested->email;
    $contact->content = $contactRequested->content;
    $contact->save();
    return $contact->save();
  }

  public function getAllContact(array $contacts): array
  {
    $contacts = Contact::all();
    return $contacts;
  }
}

