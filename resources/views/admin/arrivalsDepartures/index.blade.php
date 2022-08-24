@extends('layouts.admin')
@section('content')
<link href="{{ asset('css/arrivaldeparture.css') }}" rel="stylesheet" />
<div class="content">

    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('cruds.arrivalsDeparture.title') }}
                </div>
                <div class="panel-body">
		<div class="CurrentDate">
		@php
		$CurrentDate = Date('d-m-Y');
		echo "Today is: " . $CurrentDate;
		@endphp
		</div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="Green">Today's Arrivals</h4>

                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Voucher #</th>
                                            <th>Client</th>
                                            <th>Hotel</th>
                                            <th>Nights</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Arrivals as $Arrival)
                                        <tr>
                                             <th>
                                                <a href="create-vouchers/{{$Arrival->id}}" target="_blank">{{$Arrival->id}}</a>
                                            </th>
                                            <th> {{$Arrival->client_name}} </th>
                                            <th> {{$Arrival->hotel_name}} </th>
                                            <th> {{$Arrival->night}} </th>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header">
                            <h4 class="Red">Today's Departures</h4>

                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Voucher #</th>
                                            <th>Client</th>
                                            <th>Hotel</th>
                                            <th>Nights</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Departures as $Departure)
                                        <tr>
                                             <th>
                                                <a href="create-vouchers/{{$Departure->id}}" target="_blank">{{$Departure->id}}</a>
                                            </th>
                                            <th> {{$Departure->client_name}} </th>
                                            <th> {{$Departure->hotel_name}} </th>
                                            <th> {{$Departure->night}} </th>
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
