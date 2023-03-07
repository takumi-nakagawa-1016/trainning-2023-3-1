<?php

declare(strict_types=1);

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required','max:255'],
            'email' => ['required','max:255','email:rfc,dns'],
            'content' => ['required','max:1000'],
            'age' => ['required','numeric','between:1,100'],
            'gender' => ['required','numeric','between:1,3'],
            'department_id' => ['required'],
        ];
    }
    
    public function getName(): string
    {
        return $this->input('name');
    }

    public function getEmail(): string
    {
        return $this->input('email');
    }
　　// contentだとエラーが起きるのでcontantにしています
    public function getContant(): string
    {
        return $this->input('content');
    }

    public function getAge(): int
    {
        return (int) $this->input('age');
    }

    public function getGender(): int
    {
        return (int) $this->input('gender');
    }

    public function getDepartmentId(): int
    {
        return (int) $this->input('department_id');
    }
}
