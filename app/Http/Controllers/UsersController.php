<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Validator;

class UsersController extends Controller
{

    public function index()
    {

        $all = User::paginate(15);

        return view('dashboard.users',compact('all'));

    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'username' => ['required'],
            'email' => ['required'],
            'no_hp' => ['required'],
            'status' => ['required'],
            'role' => ['required']
        ]);

        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }


        $user = User::where('id',$request->id)
                ->update([
                    'name' => $request->name,
                    'username' => $request->username,
                    'email' => $request->email,
                    'no_hp' => $request->no_hp,
                    'status' => $request->status,
                    'role' => $request->role,
            ]);

        // dd($product);



        if(!$user){
            return redirect()->back()->withErrors('Edit failed');
        }

        return redirect()->back()->with(['success' => 'Edit Success']);
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $all = User::where('name','like','%'.$search.'%')->paginate(15);


        return view('dashboard.users',compact('all'));
    }
}
