<?php

namespace App\Http\Controllers;

use App\Models\misi;
use App\Models\tujuan;
use Illuminate\Http\Request;

class tujuanController extends Controller
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
        $misi = misi::all();
        return view('pages.dashboard.tujuan.create', compact('misi'));
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
            $misi = new tujuan;
            $misi->misi_id = $request->misi_id;
            $misi->tujuan = $value[$i];
            $misi->save();
        }

        // $value = $request->title;
        // for ($i = 0; $i < count($value); $i++) {
        //     $misi = new misi;
        //     $misi->misi = $value[$i];
        //     $misi->save();
        // }

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
        $tujuan = tujuan::findOrFail($id);
        $misi = misi::all();
        return view('pages.dashboard.tujuan.edit', compact('tujuan', 'misi'));
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
        $misi = tujuan::find($id);
        $misi->tujuan = $request->title;
        $misi->misi_id = $request->misi_id;
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
        $tujuan = tujuan::find($id);
        $tujuan->delete();

        return redirect()->route('visi.index');
    }
}
