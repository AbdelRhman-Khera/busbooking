<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Seat;
use App\Models\Ticket;
use App\Models\Trip;
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

        ///first check if start line and end line are available
        $starts = Reservation::where('start',$request->start)->where('available',0)->pluck('seat_id')->toArray();
        $ends = Reservation::where('end',$request->end)->where('available',0)->pluck('seat_id')->toArray();

        $result= array_intersect($starts, $ends);
        $trip = Trip::where('start',$request->start)->where('end',$request->end)->first();

        ////then check if cross over lines are available
        for ($i=0; $i <count($result) ; $i++) {
            foreach ($trip->lines as $key => $line) {
                $reserve = Reservation::where('seat_id',$result[$i])->where('line_id',$line->id)->first();
                if ($reserve->available == 1) {

                    \array_splice($result, $i, 1);
                }
            }
        }


        return response()->json([
            'status_code' => 200,
            'available_seats'=>$result,
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
        $seat = Seat::find($request->seat_id);
        $ticket = new Ticket();
        $ticket->user_id = Auth::user()->id;
        $ticket->seat_id = $seat->id;
        $ticket->bus_id = $seat->bus_id;
        $ticket->schedule_id = $seat->schedule_id;
        $ticket->save();

        $trip = Trip::where('start',$request->start)->where('end',$request->end)->first();

        foreach ($trip->lines as $key => $line) {
            $reserve = Reservation::where('seat_id',$seat->id)->where('line_id',$line->id)->first();
            $reserve->available = 1;
            $reserve->ticket_id = $ticket->id;
            $reserve->save();
        }


        return response()->json([
            'status_code' => 200,
            'Ticket ID'=>$ticket->id,
            'Seat ID'=>$seat->id,
            'Seat Number'=>$seat->number,
            'Bus Number'=>$seat->bus->number,
            'Trip name'=>$seat->schedule->name,
        ]);

      }else{
        $msg= $validator->messages()->first();
        return response(['status'=>204,'message'=>$msg]);

          }
    }
}
