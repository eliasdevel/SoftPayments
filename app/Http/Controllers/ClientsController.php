<?php

namespace App\Http\Controllers;

use App\Clients;
use App\Http\Requests\ClientRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class clientsController extends Controller {

    public function index(Clients $clients) {

        return view('clients.index')->with('clients', $clients->all())->with('rows', $clients->count());
    }

    public function create() {
        return view('clients.create');
    }

    public function store(ClientRequest $request) {

        //Save
        $input = $request->all();
        Clients::create($input);

        return redirect('clients');
    }

    public function edit($id) {
        //
    }

    public function destroy($id) {

        Clients::destroy($id);

        return redirect('clients');
    }

}
