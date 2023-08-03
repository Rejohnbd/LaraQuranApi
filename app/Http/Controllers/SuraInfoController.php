<?php

namespace App\Http\Controllers;

use App\SuraInfo;
use App\SuraList;
use Illuminate\Http\Request;

class SuraInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suraList = SuraList::select('id', 'total_ayahs', 'english_name', 'bangla_name')->get();
        return view('surainfo.index', compact('suraList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Need to apply Validation
        $suraInfo = new SuraInfo;

        $suraInfo->sura_list_id = $request->sura_list_id;
        $suraInfo->ayah_no      = $request->ayah_no;
        $suraInfo->page_no      = $request->page_no;
        $suraInfo->jaz_no       = $request->jaz_no;
        $suraInfo->arabic       = $request->arabic;
        $suraInfo->english      = $request->english;
        $suraInfo->bangla       = $request->bangla;
        $suraInfo->save();

        flash()->addSuccess('Sura Info Added Successfully');

        return redirect()->route('sura-info.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuraInfo $suraInfo)
    {
        // Need to apply Validation
        $suraInfo->sura_list_id = $request->sura_list_id;
        $suraInfo->ayah_no      = $request->ayah_no;
        $suraInfo->page_no      = $request->page_no;
        $suraInfo->jaz_no       = $request->jaz_no;
        $suraInfo->arabic       = $request->arabic;
        $suraInfo->english      = $request->english;
        $suraInfo->bangla       = $request->bangla;
        $suraInfo->save();

        flash()->addSuccess('Sura Info Update Successfully');

        return redirect()->route('sura-info.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function checkSuraInfo(Request $request)
    {
        $suraInfo = SuraInfo::where('sura_list_id', $request->suraId)->where('ayah_no', $request->ayahId)->first();
        if (!is_null($suraInfo)) {
            return response()->json([
                'status' => true,
                'data' => view('surainfo.sura_info_with_data', compact('suraInfo'))->render()
            ]);
        } else {
            return response()->json([
                'status' => false,
                'data' => view('surainfo.sura_info_without_data')->render()
            ]);
        }
    }
}
