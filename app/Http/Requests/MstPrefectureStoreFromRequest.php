<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MstPrefectureStoreFromRequest extends FormRequest
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
            'prefecture_cd'=>'required|char|max:2|regex:/^[0-9]+$/',
            'prefecture_name'=>'required|string|max:20|regex:/^[^\x01-\x7E\x{FF61}-\x{FF9F}]+$/u]'
        ];
    }

    public function messages(){
       return [
        'prefecture_cd.required'=>'地域コードは必須です。',
        'prefecture_cd.max'=>'地域コードの最大値は2文字です',
        'prefecture_cd.regex'=>'地域コードが不正です',
        'prefecture_name.required'=>'地域名が不正です'
       ];

    }
}
