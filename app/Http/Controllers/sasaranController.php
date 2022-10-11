<?php

namespace App\Http\Controllers;

use App\Models\sasaran;
use App\Models\tujuan;
use Illuminate\Http\Request;

class sasaranController extends Controller
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
        $tujuan = tujuan::all();
        return view('pages.dashboard.sasaran.create', compact('tujuan'));
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
            $sasaran = new sasaran();
            $sasaran->tujuan_id = $request->tujuan_id;
            $sasaran->sasaran = $value[$i];
            $sasaran->save();
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
        $sasaran = sasaran::findOrFail($id);
        $tujuan = tujuan::all();
        return view('pages.dashboard.sasaran.edit', compact('sasaran', 'tujuan'));
        // return view('pages.dashboard.sasaran.edit', compact('sasaran', 'tujuan'));
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
        $sasaran = sasaran::find($id);
        $sasaran->tujuan_id = $request->tujuan_id;
        $sasaran->sasaran = $request->title;
        $sasaran->save();

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
        $sasaran = sasaran::find($id);
        $sasaran->delete();

        return redirect()->route('visi.index');
    }
}
