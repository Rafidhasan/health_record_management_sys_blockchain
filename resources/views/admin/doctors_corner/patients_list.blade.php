@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Admin Panel</div>

                <div class="card-body">
                    <div class="row">
                        {{-- sidebar --}}
                        <div class="col-md-4">
                            <ul class="nav">
                                @can('write_prescription', User::class)
                                    <li><a href="/patients_list/{{Auth::id()}}">See Patients</a></li>
                                @endcan
                            </ul>
                        </div>

                        <div class="col-md-8">
                            <ul class="">
                                @foreach ($patients_list as $patient)
                                    <li>
                                        <a href="prescription/{{ $patient->id }}/{{Auth::id()}}">{{ $patient->first_name. ' '. $patient->last_name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
