<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use App\Models\category_blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $allArtikel = blog::all();
        $artikel = blog::where('user_id', $user_id)->get();
        return view('pages.dashboard.artikel.index', compact('user_id', 'allArtikel', 'artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = category_blog::all();
        return view('pages.dashboard.artikel.create', compact('categories'));
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
        $image->storeAs('article/thumbnail', $dataImage);

        $data = request();
        $user_id = Auth::user()->id;

        $blog = new blog();
        $blog->title = $request->title;
        $blog->article = $request->artikel;
        $blog->user_id = $user_id;
        $blog->category_blog_id = $request->category_id;
        $blog->image = $dataImage;
        $blog->save();

        return redirect()->route('blog.index');
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
        $artikel = blog::findOrFail($id);
        $categories = category_blog::all();
        return view('pages.dashboard.artikel.edit', compact('artikel', 'categories', 'id'));
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
        $firstImg = blog::where('id', $id)->first()->image;

        if ($image == "") {
            $dataImage = $firstImg;
        } else {
            $dataImage = time() . '.' . $image->extension();
            $image->storeAs('article/thumbnail', $dataImage);

            // dihosting
            // Storage::disk('hosting')->delete('article/thumbnail/' . $firstImg);

            // dilokal
            Storage::delete('article/thumbnail/' . $firstImg);
            $image->storeAs('article/thumbnail', $dataImage);
        }

        $blog = blog::find($id);
        $blog->title = $request->title;
        $blog->article = $request->artikel;
        $blog->user_id = Auth::user()->id;
        $blog->category_blog_id = $request->category_id;
        $blog->image = $dataImage;
        $blog->save();

        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = blog::findOrFail($id);
        Storage::delete('article/thumbnail/' . $blog->image);
        $blog->delete();

        return redirect()->route('blog.index');
    }
}
