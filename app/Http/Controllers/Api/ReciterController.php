<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Reciter;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ReciterController extends Controller
{
    public function index()
    {
        $data = Reciter::all();

        return response()->json([
            'message'   => 'All Reciters',
            'data'      => $data
        ], Response::HTTP_OK);
    }
}
