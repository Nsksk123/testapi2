<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Spot;
use App\Models\SpotDetail;
use App\Models\Vaccines;
use Illuminate\Http\Request;

class SpotController extends Controller
{
    //
    public function index(){
        $user = auth()->user();
        $region = $user->region;
        $spotId = Spot::where('region', $region)->pluck('id');

        $spots = Spot::select('*')->where('region', $region)->get();
        $vaccine = Vaccines::select('*')->where('spot_id', $spotId)->get();

        return response()->json([
            'data' => $spots,
            'vaccine' => $vaccine
        ]);
    }

    public function show($id, Request $request){
        $date = $request->input('date');
        $spots = SpotDetail::whereSpotId($id)->where('date', $date)->get();
        if($spots){
            return response()->json([
                'data' => $spots,
            ]);
        }
    }
}
