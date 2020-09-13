<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class AppoinmentController extends Controller
{
    public function create(Request $request) {
        $user_id = request('user_id');
        $doctors_id = request('doctors_id');

        $serial = ($user_id + 1);

        $msg = 'Your serial is '.$serial;

        DB::table('patients_list')->insert(
            [
                'serial' => $serial,
                'patient_id' => $user_id,
                'doctor_id' => $doctors_id
            ]
        );

        return redirect('/')->with('msg', $msg);
    }

    public function delete(Request $request) {
        DB::table('patients_list')->where('patient_id', '=', $request->id)->delete();

        return redirect('/admin');
    }
}
