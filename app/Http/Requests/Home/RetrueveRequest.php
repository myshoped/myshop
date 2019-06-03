<?php

namespace App\Http\Requests\Home;

use Illuminate\Foundation\Http\FormRequest;

class RetrueveRequest extends FormRequest
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
            'upwd' => 'required|regex:/^\w{6,18}$/',
            'repassword' => 'same:upwd',
        ];
    }
    // 自定义错误信息
    public function messages()
    {
        return [
            'upwd.regex'=>'密码格式不正确',
            'upwd.required'=>'密码必填',
            'repassword.same'=>'俩次密码不一致',
        ];
    }
}
