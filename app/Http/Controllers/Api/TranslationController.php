<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Translation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TranslationController extends Controller
{
    public function index()
    {
        $data =  Translation::all();

        return response()->json([
            'message'   => 'All Translation',
            'data'      => $data
        ], Response::HTTP_OK);
    }
}
