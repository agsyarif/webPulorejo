<?php

namespace App\Http\Controllers;

use App\Models\perangkat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class perangkatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perangkat = perangkat::where('is_bpd', 0)->get();
        return view('pages.dashboard.perangkat.index', compact('perangkat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.perangkat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $image = $request->file('thumbnail');
        $dataImage = time() . '.' . $image->extension();
        $image->storeAs('pemerintahan/perangkat', $dataImage);

        $data = request();
        $user_id = Auth::user()->id;

        $perangkat = new perangkat;
        $perangkat->nama = $data->title;
        $perangkat->jk = $data->jenis_kelamin;
        $perangkat->jabatan = $data->jabatan;
        $perangkat->is_bpd = $data->pangkat;
        $perangkat->photo = $dataImage;
        $perangkat->save();

        return redirect()->route('perangkat.index');
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
        $perangkat = perangkat::findOrFail($id);
        return view('pages.dashboard.perangkat.edit', compact('perangkat'));
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

        $image = $request->file('thumbnail');
        $firstImg = perangkat::where('id', $id)->first()->photo;

        if ($image == "") {
            $dataImage = $firstImg;
        } else {
            $dataImage = time() . '.' . $image->extension();
            $image->storeAs('pemerintahan/perangkat', $dataImage);

            Storage::delete('pemerintahan/perangkat/' . $firstImg);
            $image->storeAs('pemerintahan/perangkat', $dataImage);
        }

        $data = request();

        $perangkat = perangkat::findOrFail($id);
        $perangkat->nama = $data->title;
        $perangkat->jk = $data->jenis_kelamin;
        $perangkat->jabatan = $data->jabatan;
        $perangkat->is_bpd = $data->pangkat;
        $perangkat->photo = $dataImage;
        $perangkat->save();

        return redirect()->route('perangkat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perangkat = perangkat::findOrFail($id);
        Storage::delete('pemerintahan/perangkat/' . $perangkat->photo);
        $perangkat->delete();

        return redirect()->route('perangkat.index');
    }
}
