<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SuraInfoResource;
use App\SuraAyahRecite;
use App\SuraInfo;
use App\SuraList;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class SuraInfoController extends Controller
{
    public function suraInfo(Request $request)
    {
        $suraId = $request->sura_id;
        $reciterId = 3;

        $suraInfo =  DB::table('sura_lists')
            ->join('complete_sura_recites', 'sura_lists.id', '=', 'complete_sura_recites.sura_list_id')
            ->where('sura_lists.id', $suraId)
            ->where('complete_sura_recites.reciter_id', $reciterId)
            ->select('sura_lists.id', 'sura_lists.arabic_name', 'sura_lists.english_name', 'sura_lists.english_ayahs_count', 'sura_lists.bangla_name', 'sura_lists.bangla_ayahs_count', 'complete_sura_recites.audio')
            ->get();

        $ayahsInfo = SuraInfo::where('sura_list_id', $suraId)->get()->groupBy('page_no');

        $ayahsArr = array();

        foreach ($ayahsInfo as $key => $value) {
            foreach ($value as $k => $val) {
                $ayahReciter = SuraAyahRecite::select('audio')->where('sura_list_id', $val->sura_list_id)->where('reciter_id', $reciterId)->where('ayah_id', $val->ayah_no)->first();
                $value[$k]['audio'] = $ayahReciter->audio;
            }
            array_push($ayahsArr, array('page' => 'page-' . $key, 'ayahs' => $value));
        }
        return response()->json([
            'message'   => 'Sura Details',
            'data'      => array(
                'sura_info' => $suraInfo,
                'ayahs_info' => $ayahsArr
            )
        ], Response::HTTP_OK);
    }
}
