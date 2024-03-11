<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhongRequest extends FormRequest
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

    public function rules()
    {
        return [
            'ten_phong'          => 'required',

            'hang_doc'          => 'required',
            'hang_ngang'          => 'required',

            'tinh_trang'        => 'required|numeric|max:2|min:0',
        ];
    }

    public function messages()
    {
        return [
            'ten_phong.*'                => 'Tên phòng không được để trống',

            'hang_doc.*'                => 'Ghế hàng dọc không được để trống',
            'hang_ngang.*'                => 'Ghế ngang dọc không được để trống',

            'tinh_trang.*'              => 'Tình trạng phải chọn theo yêu cầu',
        ];
    }
}
