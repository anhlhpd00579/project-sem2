<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCollectionRequest extends FormRequest
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
            'name' => 'required|max:50|min:10|unique:collections',
            'description' => 'required',
            'thumbnail' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên bộ sưu tập.',
            'name.min' => 'Tên quá ngắn, vui lòng nhập ít nhất 10 ký tự.',
            'name.max' => 'Tên quá dài, vui lòng nhập nhiều nhất 50 ký tự.',
            'name.unique' => 'Tên đã được sử dụng, vui lòng chọn tên khác.',
            'description.required' => 'Vui lòng nhập mô tả cho danh mục',
            'thumbnail.required' => 'Vui lòng nhập ảnh đại diện cho danh mục'
        ];
    }
}
