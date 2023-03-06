<?php

declare(strict_types=1);

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Contact\ContactServiceInterface;
use App\Services\Department\DepartmentServiceInterface;
use Illuminate\Database\Eloquent\Collection;

class IndexController extends Controller
{
    private $ContactService;
    private $DepartmentService;

    public function __construct(ContactServiceInterface $ContactService, DepartmentServiceInterface $DepartmentService)
    {
        $this->ContactService = $ContactService;
        $this->DepartmentService = $DepartmentService;
    }

   /**
   * DBから取得したContactとDepartmentをコントローラーに渡します
   * @return Collection 取得したContactとDepartmentインスタンスの配列
   */
    public function __invoke(Request $request)
    {
        $contacts = $this->ContactService->getAllContact();
        $depatments = $this->DepartmentService->getAllDepartment();
        
        return view('contact.index')
            ->with('contacts', $contacts)
            ->with('departments', $depatments);
    }
}
