<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class AppController extends Controller
{
    public function __construct() {
        Auth::check();
    }

    public function seats(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'start' => 'required',
            'end' => 'required'
        ]);
       if($validator->passes())
       {
        $starts = Reservation::where('start',$request->start)->where('available',0)->pluck('seat_id')->toArray();
        $ends = Reservation::where('end',$request->end)->where('available',0)->pluck('seat_id')->toArray();

        $result= array_intersect($starts, $ends);
        return response()->json([
        'available_seats'=>$result,
        'status_code' => 200,
        ]);

      }else{
        $msg= $validator->messages()->first();
        return response(['status'=>204,'message'=>$msg]);

          }
    }

    public function book(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'start' => 'required',
            'end' => 'required',
            'seat_id' => 'required'

        ]);
       if($validator->passes())
       {
        $start = Reservation::where('start',$request->start)->where('seat_id',$request->seat_id)->first();

        if ($start->end == $request->end) {
            # code...
        }
        $ends = Reservation::where('end',$request->end)->pluck('seat_id')->toArray();

        $result= array_intersect($starts, $ends);
        return response()->json([
        'available_seats'=>$result,
        'status_code' => 200,
        ]);

      }else{
        $msg= $validator->messages()->first();
        return response(['status'=>204,'message'=>$msg]);

          }
    }
}
