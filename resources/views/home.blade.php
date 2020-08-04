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
                            <h3>Our Doctors</h3>
                            <ul>
                                @foreach ($roles as $role)
                                    <li><a href="/doctors">{{ $role->users->pluck('username') }}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="col-md-8">
                            <ul>
                                @foreach (Auth::user()->getReports as $report)
                                <li>
                                    <a href="/report/{{$report['id']}}">{{ $report['title'] }}</a>
                                </li>
                                @endforeach
                            </ul>
                            <a href="/reports">See All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
