<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Consultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ConsultationController extends Controller
{
    //

    public function index(){
        $user = auth()->user();
        $consultatons = DB::table('consultations')->where('id', $user->id_card)->get()->first();
        return response()->json([
            'data' => $consultatons,
        ]);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'disease_history' => 'required',
            'current_symptoms' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                $validator->errors()
            ], 422);
        }
        $consultations = Consultation::create([
            'disease_history' => $request->disease_history,
            'current_symptoms' => $request->current_symptoms,
            'user_id' => $request->user_id,
            'name' => $request->name
        ]);

        if($consultations){
            return response()->json([
                'message' => 'Request successful send',
            ], 200);
        }
        return response()->json([
            'message' => 'Request invalid'
        ], 422);
    }
}
