@extends('layouts.admin')
@section('content')
<link href="{{ asset('css/arrivaldeparture.css') }}" rel="stylesheet" />
<div class="content">

    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('cruds.vouchersAccounting.title') }}

                </div>

                <div class="panel-body">



                    <div class="card">
                        <div class="card-header">
                            <h4 class="Green">Reports</h4>

                            <div class="form-group">
                                From
                                <div class='input-group date' id='CalendarDateTime'>
                                    <input id="date-from" type='text' class="form-control" />
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                </div>
                            </div>

                            <div class="form-group">
                                To
                                <div class='input-group date' id='CalendarDateTime'>
                                    <input id="date-to" type='text' class="form-control" />
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary">Search</button>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Voucher #</th>
                                            <th>Client</th>
                                            <th>Hotel</th>
                                            <th>Arrival</th>
                                            <th>Departure</th>
                                            <th>Nights</th>
                                            <th>Rooms</th>
                                            <th>Payment Mode</th>
                                            <th>Paid Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Reports as $Report)
                                        <tr>
                                            <th> {{$Report->id}} </th>
                                            <th> {{$Report->client_name}} </th>
                                            <th> {{$Report->hotel_name}} </th>
                                            <th> {{$Report->arrivaldate}} </th>
                                            <th> {{$Report->departuredate}} </th>
                                            <th> {{$Report->night}} </th>
                                            <th> {{$Report->number_of_room}}</th>
                                            <th> {{$Report->payment_mode}}</th>
                                            <th> {{$Report->total_amount}}</th>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

@endsection
