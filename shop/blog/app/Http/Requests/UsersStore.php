<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersStore extends FormRequest
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
            'power'=>'required',
            'Adname'=>'required|unique:adusers|regex:/^[a-zA-Z]{1}[\w]{7,15}$/',
            'password'=>'required|regex:/^[\w]{6,18}$/',
            'Phonenumber'=>'required|regex:/^1{1}[3-9]{1}[0-9]{9}$/',
            'head'=>'required',
            'sex'=>'required',
        ];
    }

    /**
     * 添加自定义错误信息
     */
    public function messages()
    {
        return[
            'power.required'=>'请选择管理级别',
            'Adname.required'=>'姓名必填',
            'Adname.regex'=>'用户名格式不正确',
            'Adname.unique'=>'用户名已存在',
            'password.required'=>'密码必填',
            'password.regex'=>'密码格式不正确',
            'Phonenumber.required'=>'电话必填',
            'Phonenumber.regex'=>'电话格式不正确',
            'head.required'=>'请上传头像',
            'sex.required'=>'性别必填',
        ];
    }
}
