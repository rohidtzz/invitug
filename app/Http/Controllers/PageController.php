<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sezione;

use Validator;

class PageController extends Controller
{

    public function index()
    {
        $data = Sezione::Paginate(15);
        return view('dashboard.pages',compact('data'));
    }

    public function show($slug)
    {

        $data = Sezione::where('slug',$slug)->first();
        // dd($data);

        if(!$data){
            return redirect('/');
        }

        return view('index',compact('data'));


    }

    public function create(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'slug' => ['required'],
        ]);

        // dd($validator);

        if($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }


        $this->validate($request, [
			'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
		]);

        $file = $request->file('image');
		$nama_file = $file->getClientOriginalName();
		$tujuan_upload = 'landing/img/logo/';
		$file->move($tujuan_upload,$nama_file);


        $sezione = Sezione::create([
            'logo' => $nama_file,
            'name' => $request->name,
            'slug' => $request->slug
        ]);

        // dd($product);



        if(!$sezione){
            return redirect()->back()->withErrors('register failed');
        }

        return redirect()->back()->with(['success' => 'Registration Success']);


        return redirect()->back();

    }

    public function update(Request $request)
    {

        Sezione::where('id',$request->id)->update([
            'name' => $request->name,
            'slug' => $request->slug
        ]);


        return redirect()->back();
    }

    public function delete($id)
    {

        Sezione::destroy($id);


        return redirect()->back();
    }
}
