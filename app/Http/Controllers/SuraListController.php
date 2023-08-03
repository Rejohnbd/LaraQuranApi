<?php

namespace App\Http\Controllers;

use App\SuraList;
use Illuminate\Http\Request;

class SuraListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suraList = SuraList::paginate(10);
        return view('suralist.index', compact('suraList'));
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
        //
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
    public function edit(SuraList $suraList)
    {
        return view('suralist.edit', compact('suraList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuraList $suraList)
    {
        // Need to apply Validation
        $suraList->arabic_name          = $request->arabic_name;
        $suraList->total_ayahs          = $request->total_ayahs;
        $suraList->english_name         = $request->english_name;
        $suraList->english_ayahs_count  = $request->english_ayahs_count;
        $suraList->bangla_name          = $request->bangla_name;
        $suraList->bangla_ayahs_count   = $request->bangla_ayahs_count;
        $suraList->save();

        flash()->addSuccess('Sura Info Update Successfully');

        return redirect()->route('sura-list.index');
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
}
