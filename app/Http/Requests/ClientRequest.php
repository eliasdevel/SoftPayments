<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;
use App\Providers\RouteServiceProvider;

class ClientRequest extends Request
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
        if (Request::route()->parameter('id')) {
            $unique = 'unique:clients,email,'.Request::route()->parameter('id');
        } else {
            $unique = 'unique:clients';
        }

        return [
            'email'     => 'required|email|'.$unique.'|max:255',
            'name'      => 'required|max:255',
            'company'   => 'required|max:255',
            'phone'     => 'required|max:255',
            'cellphone' => 'required|max:255',
        ];
    }
}