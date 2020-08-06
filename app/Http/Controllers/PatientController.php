<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientStoreRequest;
use App\Http\Requests\PatientUpdateRequest;
use App\Client;
use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $patients = Patient::all();

        return view('patient.index', compact('patients'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $client = null;
        
        if ($clientReference = $request->query('client')) {
            $client = Client::query()->where('reference', $clientReference)->first();
        }
        
        return view('patient.create', compact('client'));
    }

    /**
     * @param \App\Http\Requests\PatientStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientStoreRequest $request)
    {
        $patient = Patient::create($validated = $request->validated());

        $request->session()->flash('patient.id', $patient->id);

        if ($validated['action'] == 'save-and-edit') {
            return redirect()->route('patient.edit', $patient->id);
        }

        return redirect()->route('patient.show', $patient->id);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Patient $patient)
    {
        return view('patient.show', compact('patient'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Patient $patient)
    {
        return view('patient.edit', compact('patient'));
    }

    /**
     * @param \App\Http\Requests\PatientUpdateRequest $request
     * @param \App\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function update(PatientUpdateRequest $request, Patient $patient)
    {
        $validated = $request->validated();
        $patient->update($validated['patient']);

        $request->session()->flash('patient.id', $patient->id);

        if ($validated['action'] == 'save-and-edit') {
            return redirect()->route('patient.edit', $patient->id);
        }

        return redirect()->route('patient.show', $patient->id);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Patient $patient)
    {
        $patient->delete();

        return redirect()->route('patient.index');
    }
}
