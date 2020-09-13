<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class ShowPatientsController extends Controller
{
    public function show(Request $request) {
        $doctor_id = request('doctor_id');

        $users = DB::table('users')
            ->join('patients_list', 'users.id', '=', 'patients_list.patient_id')
            ->select('users.*', 'patients_list.doctor_id')
            ->where('patients_list.doctor_id', $doctor_id)
            ->get();

        return view('admin.doctors_corner.patients_list', [
            'patients_list' => $users
        ]);
    }
}
