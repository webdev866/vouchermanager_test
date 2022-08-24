<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

class ArrivalsDeparturesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('arrivals_departure_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

          $Arrivals = DB::table('create_vouchers')->whereNull('create_vouchers.deleted_at')
            ->select('create_vouchers.id', 'client_name', 'night', 'hotels.hotel_name', 'arrivaldate')
            ->join('hotels', 'hotels.id', 'create_vouchers.hotel_name_id')
            ->whereDate('arrivaldate', now())
            ->get();
        $Departures =  DB::table('create_vouchers')->whereNull('create_vouchers.deleted_at')
            ->select('create_vouchers.id', 'client_name', 'night', 'hotels.hotel_name', 'departuredate')
            ->join('hotels', 'hotels.id', 'create_vouchers.hotel_name_id')
            ->whereDate('departuredate', now())
            ->get();
        return view('admin.arrivalsDepartures.index', compact('Arrivals', 'Departures'));
    }
}
