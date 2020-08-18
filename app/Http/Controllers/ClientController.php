<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests\ClientStoreRequest;
use App\Http\Requests\ClientUpdateRequest;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clients = Client::query()->paginate(null, ['*'], 'clients_per_page');

        return view('client.index', compact('clients'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('client.create');
    }

    /**
     * @param \App\Http\Requests\ClientStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientStoreRequest $request)
    {
        $client = Client::create($validated = $request->validated());

        $request->session()->flash('client.id', $client->id);

        if ($validated['action'] == 'save-and-edit') {
            return redirect()->route('client.edit', $client->id);
        }

        return redirect()->route('client.show', $client->id);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Client $client
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Client $client)
    {
        $patients = $client->patients()->paginate(null, ['*'], 'patients_per_page');
        $records = $client->records()->paginate(null, ['*'], 'records_per_page');

        $patients->appends(['records_per_page' => $records->currentPage()]);
        $records->appends(['patients_per_page' => $patients->currentPage()]);

        return view('client.show', compact('client', 'patients', 'records'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Client $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Client $client)
    {
        return view('client.edit', compact('client'));
    }

    /**
     * @param \App\Http\Requests\ClientUpdateRequest $request
     * @param \App\Client $client
     * @return \Illuminate\Http\Response
     */
    public function update(ClientUpdateRequest $request, Client $client)
    {
        $validated = $request->validated();
        $client->update($validated['client']);

        $request->session()->flash('client.id', $client->id);

        if ($validated['action'] == 'save-and-edit') {
            return redirect()->route('client.edit', $client->id);
        }

        return redirect()->route('client.show', $client->id);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Client $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Client $client)
    {
        $client->delete();

        return redirect()->route('client.index');
    }
}
