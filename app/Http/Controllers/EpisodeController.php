<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Episode;
use App\Models\Season;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ep=Episode::all();
        return view('episode.index',compact('ep'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $anime=Anime::orderBy('id','desc')->get();
        $season=Season::orderBy('id','desc')->get();
        return view('episode.create',compact('anime','season'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>'required',
            'anime_id'=>'required',
            'season_id'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg,jfif',
        ]);
        $file=$request->file('image');
        $file_name=uniqid().str_replace(' ','',$file->getClientOriginalName());
        $file->move(public_path('/images'),$file_name);

        Episode::create([
        'name'=>$request->name,
        'anime_id'=>$request->anime_id,
        'season_id'=>$request->season_id,
        'description'=>$request->description,
        'image'=>$file_name,
        'duration'=>$request->duration
        ]);
        return redirect()->back()->with('success','Created Successfully');
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