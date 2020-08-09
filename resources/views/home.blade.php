@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">User Dashboard</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <h3>Our Doctors</h3> <br>
                            <ul>
                                @foreach ($infos as $doctorInfo)
                                    <li><a href="/doctors/{{ $doctorInfo->id }}">{{ $doctorInfo->first_name }} {{ $doctorInfo->last_name }}</a></li>
                                @endforeach
                            </ul>
                            <a href="/reports">See All Doctors</a>
                        </div>

                        <div class="col-md-8">
                            <h3>Your Prescriptions</h3> <br>
                            <ul>
                                @foreach (Auth::user()->getReports as $report)
                                <li>
                                    <a href="/report/{{$report['id']}}">{{ $report['title'] }}</a>
                                </li>
                                @endforeach
                            </ul>
                            <a href="/reports">See All Prescriptions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
