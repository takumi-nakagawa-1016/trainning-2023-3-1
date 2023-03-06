<?php

declare(strict_type=1);

namespace App\Repositories\Contact;

use App\Repositories\Contact\ContactRepositoryInterface;
use App\Services\Contact\ContactService;
use App\Services\Contact\ContactServiceInterface;
use App\Entities\Contact;
use App\Models\Contact AS ContactModel;

class ContactRepository implements ContactRepositoryInterface
{

  protected $ContactModel;

  public function __construct(ContactModel $ContactModel)
  {
    $this->ContactModel = $ContactModel;
  }

  public function storeContact(Contact $contact): bool
  {
    $contactRequested = $this->eloquentContact->newInstance();
    $contactRequested->department_id = $contact->department_id;
    $contactRequested->name = $contact->name;
    $contactRequested->email = $contact->email;
    $contactRequested->content = $contact->content;
    $contactRequested->save();
    return $contactRequested->save();
  }

  public function getAllContact()
  {
    $contacts = ContactModel::with('department_id')->get();
    return $contacts;
  }
}

