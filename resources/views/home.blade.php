@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Recent Reports</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
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
@endsection
