<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // data = comics
        $comic = comic::all();
        return view('comics.index', compact('comic'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comicAdd = $request->all();

        $new_comic = new Comic();
        // primo metodo per salvare i dati
        // $new_comic->title = $comicAdd['title'];
        // $new_comic->description = $comicAdd['description'];
        // $new_comic->price = $comicAdd['price'];
        // $new_comic->series = $comicAdd['series'];
        // $new_comic->sale_data = $comicAdd['sale_date'];
        // $new_comic->type = $comicAdd['type'];

        // secondo metodo per salvare i dati
        $new_comic->fill($comicAdd);
        $new_comic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $info_comic = comic::find($id);
      //var_dump($info_comic);
      echo $info_comic['description'];
       // return view('comics.show', compact('info_comic'));
      // echo $id;
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