@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Doctors Profile</div>
                <div class="card-body">
                    <div class="row mx-5">
                        <div class="col-md-4">
                            <img src="https://i.pravatar.cc/150?img=54" class="rounded-circle mb-4" alt="">

                            <h3>{{ $doctorInfo-> first_name ." " . $doctorInfo-> last_name}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
