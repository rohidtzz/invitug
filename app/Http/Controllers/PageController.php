<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sezione;

class PageController extends Controller
{
    public function show($slug)
    {

        $data = Sezione::where('slug',$slug)->first();
        // dd($data);

        if(!$data){
            return redirect('/');
        }

        return view('index',compact('data'));


    }
}
