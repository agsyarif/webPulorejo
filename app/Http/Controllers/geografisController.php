<?php

namespace App\Http\Controllers;

use App\Models\geografis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class geografisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $geografis = geografis::all()->first();
        return view('pages.dashboard.geografis.index', compact('geografis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.geografis.create');
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
        $image->storeAs('peta', $dataImage);

        $data = request();

        $geografis = new geografis;
        $geografis->title = $data->title;
        $geografis->description = $data->artikel;
        $geografis->peta = $dataImage;
        $geografis->save();

        return redirect()->route('geografis.index');
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
        $geografis = geografis::findOrFail($id);
        return view('pages.dashboard.geografis.edit', compact('geografis'));
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
        $firstImg = geografis::where('id', $id)->first()->image;

        if ($image == "") {
            $dataImage = $firstImg;
        } else {
            $dataImage = time() . '.' . $image->extension();
            $image->storeAs('peta', $dataImage);

            // dilokal
            Storage::delete('peta' . $firstImg);
            $image->storeAs('peta', $dataImage);
        }

        $geografis = geografis::find($id);
        $geografis->title = $request->title;
        $geografis->description = $request->artikel;
        $geografis->peta = $dataImage;
        $geografis->save();

        return redirect()->route('geografis.index');
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
