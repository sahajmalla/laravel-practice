<?php

namespace App\Http\Controllers;

use App\Http\Resources\User\UserResource;
class BaseController extends Controller
{

    public function sendSuccess($result, $message='Success'){
        $response=  [
            'data'=>$result,
            'message'=>$message
        ];
        return response()->json($response);
    }

}
