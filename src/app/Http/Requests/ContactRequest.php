<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'last_name' => 'required|string',
            'first_name' => 'required|string',
            'gender' => 'required',
            'email' => 'required|email|max:255',
            'tel-no_1' => 'required|string|max:5',
            'tel-no_2' => 'required|string|max:5',
            'tel-no_3' => 'required|string|max:5',
            'address' => 'required|string',
            'category_id' => 'required',
            'detail' => 'required|max:120'
        ];
    }

    public function messages()
    {
        return [
            'last_name.required' => '姓を入力してください',
            'first_name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'tel-no_1.required' => '電話番号を入力してください',
            'tel-no_2.required' => '電話番号を入力してください',
            'tel-no_3.required' => '電話番号を入力してください',
            'tel-no_1.max' => '電話番号は5桁までの数字で入力してください',
            'tel-no_2.max' => '電話番号は5桁までの数字で入力してください',
            'tel-no_3.max' => '電話番号は5桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'category_id.required' => 'お問合せの種類を選択してください',
            'detail.required' => 'お問合せ内容を入力してください'
        ];
    }
}
