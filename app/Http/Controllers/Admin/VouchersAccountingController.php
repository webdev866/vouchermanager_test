<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class VouchersAccountingController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('vouchers_accounting_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $from = date('Y-m-d');
        $to = date('Y-m-d');
	
	//$from = date('2022-07-31');
	//$to = date('2022-09-31');
        $Reports = DB::table('create_vouchers')
            ->select('create_vouchers.id', 'client_name', 'night', 'hotels.hotel_name', 'arrivaldate', 'departuredate', 'total_amount', 'number_of_room', 'payment_mode')
            ->join('hotels', 'hotels.id', 'create_vouchers.hotel_name_id')
            ->whereBetween('arrivaldate', [$from, $to])->get();


      //return view('admin.vouchersAccountings.index', compact(['Reports']));
return view('admin.vouchersAccountings.index', compact('Reports', 'from', 'to'));
    }
}
