<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartPostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'product_id' => ['required'],
            'qty' => ['required'],
            'price' => ['required'],
            'sub_total' => ['required'],
        ];
    }
}
