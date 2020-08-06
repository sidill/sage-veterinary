<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecordStoreRequest;
use App\Http\Requests\RecordUpdateRequest;
use App\Client;
use App\Patient;
use App\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $records = Record::all();

        return view('record.index', compact('records'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $patient = null;
        $client = null;

        if ($patientReference = $request->query('patient')) {
            $patient = Patient::query()->where('reference', $patientReference)->first();
        }

        if ($clientReference = $request->query('client')) {
            $client = Client::query()->where('reference', $clientReference)->first();
        }

        return view('record.create', compact('patient', 'client'));
    }

    /**
     * @param \App\Http\Requests\RecordStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(RecordStoreRequest $request)
    {
        $record = Record::create($validated = $request->validated());

        session()->flash('record.id', $record->id);

        if ($validated['action'] == 'save-and-edit') {
            return redirect()->route('record.edit', $record->id);
        }

        return redirect()->route('record.show', $record->id);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Record $record
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Record $record)
    {
        return view('record.show', compact('record'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Record $record
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Record $record)
    {
        return view('record.edit', compact('record'));
    }

    /**
     * @param \App\Http\Requests\RecordUpdateRequest $request
     * @param \App\Record $record
     * @return \Illuminate\Http\Response
     */
    public function update(RecordUpdateRequest $request, Record $record)
    {
        $record->update($validated = $request->validated());

        $request->session()->flash('record.id', $record->id);

        if ($validated['action'] == 'save-and-edit') {
            return redirect()->route('record.edit', $record->id);
        }

        return redirect()->route('record.show', $record->id);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Record $record
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Record $record)
    {
        $record->delete();

        return redirect()->route('record.index');
    }
}
