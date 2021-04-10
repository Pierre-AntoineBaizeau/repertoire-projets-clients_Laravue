<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {

        $clients = Client::all();
        return Inertia::render('Clients/Index', [
            'clients' => $clients
        ]);
    }

    public function create()
    {
        $clients = Client::all();

        return Inertia::render('Clients/Create', [
            'clients' => $clients 
        ]);
    }

    public function store(Request $request) {
        $clients = Client::all();

        Client::create($request->all());
    }

    public function edit($id) {
        $client = Client::findOrFail($id);

        return Inertia::render('Clients/Edit', [
            'client' => $client
        ]);
    }

    public function update($id, Request $request) {
        $client = Client::findOrFail($id);

        $client->update($request->all());

        return redirect()->route('clients.index');
    }
}
