<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        $valdidator = Validator::make($request->all(),[
            'id_card' => 'required',
            'password' => 'required',
        ]);

        if($valdidator->fails()){
            return response()->json($valdidator->errors(), 422);
        }

        $user = User::where('id_card', $request->id_card)->first();
        if(!$user || !Hash::check($request->password, $user->password)){
            return response()->json([
                'Message' => 'ID Card or Password incorrect',
            ]);
        }
        return response()->json([
            'data' => $user,
            'token' => $user->createToken('authToken')->accessToken,
        ], 200);
    }
}
