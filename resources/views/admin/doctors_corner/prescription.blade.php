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
                        <div class="col-md-2">
                            <ul class="nav">
                                @can('write_prescription', User::class)
                                    <li><a href="/prescription">Write Prescription</a></li>
                                @endcan
                            </ul>
                        </div>

                        {{-- card content --}}
                        <div class="col-md-10">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="notes" class="col-md-4 col-form-label text-md-right">Notes</label>

                                    <div class="col-md-6">
                                        <textarea id="notes" type="text" class="form-control @error('notes') is-invalid @enderror" name="notes" value="{{ old('notes') }}" required autocomplete="notes" autofocus></textarea>

                                        @error('notes')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="medicine_details" class="col-md-4 col-form-label text-md-right">Medicine Details</label>

                                    <div class="col-md-6">
                                        <textarea id="medicine_details" type="text" class="form-control @error('medicine_details') is-invalid @enderror" name="medicine_details" value="{{ old('medicine_details') }}" required autocomplete="medicine_details" autofocus></textarea>

                                        @error('medicine_details')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="reports_name" class="col-md-4 col-form-label text-md-right">Reports Details</label>

                                    <div class="col-md-6">
                                        <textarea id="reports_name" type="text" class="form-control @error('reports_name') is-invalid @enderror" name="reports_name" value="{{ old('reports_name') }}" required autocomplete="reports_name" autofocus></textarea>

                                        @error('reports_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
