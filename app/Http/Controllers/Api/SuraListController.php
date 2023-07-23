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
        $data =  SuraList::all();

        return response()->json([
            'message'   => 'Sura List',
            'data'      => $data
        ], Response::HTTP_OK);
    }
}
