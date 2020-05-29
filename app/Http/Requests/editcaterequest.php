<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editcaterequest extends FormRequest
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
            'cate_name'=>'unique:category,cate_name,'.$this->segment(4).',id'
        ];
    }
    public function messages()
    {
        return [
            'cate_name.unique'=>'Tên đăng nhập bị trùng !'
        ];
    }
}
