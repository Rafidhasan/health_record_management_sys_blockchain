<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrescriptionController extends Controller
{

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'notes' => ['required', 'string',],
            'medicine_details' => ['required', 'string',],
            'reports_details' => ['required', 'string',],
        ]);
    }

    protected function create(array $data)
    {
        return Prescription::create([
            'notes' => $data['notes'],
            'medicine_details' => $data['medicine_details'],
            'reports_details' => $data['reports_details'],
        ]);
    }

    public function index() {
        return view('admin.doctors_corner.prescription');
    }
}
