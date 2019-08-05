<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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

    protected function getValidatorInstance()
    {
        $validator = parent::getValidatorInstance();

        $validator->sometimes('password', 'required|min:6|confirmed', function($input)
        {

            if(!empty($input->password) || ((empty($input->password) && $this->route()->getName() !== 'admin.user.update'))) {
                return TRUE;
            }

            return FALSE;
        });

        return $validator;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->route()->parameter('user');
//        dd($id);
        $id ?? '';

        return [
                'login'    => 'required|string|max:255|unique:users,login,'.$id,
                'name'     => 'required|string|max:255|',
                'password' => 'required|string|max:255|',
                'email'    => 'required|email|max:255|unique:users,email,'.$id,

        ];
    }
}
