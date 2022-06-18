<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEnrolmentRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'adress' => 'required',
            'suburb' => 'required',
            'post_code' => 'required',
            'date_of_birth' => 'required',
            'language_home' => 'required',
            'gender' => 'required',
            'delivered' => 'required',
            'subjet' => 'required',
            'package' => 'required',
            // 'package1' => 'required',
            'parent_iam' => 'required',
            'school' => 'required',
            'grade' => 'required',
            'emergency_name' => 'required',
            'emergency_relation' => 'required',
            'emergency_mobile' => 'required',
            'emergency_phone' => 'required',
            'about' => 'required',
            'payment' => 'required',
            'terms' => 'required',
            // 'teacher_name' => 'required',
        ];
    }
}
