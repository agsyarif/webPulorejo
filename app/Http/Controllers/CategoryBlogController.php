<?php

namespace App\Http\Controllers;

use App\Models\category_blog;
use App\Models\categoryBlog;
use Illuminate\Http\Request;
use Livewire\Commands\CopyCommand;

class CategoryBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = category_blog::all();
        return view('pages.dashboard.kategori.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $titles =  $request->title;

        for ($i = 0; $i < count($titles); $i++) {
            $category_blog = new category_blog;
            $category_blog->name = $titles[$i];
            $category_blog->description = $titles[$i];
            $category_blog->save();
        }

        return redirect()->route('blog.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\categoryBlog  $categoryBlog
     * @return \Illuminate\Http\Response
     */
    public function show(category_blog $category_blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categoryBlog  $categoryBlog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = category_blog::findOrFail($id);
        return view('pages.dashboard.kategori.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\categoryBlog  $categoryBlog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        for ($i = 0; $i < count($request->title); $i++) {
            $category = category_blog::find($id);
            $category->name = $request->title[$i];
            $category->save();
        }

        return redirect()->route('categori-blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categoryBlog  $categoryBlog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = category_blog::find($id);
        $category->delete();
        // $categories = category_blog::all();
        return redirect()->route('categori-blog.index');
        //
    }
}
