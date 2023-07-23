<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\SuraList;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SuraListController extends Controller
{
    public function index()
    {
        $data =  SuraList::where('id', 1)->first();

        return response()->json([
            'message'   => 'Sura List',
            'data'      => json_decode($data->sura_list)
        ], Response::HTTP_OK);
    }
}
