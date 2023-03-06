<?php

declare(strict_type=1);

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Contact\CreateRequest;
use App\Services\Contact\ContactServiceInterface;

class CreateController extends Controller
{
    private ContactServiceInterface $ContactService;

    public function __construct(ContactServiceInterface $ContactService)
    {
        $this->ContactService = $ContactService;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(CreateRequest $request): object
    {
        $contactRequested = $request;
        $this->ContactService->createContact($contactRequested);
        return redirect()->route('contact.index');
    }
}
