<?php

namespace App\Http\Controllers\Api;

use App\ArabicFont;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ArabicFontController extends Controller
{
    public function index()
    {
        $data = ArabicFont::all();
        return response()->json([
            'message'   => 'Arabic Fonts',
            'data'      => $data
        ], Response::HTTP_OK);
    }
}
