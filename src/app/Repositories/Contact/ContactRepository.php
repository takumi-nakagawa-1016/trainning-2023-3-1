<?php

declare(strict_types=1);

namespace App\Repositories\Contact;

use App\Repositories\Contact\ContactRepositoryInterface;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Collection;

class ContactRepository implements ContactRepositoryInterface
{

  protected $Contact;

  public function __construct(Contact $Contact)
  {
    $this->Contact = $Contact;
  }
  /**
   * @inheritDoc
   */
  public function createContact(string $name, string $email, string $content,int $age, int $gender, int $departmentId): Contact
  {
    return Contact::create(
      [
        'name' => $name,
        'email' => $email,
        'content' => $content,
        'age' => $age,
        'gender' => $gender,
        'department_id' => $departmentId
      ]
    );
  }
  /**
   * @inheritDoc
   */
  public function getAllContact(): Collection
  {
    $contacts = Contact::with('department')->get();
    return $contacts;
  }
}

