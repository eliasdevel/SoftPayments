<?php

namespace App\Http\Controllers;

use App\Clients;
use App\Http\Requests\ClientRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class clientsController extends Controller {

    public function index() {

        return view('clients.index')->with('clients', Clients::all())->with('rows', Clients::count());
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
        $client = Clients::find($id);

        return view('clients.edit', compact('client'));
    }

    public function update($id) {
        //
    }

    public function destroy($id) {

        Clients::destroy($id);

        return redirect('clients');
    }

}
