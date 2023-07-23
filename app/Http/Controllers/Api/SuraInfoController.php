<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SuraInfoResource;
use App\SuraInfo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SuraInfoController extends Controller
{
    public function getSuraInfo($id)
    {
        $data = SuraInfo::with('suraDetails')->where('id', $id)->first();
        return response()->json([
            'message'   => 'Sura Details',
            'data'      => $data
        ], Response::HTTP_OK);
    }
}
