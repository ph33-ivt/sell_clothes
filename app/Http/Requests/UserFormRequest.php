<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
            'email'      => 'required',
            'password'   => 'required|min:6',
            'first_name' => 'required',
            'last_name'  => 'required',
            'birthday'   => 'required|date',
            'sex'        => 'required',
            'role_id'    => 'required',

        ];
    }
    public function messages()
    {
        return [
            'email.required'      => 'Vui lòng nhập Email',
            'password.required'   => 'Vui lòng nhập mật khẩu',
            'password.min'        => 'Mật khẩu phải có ít nhất 6 ký tự',
            'first_name.required' => 'Vui lòng nhập họ',
            'last_name.required'  => 'Vui lòng nhập tên',
            'birthday.required'   => 'Vui lòng ngày sinh',
            'birthday.date'       => 'Bạn nhập không phải ngày',
            'sex.required'        => 'Vui lòng chọn giới tính',
            'role_id.required'    => 'Vui lòng Nhập liệu',
        ];
    }
}
