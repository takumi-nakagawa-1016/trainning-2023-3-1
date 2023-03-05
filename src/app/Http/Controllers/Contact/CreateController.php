<?php

declare(strict_type=1);

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Contact\CreateRequest;
use App\Services\Contact\ContactService;

class CreateController extends Controller
{
    private $contact;

    public function __construct(ConstractService $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(CreateRequest $request)
    {
        $contactRequested->contact = $request;
        return redirect()->route('contact.index');
    }
}
