<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prescription;

class PrescriptionController extends Controller
{

    public function insert(Request $request) {
        $medicine_names = $request->medicine_name;
        $quantities = $request->quantity;
        $times = $request->time;
        $whens = $request->when;
        $reports_name = $request->report_name;

        $prescription_infos = array_map(null, $medicine_names, $quantities, $times, $whens, $reports_name);

        foreach($prescription_infos as $info => $key) {
             $prescription = new Prescription();
             $prescription->user_id = $request->patient_id;
             $prescription->note = $request->note;
             $prescription->next_session_time = $request->next_session_time;
             $prescription->medicine_name = $key[0];
             $prescription->quantity = $key[1];
             $prescription->time = $key[2];
             $prescription->when = $key[3];
             $prescription->report_name = $key[4];

             $prescription->save();
        }

        $id = $request->patient_id;
        return redirect()->route('deletePatient', [$id]);
    }

    public function index(Request $request) {
        $doctor_id = $request->doctor_id;
        $patient_id = $request->patient_id;

        return view('admin.doctors_corner.prescription', [
            'doctor_id' => $doctor_id,
            'patient_id' => $patient_id,
        ]);
    }

    public function show(Request $request) {
        $prescription = Prescription::where('id','=',$request->id)->first();
        return view('prescription', [
            'prescription' => $prescription
        ]);
    }
}
