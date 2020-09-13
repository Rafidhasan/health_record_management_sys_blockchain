@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(session()->has('msg'))
                <div class="alert alert-success">
                    {{ session()->get('msg') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">User Dashboard</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <h3>Our Doctors</h3> <br>
                            <ul>
                                @foreach ($infos as $doctorInfo)
                                <div class="row">
                                    <div class="col-md-2 mb-3">
                                        <img src="https://i.pravatar.cc/25" class="rounded-circle" alt="">
                                    </div>
                                    <div class="col-md-5">
                                        <li style="list-style: none"><a href="/doctors/{{ $doctorInfo->id }}">{{ $doctorInfo->first_name }} {{ $doctorInfo->last_name }}</a></li>
                                    </div>
                                    <div class="col-md-5">
                                        <a href="/appoinment/{{ Auth::user()->id }}/{{ $doctorInfo->id }}" class="btn btn-primary text-white btn-sm" type="button" value="appoinment" >Get Appoinment</a>
                                    </div>
                                </div>
                                @endforeach
                            </ul>
                            <a href="/reports">See All Doctors</a>
                        </div>

                        <div class="col-md-7">
                            <h3>Your Prescriptions</h3> <br>
                            @foreach ($prescriptions as $prescription)
                                <a href="/showPrescription/{{$prescription->id}}">Prescription created at - {{ $prescription->created_at }}</a> <br>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
