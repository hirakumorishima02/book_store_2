<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserInfoRequest extends FormRequest
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
            'name' => 'required',
            'address' => 'required',
            'zip_code' => 'required',
            'tel' => 'required',
            'email' => 'required|email',
        ];
    }
    
    public function messages() 
    {
        return [
            'name.required' => '名前は必ず登録してください。',
            'address.required' => '住所は必ず登録してください。',
            'zip_code.required' => '郵便番号は必ず登録してください。',
            'tel.required' => '電話番号は必ず登録してください。',
            'emaol.required' => 'メールアドレスは必ず登録してください。',
            'email.email' => 'メールの形式で登録してください。',
        ];
    }
}
