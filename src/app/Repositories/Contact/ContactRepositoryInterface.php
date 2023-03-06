<?php


namespace App\Repositories\Contact;

interface ContactRepositoryInterface
{
  public function createContact($contactRequested);
  public function getAllContact();
}
