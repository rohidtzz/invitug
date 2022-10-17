<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Member;

class MemberController extends Controller
{



    public function ikut()
    {
       $id = Auth()->user()->id;

        User::where('id',$id)->update([
            'status' => 'ikut'
        ]);
        return redirect()->back();
    }

    public function tidakikut()
    {
       $id = Auth()->user()->id;

        User::where('id',$id)->update([
            'status' => 'tidakikut'
        ]);

        return redirect()->back();
    }

    public function create(Request $request)
    {
        $id = Auth()->user()->id;

        Member::create([
            'name' => $request->name,
            'no_hp' => $request->no_hp,
            'user_id' => $id
        ]);


        return redirect()->back();
    }

    public function update(Request $request)
    {
        $id = Auth()->user()->id;

        Member::where('id',$request->id)->update([
            'name' => $request->name,
            'no_hp' => $request->no_hp,
        ]);


        return redirect()->back();
    }

    public function delete($id)
    {

        Member::destroy($id);


        return redirect()->back();
    }
}
