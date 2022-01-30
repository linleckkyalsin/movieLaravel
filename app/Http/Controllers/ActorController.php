<?php

namespace App\Http\Controllers;

use App\Models\VoiceActor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;
use phpDocumentor\Reflection\Types\Void_;
use Illuminate\Support\Facades\File;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $actor=VoiceActor::orderby('id','desc')->get();

        return view('actor.index',compact('actor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('actor.create');
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
            'image'=>'required|mimes:png,jpg,jpeg,jfif',
            'gender'=>'required'

        ]);
        $file=$request->file('image');
        $file_name=uniqid().str_replace(' ','',$file->getClientOriginalName());
        $file->move(public_path('/images'),$file_name);
        VoiceActor::create([
            'name'=>$request->name,
            'image'=>$file_name,
            'gender'=>$request->gender
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
        $actor=VoiceActor::find($id);
        return view('actor.edit',compact('actor'));
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
        $request->validate([
            'name'=>'required',
            'gender'=>'required'

        ]);
        $actor=VoiceActor::find($id);
        if($request->file('image')){
            File::delete(public_path('/images/',$actor->image));
            $file=$request->file('image');
            $file_name=uniqid().str_replace(' ','',$file->getClientOriginalName());
            $file->move(public_path('/images/'),$file_name);
        }
        else{
            $file_name=$actor->image;
        }
        VoiceActor::where('id',$id)->update([
            'name'=>$request->name,
            'image'=>$file_name,
            'gender'=>$request->gender
        ]);
        return redirect()->back()->with('success','Updated Successfully');

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
        VoiceActor::where('id',$id)->delete();
        return redirect()->back()->with('success','Deleted Successfully');
    }
}