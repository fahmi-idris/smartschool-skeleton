<?php
namespace App\Http\Requests\User;
use Auth;
use App\Http\Requests\Request;

class Validator extends Request {
    public function authorize() {
      return true;
    }

    public function rules() {
        if ($this->has('_method')) {
            $rules = [
              'name' => 'required',
              'email' => 'required|unique:users,email,'.$this->get('id')
            ];
            return $rules;
        }
        return [
            'name' => 'required',
            'email' => 'required|unique:users,email',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.unique' => 'Email is unique, use another email'
        ];
    }
}
