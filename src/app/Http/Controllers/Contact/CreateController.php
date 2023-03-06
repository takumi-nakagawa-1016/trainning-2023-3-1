<?php

declare(strict_type=1);

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Contact\CreateRequest;
use App\Services\Contact\ContactServiceInterface;
use Illuminate\Database\Eloquent\Collection;

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
    public function __invoke(CreateRequest $request): ?object
    {
        $string $name, string $email, string $content, int $departmentId = $request;
        $this->ContactService->createContact(string $name, string $email, string $content, int $departmentId);
        return redirect()->route('contact.index');
    }
}
