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
                                    <li><a href="/prescription/{{ $patient_id }}/{{ $doctor_id }}">Write Prescription</a></li>
                                @endcan
                            </ul>
                        </div>

                        {{-- card content --}}
                        <div class="col-md-10">
                            <form method="POST" action="/store_prescription/{{ $patient_id }}/{{ $doctor_id }}">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="note"><h3>Note</h3></label>
                                            <textarea class="form-control" name="note" rows="3"></textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="note"><h3>Next Session Time</h3></label>
                                            <input type="text" class="form-control" name="next_session_time"/>
                                        </div>
                                    </div>
                                </div>

                                <h3>Medicine Details</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th>Time</th>
                                            <th style="text-align: center">
                                                <div id="check" class="toggle"><a href="#" class="btn btn-info addRow text-white font-weight-bold">+</a></div>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td><input type="text" name="medicine_name[]" multiple class="form-control"></td>
                                            <td><input type="text" name="quantity[]" multiple class="form-control"></td>
                                            <td>
                                                <div class="row">
                                                    <div class="container">
                                                        <select class="form-control" name="time[]" data-live-search="true" multiple>
                                                            <option>Morning</option>
                                                            <option>Noon</option>
                                                            <option>Night</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="container">
                                                        <select class="form-control" name="when[]" data-live-search="true" multiple>
                                                            <option>After Meal</option>
                                                            <option>Before Meal</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="text-align: center"><a href="#" class="btn btn-danger removeRow text-white font-weight-bold">-</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                @include('admin.doctors_corner.reports_form')
                                <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('.addRow').on('click', function() {
        addRow();
    });

    $('tbody').on('click', '.removeRow', function() {
        $(this).parent().parent().remove();
    });

    function addRow() {
        var tr = '<tr>'+
                    '<td><input type="text" name="name[]" multiple class="form-control"></td>'+
                    '<td><input type="text" name="quantity[]" multiple class="form-control"></td>'+
                    '<td><div class="row"><div class="container"><select class="form-control"><option>Morning</option><option>Noon</option><option>Night</option></select></div></div><br><div class="row"><div class="container"><select class="form-control"><option>After Meal</option><option>Before Meal</option></select></div></div></td>'+
                    '<td style="text-align: center"><a href="#" class="btn btn-danger removeRow text-white font-weight-bold">-</a></td>'+
                '</tr>';
        $('tbody').append(tr);
    }
</script>


@endsection
