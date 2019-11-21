<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class studentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $st=student::get();
       return view('table')->with('st',$st);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $student = new student;

        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->email= $request->email;
        $student->description= $request->description;

        $student->save();
        return view('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  
        //dd($request->all());
        $st=student::find($id);
       return view('show')->with('st',$st);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $st=student::find($id);
        return view('edit')->with('st',$st);
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
       $st=student::find($id);
       $st->update($request->all());
       return redirect (route('index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $st=student::find($id)->delete();
        return redirect()->route('table')->with('message','deleted successfully');
       
    }
}
