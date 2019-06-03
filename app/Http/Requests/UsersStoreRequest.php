<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersStoreRequest extends FormRequest
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
     * 存放验证规则
     *
     * @return array
     */
    public function rules()
    {
        return [
            'uname' => 'required|unique:users|regex:/^\w+$/',
            'upwd' => 'required|regex:/^\w{6,18}$/',
            'repassword' => 'required|same:upwd',
            'email' => 'required|email',
            'phone' => 'required|regex:/^1[34578]\d{9}$/',
        ];
    }
    // 自定义错误信息
    public function messages()
    {
        return [
            'uname.required'=>'账号必填',
            'uname.unique'=>'账号已存在',
            'uname.regex'=>'账号格式不正确',
            'upwd.regex'=>'密码格式不正确',
            'upwd.required'=>'密码必填',
            'repassword.required'=>'确认密码必填',
            'repassword.same'=>'俩次密码不一致',
            'email.required'=>'邮箱必填',
            'email.email'=>'邮箱格式不正确',
            'phone.required'=>'手机号必填',
            'phone.regex'=>'手机号格式不正确',
        ];
    }
}
