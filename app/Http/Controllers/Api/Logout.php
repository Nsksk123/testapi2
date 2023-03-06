<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Logout extends Controller
{
    /**
     * Handle the incoming request.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //

        $remove_token = $request->user()->tokens()->delete();

        if($remove_token){
            return response()->json([
                'message' => 'You successfuly logout'
            ]);
        }
    }
}
