<?php

namespace Gotrecillo\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'privacy_policy' => 'accepted',
            'g-recaptcha-response' => 'required|captcha',
        ];
    }
}
