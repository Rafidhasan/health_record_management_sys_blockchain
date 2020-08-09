<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

class ShowPatientsController extends Controller
{
    public function index(Request $request) {
        dd(Session::get('user_id'));
    }
}
