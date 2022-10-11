<?php

namespace App\Http\Controllers;

use App\Models\misi;
use App\Models\sasaran;
use App\Models\tujuan;
use App\Models\visi;
use Illuminate\Http\Request;

class visiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visi = visi::all();
        $misi = misi::all();
        $tujuan = tujuan::all();
        $sasaran = sasaran::all();
        return view('pages.dashboard.misi.index', compact('visi', 'misi', 'tujuan', 'sasaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.visi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $visi = new visi;
        $visi->visi = $request->title;
        $visi->save();

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
        $visi = visi::findOrFail($id);
        return view('pages.dashboard.visi.edit', compact('visi'));
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
        $visi = visi::find($id);
        $visi->visi = $request->title;
        $visi->save();

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
        $misi = visi::find($id);
        $misi->delete();

        return redirect()->route('visi.index');
    }
}
