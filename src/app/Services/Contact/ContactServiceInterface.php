<?php


namespace App\Services\Contact;

interface ContactServiceInterface
{
  public function createContact($contactRequested);
  public function getAllContact();
}
