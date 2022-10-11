<?php

namespace App\Http\Controllers;

use App\Models\misi;
use App\Models\visi;
use Illuminate\Http\Request;

class misiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.misi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $value = $request->title;
        for ($i = 0; $i < count($value); $i++) {
            $misi = new misi;
            $misi->misi = $value[$i];
            $misi->save();
        }

        return redirect()->route('visi.index');
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
        $misi = misi::findOrfail($id);
        return view('pages.dashboard.misi.edit', compact('misi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $misi = misi::find($id);
        $misi->misi = $request->title;
        $misi->save();

        return redirect()->route('visi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $misi = misi::find($id);
        $misi->delete();

        return redirect()->route('visi.index');
    }
}
