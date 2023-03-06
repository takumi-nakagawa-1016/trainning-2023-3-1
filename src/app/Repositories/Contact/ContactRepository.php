<?php

declare(strict_type=1);

namespace App\Repositories\Contact;

use App\Repositories\Contact\ContactRepositoryInterface;
use App\Services\Contact\ContactService;
use App\Services\Contact\ContactServiceInterface;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Collection;

class ContactRepository implements ContactRepositoryInterface
{

  protected $Contact;

  public function __construct(Contact $Contact)
  {
    $this->Contact = $Contact;
  }

  public function createContact($string $name, string $email, string $content, int $departmentId): Contact
  {
    // $contact = new Contact;
    return Contact::create(
      [
        'name' => $name,
        'email' => $email,
        'content' => $content,
        'department_id' => $departmentId
      ]
      );
  }

  public function getAllContact(): Collection
  {
    $contacts = Contact::with('department')->get();
    return $contacts;
  }
}

