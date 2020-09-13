@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            Prescription - {{$prescription->created_at}}
                        </div>
                        <div class="col-md-6">
                            Your next consulation time - {{$prescription->next_session_time}}
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            Patient Name: {{ Auth::user()->first_name . " ". Auth::user()->last_name}}
                        </div>
                        <div class="col-md-4">
                            Age: {{ Auth::user()->age }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Address: {{ Auth::user()->address }}
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-12">
                            {{ $prescription->note }}
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Medicine List</h5>
                            <div class="col-md-4">
                                {{ $prescription->medicine_name }}
                            </div>
                            <div class="col-md-4">
                                {{ $prescription->quantity }}
                            </div>
                            <div class="col-md-4">
                                {{ $prescription->time }}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5>Report List</h5>
                            {{ $prescription->report_name }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
