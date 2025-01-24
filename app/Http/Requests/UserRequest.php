<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;    // its must true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|alpha_num|min:6',
            'age' => 'required|numeric|between:18,40',
            'city' => 'required',
        ];
    }

    public function message(){
        return [
            'name.required' => "The Name is must fill!",
            'email.required' => "The Email Address is must fill!",
            'email.email' => "Enter the valid email address.",
            'password.required' => "The Password is must fill!",
            'password.alpha_num' => "Password only Aplabet and Number.",
            'password.min:6' => "Password should not less than 6 charecter.",
            'age.required' => "User Age is must fill!",
            'age.numeric' => "User Age must be numeric!",
            'age.between:18,40' => "User ar age 18 theke 40 ar modde hote hobe.",
            'city.required' => "User Address is must fill!",
        ];
    }

    protected function prepareForValidation(): void{
        $this->merge([
            // 'name' => strtoupper($this->name),
            'name' => Str::slug($this->name),
        ]);
    }

    protected $stopOnFirstFailure = true; // atir kaj holo 1st input a error paile kaj okhane sop kore dibe
}
