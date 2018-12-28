<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Cv;
use Auth;
use App\Http\Requests\cvRequest;
class CvController extends Controller

{ 
    public function __construct()
    {
         $this->middleware('auth');
    }
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->is_admin)
            {$listcv=Cv::all();}
        else
            {$listcv=Auth::user()->cvs;}

       // $listcv=Cv::all();(tout les cvs)
       // $listcv=Cv::where('user_id', Auth::user()->id)->get();
        return view('cv.index', ['xx'=>$listcv]);
        
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cv.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(cvRequest $request)
    { 
        $aa=new Cv();
        $aa->titre=$request->input('titre');
        $aa->presentation=$request->input('presentation');
        $aa->user_id=Auth::user()->id;

        if($request->hasFile('photo'))
         {
            $aa->photo=$request->photo->store('images');
         }

        $aa->save();

        session()->flash('success','le cv à été bien enregistré !!');

        return redirect('cvs');

    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('cv.show', ['id'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {    $aa=Cv::findOrFail($id);
        $this->authorize('update', $aa);
        return view('cv.edit', ['cv'=>$aa]);
        //return view('cv.edit', compact('aa')); 
    }
           

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(cvRequest $request, $id)
    {
        $cv=Cv::find($id);
        $cv->titre=$request->input('titre');
        $cv->presentation=$request->input('presentation');

         if($request->hasFile('photo'))
         {
            $cv->photo=$request->photo->store('images');
         }
         
        $cv->save();
         return redirect('cvs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cv=Cv::find($id);
        $cv->delete();
        return redirect('cvs');    
    }
}
