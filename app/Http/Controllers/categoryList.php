<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoryList extends Controller
{
    public function show($id)
    {
        $script = \App\Script::find($id)->with('categories')->where('id',$id)->first();
        $categories = \App\Category::get();
        return view('categorylist',[
          'script' => $script,
          'categories' => $categories]);
      }

}
