<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News ;
use App\Models\Category;

class NewsController extends Controller
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
            $Category = Category::all();
            return view('ControlPanel.Add-News')->with('Category' , $Category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $file = $request->file('img');
       $file_extension = $file->getClientOriginalExtension();
       $filename = time() . '.' . $file_extension ;
       $filepath = 'images';
       $request->img->move($filepath , $filename);



        $News = new News();
        $News->categoryid = $request->input('category');
        $News->authorid = '0' ;
        $News->Title = $request->input('title', 'test');
        $News->body = $request->input('textarea-input', 'this is the new news body ');
        $News->img = $filename;
        $News->save();

        return $this->showall();

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
        $News = News::find($id);

        return view('ControlPanel.update-News')->with('News' , $News);
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
       $file = $request->file('img');
       $file_extension = $file->getClientOriginalExtension();
       $filename = time() . '.' . $file_extension ;
       $filepath = 'images';
       $request->img->move($filepath , $filename);


        $News = News::find($id);
        $News->Title = $request->input('title', 'test');
        $News->body = $request->input('textarea-input', 'this is the new news body ');
        $News->img = $filename;
        $News->save();

        return $this->showall();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::destroy($id);
        return $this->showall();
    }


    public function showall()
    {
        $News = News::all();
        $Category = new Category();
        return view('ControlPanel.news-list')->with('News' , $News)->with('Category' , $Category);
    }
}
