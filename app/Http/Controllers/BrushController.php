<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Brush;
use App\ToothBrush;
use App\User;
use Carbon\Carbon;
class BrushController extends Controller
{
    //
    public function index(Request $request) {
        $id = User::where('id', 12)->get(['tooth_brush_id','id','name'])->first();
     
        $brushes = "App\Brush"::where('tooth_brush_id', $id->tooth_brush_id)->orderBy('started_at','ASC')->get(['started_at', 'duration']);
        //return response()->json(['tooth_brush_id' => $id, 'brushes' => $brushes]);
        
        return view('welcome',['name' => $id->name,'tooth_brush_id' => $id->tooth_brush_id, 'brushes' => $brushes]);
    }

    public function took($tooth_brush_id) {

        $brush = new Brush;
        $brush->started_at = Carbon::now();
        $brush->tooth_brush_id = $tooth_brush_id;
        $brush->save();
    }

    public function put(Request $request) {
        $brush = Brush::where('tooth_brush_id',$request->brush_id)->latest()->first();
        $brush->ended_at = Carbon::now();
        $brush->save();

    }
}
