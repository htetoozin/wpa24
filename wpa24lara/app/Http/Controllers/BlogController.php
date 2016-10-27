<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return View::make("blog.index");
        // Model in Laravel
        // Migration (Migration and Migrate) -> Seeding -> Model
        $blogs = Blog::paginate(5);
        return view("blog.index", compact("blogs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("blog.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //IOC Container
        //$data = $request->except('_token');
        //dd($data);

        $this->validate($request, Blog::$rules);
        //return "store!";
        Blog::create($request->all());
        //$blog->create($request->all());
        alert()->success('Blog Create', 'Record Created');

        return redirect()->route('blogs.index');

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
        $blog= Blog::findOrFail($id);
        return view('blog.show', compact('blog'));
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
        $blog = Blog::findOrFail($id);
        return view("blog.edit", compact("blog"));
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
        //
        $this->validate($request, Blog::$rules);
        $ublog = Blog::findOrFail($id);
        $ublog->update($request->all());
        alert()->success('Blog Update', 'Record Updated');
        return redirect()->route("blogs.index");
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
        Blog::destroy($id);
        return redirect()->route("blogs.index");

    }
}
