<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class script extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $script = New \App\Script;
      $scripts = \App\Script::orderBy('Name', 'asc')->get();
      $categories = \App\Category::orderBy('Name','asc')->get();
      return view('scripts',[
        'scripts' => $scripts
        ,'categoryList' => $categories
        ,'script' => $script
      ]);
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
      $validator = \Validator::make($request->all(),[
        'name' => 'required|max:300',
        'DateCreated' => 'required',
        'TargetServer' => 'required',
        'Categories' => 'required'
      ]);

      if ($validator->fails()){
        return redirect('/')
          ->withInput()
          ->withErrors($validator);
      }

      $script = new \App\Script;

      $script->Name = $request->name;
      $script->Notes = $request->notes;
      $script->TargetServer = $request->TargetServer;
      $script->DateCreated = $request->DateCreated;
      $script->DateUpdated = $request->DateUpdated;

      $script->save();
      $script->categories()->sync($request->categories);

      return redirect('/');
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
      $target = \App\Script::find($id);
      $target->delete();
      return redirect('/');
    }
}
