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
                            <ul>
                                @foreach ($users as $user)
                                    @if ($user->getRoles() === ["admin"])
                                        <li> {{$user->first_name}}</li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>

                        <div class="col-md-8">
                            <ul>
                                @foreach (Auth::user()->getReports as $report)
                                <li>
                                    <a href="/report/{{$report->id}}">{{ $report -> title }} - created at: {{ $report -> created_at}}</a>
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
