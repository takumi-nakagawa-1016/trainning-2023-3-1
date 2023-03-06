<?php

declare(strict_type=1);

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Contact\CreateRequest;
use App\Services\Contact\ContactService;
use App\Interface\ServiceInterface\Contact\ContactServiceInterface;

class CreateController extends Controller
{
    private ContactServiceInterface $contactService;

    public function __construct(ContactServiceInterface $contactService)
    {
        $this->contactService = $contactService;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(CreateRequest $request): object
    {
        if ($this->contactService->existContact($request->id)) {
            return redirect()->route('contact.index')->with('flash_message', '同じお問い合わせが存在しているため保存できませんでした。');
        }

        $contactRequested = $request;
        if($this->contactService->storeContact($contactRequested)){
            return redirect()->route('contact.index')->with('flash_message', 'お問い合わせが完了しました。');
        }
        
        return redirect()->route('contact.index')->with('flash_message', 'お問い合わせできませんでした。');
    }
}
