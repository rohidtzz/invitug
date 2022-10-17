<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\User;

class SezioneController extends Controller
{
    public function update(Request $request)
    {

        User::where('id',$request->id)->update([
            'name' => $request->name,
            'no_hp' => $request->no_hp,
            'username' => $request->username,
            'email' => $request->email,
            'status' => $request->status
        ]);


        return redirect()->back();

    }
}
