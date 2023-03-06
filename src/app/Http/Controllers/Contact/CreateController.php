<?php

declare(strict_types=1);

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
    public function __invoke(CreateRequest $request)
    {
        $name = $request->name;
        $email = $request->email;
        $content = $request->content;
        $departmentId = (int) $request->department_id;

        $this->ContactService->createContact($name, $email, $content, $departmentId);
        return redirect()->route('contact.index');
    }
}
