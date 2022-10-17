<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Validator;

class ProfileController extends Controller
{
    public function index()
    {

        $id = Auth()->user()->id;

        $all = User::find($id);
        // dd($all);

        return view('dashboard.profile',compact('all'));
    }

    public function update(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'no_hp' => ['required'],
            'username' => ['required'],
            'email' => ['required'],
        ]);

        // dd($validator);

        if($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        // dd($validator);

        $cek = $request->file('image');

        if(!$cek){

            $User = User::where('id',$request->id)
                ->update([
                        'name' => $request->name,
                        'no_hp' => $request->no_hp,
                        'username' => $request->username,
                        'email' => $request->email,
            ]);

            // dd($User);



            if(!$User){
                return redirect()->back()->withErrors('register failed');
            }

            return redirect()->back()->with(['success' => 'Registration Success']);
        }


        $this->validate($request, [
			'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
		]);

        $file = $request->file('image');
		$nama_file = $file->getClientOriginalName();
		$tujuan_upload = 'landing/img/logo/';
		$file->move($tujuan_upload,$nama_file);


        $User = User::where('id',$request->id)
                ->update([
                'logo' => $nama_file,
                'name' => $request->name,
                'no_hp' => $request->no_hp,
                'username' => $request->username,
                'email' => $request->email,
            ]);

        // dd($User);



        if(!$User){
            return redirect()->back()->withErrors('register failed');
        }

        return redirect()->back()->with(['success' => 'Registration Success']);

        // User::where('id',$request->id)->update([
        //     'name' => $request->name,
        //     'no_hp' => $request->no_hp,
        //     'username' => $request->username,
        //     'email' => $request->email,
        // ]);


        // return redirect()->back();

    }
}
