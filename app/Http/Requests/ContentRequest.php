<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentRequest extends FormRequest
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
            'lastname' => 'required',
            'firstname' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'postcode' => 'required',
            'address' => 'required',
            'opinion' => 'required|max:120'
        ];
    }

    public function messages()
    {
        return [
            'lastname.required' => 'フルネームを入力してください',
            'firstname.required' => '名前を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスの形式で入力してください',
            'postcode.required' => '郵便番号を入力してください',
            'address.required' => '住所を入力してください',
            'opinion.required' => 'ご意見を入力してください',
            'opinion.max:120' => '120文字以内で入力してください'
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
        'postcode' => mb_convert_kana($this->postcode, 'n'),
        ]);
    }
    }
