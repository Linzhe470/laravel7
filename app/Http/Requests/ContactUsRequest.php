<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use PharIo\Manifest\Url;

class ContactUsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // 開啟功能
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->redirect = url()->previous().'#g-recaptcha';
        return [
            //
            'g-recaptcha-response' => 'recaptcha',
        ];
    }
}
