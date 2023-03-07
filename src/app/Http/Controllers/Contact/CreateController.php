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
     * RequestをContacttサービスに渡します
     * @param string $name 名前
     * @param string $email メールアドレス
     * @param string $content  お問い合わせ内容
     * @param int $age 年齢
     * @param int $gender 性別
     * @param int[] $departmentId 
     * @return Contact 渡すContact
     */
    public function __invoke(CreateRequest $request)
    {
        $name = $request->getName();
        $email = $request->getEmail();
        $content = $request->getContant();
        $age = $request->getAge();
        $gender = $request->getGender();
        $departmentId = $request->getDepartmentId();

        $this->ContactService->createContact($name, $email, $content, $age, $gender, $departmentId);
        return redirect()->route('contact.index');
    }
}
