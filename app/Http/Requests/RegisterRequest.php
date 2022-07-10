<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'nickname' => 'required|min:1',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
            'admin' => 'required|boolean',
            'employee' => 'required|boolean'
        ];
    }
}
