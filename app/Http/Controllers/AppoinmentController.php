<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppoinmentController extends Controller
{
    public function index(Request $request) {
        $serial = 'Your serial is '.rand(1, 100);
        return redirect('/')->with('msg', $serial);

        return redirect('/patients_list')->with([
            'user_id' => $request->user_id,
            'doctor_id' => $request->doctors_id
        ]);
    }
}
