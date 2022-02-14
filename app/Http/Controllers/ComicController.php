<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comics;
use Illuminate\Auth\Events\Validated;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comics::all();

        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form = $request->all();

        $request->validate([
            "title"=> "required|string|max:100",
            "description"=> "string|required",
            "image"=> "url|nullable",
            "price"=> "required|integer|min:0|max:50",
            "series"=> "required|string|max:50",
            "type"=> "required|string|max:50",
        ]);

        $newComic = Comics::create($form);

        // $newComic = new Comics();
        // $newComic->title = $form["title"];
        // $newComic->description = $form["description"];
        // $newComic->type = $form["type"];
        // $newComic->price = $form["price"];
        // $newComic->series = $form["series"];
        // if(!empty($form["image"])){
        //     $newComic->image = $form["image"];
        // }
        // else {
        //     $newComic->image = "https://www.greenlink.it/wp-content/themes/consultix/images/no-image-found-360x260.png";
        // }
        // $newComic->save();

        return redirect()->route("comics.show", $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics = Comics::find($id);
        
        return view("comics.show", compact("comics"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comics $comic)
    {
        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comics $comic)
    {
        $form = $request->all();

        $comic->title = $form["title"];
        $comic->description = $form["description"];
        $comic->type = $form["type"];
        $comic->price = $form["price"];
        $comic->series = $form["series"];
        if(!empty($form["image"])){
            $comic->image = $form["image"];
        }
        else {
            $comic->image = "https://www.greenlink.it/wp-content/themes/consultix/images/no-image-found-360x260.png";
        }
        $comic->save();

        return redirect()->route("comics.show", $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comics $comic)
    {
        $comic->delete();

        return redirect()->route("comics.index");
    }
}
