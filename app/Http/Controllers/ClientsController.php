<?php namespace App\Http\Controllers;

use App\Clients;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

class clientsController extends Controller {

	public function index(Clients $clients){

        return view('clients.index')->with('clients', $clients->all())->with('rows', $clients->count());

    }

    public function create(){

        return view('clients.create');

    }

    public function store(){

        $clients = new Clients();

        $clients->name = Input::get('name');
        $clients->email = Input::get('email');
        $clients->company = Input::get('company');
        $clients->phone = Input::get('phone');
        $clients->cellphone = Input::get('cellphone');

        $clients->save();

    }

}
