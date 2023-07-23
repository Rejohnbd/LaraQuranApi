<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SuraInfoResource;
use App\SuraInfo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SuraInfoController extends Controller
{
    public function suraInfo(Request $request)
    {
        // dd($request->all());
        $data = SuraInfo::where('sura_list_id', $request->sura_id)->get()->groupBy('page_no');
        return response()->json([
            'message'   => 'Sura Details',
            'data'      => $data
        ], Response::HTTP_OK);
    }
}
