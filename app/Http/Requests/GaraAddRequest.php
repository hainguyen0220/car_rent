<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GaraAddRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:garas|max:255',
            'address' => 'required',
            'phone' => 'required',
            'describe' => 'required',
            'image' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Bạn chưa nhập tiêu đề',
            'address.required' => 'Bạn chưa thêm ảnh',
            'cophonentent.required' => 'Bạn chưa thêm nội dung',
            'describe.required' => 'Bạn chưa thêm nội dung',
            'image.required' => 'Bạn chưa thêm nội dung',
        ];
    }
}
