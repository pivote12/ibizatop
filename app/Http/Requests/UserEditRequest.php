<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class UserEditRequest extends Request
{

    private $route;

    public function __construct(Route $route)
    {
        $this->route = $route;
    }

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
            'name'     => 'required',
            'email'    => 'required|email|unique:users,email,' . $this->route->getParameter('configure_profile'),
            'password' => 'min:8',
            'password_confirmation' => 'same:password',
            'photo' => 'mimes:jpeg,png'
        ];
    }
}
