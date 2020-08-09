<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class DoctorProfileController extends Controller
{
    public function index(Request $request) {
        $doctorInfo = DB::table('users')->where('id', $request->id)->first();
        dd($request);

        return view('admin.doctors_corner.profile', [
            'doctorInfo' => $doctorInfo
        ]);
    }
}
