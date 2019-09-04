<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Brush;
use Carbon\Carbon;
class BrushController extends Controller
{
    //
    public function index(Request $request) {
        $id = Auth::id();
        $brushes = App\Brush::where('brush_id', $id)->get();
        return response()->json($brushes);
    }

    public function took(Request $request) {
        $brush = new Brush;
        $brush->started_at = Carbon::now();
        $brush->brush_id = $request->brush_id;
    }

    public function put(Request $request) {
        $brush = Brush::where('brush_id',$request->brush_id)->latest()->first();
        $brush->ended_at = Carbon::now();
    }
}
