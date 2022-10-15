<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Member;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $id = Auth()->user()->id;

        $ikut = User::where('status','ikut')->count();
        $tidakikut = User::where('status','tidakikut')->count();
        $total = User::all()->count();

        $totalikut = Member::all()->count();

        return view('dashboard.index',compact('ikut','tidakikut','total','totalikut'));
    }

    public function member()
    {
        $id = Auth()->user()->id;

        $all = Member::where('user_id',$id)->get();
        return view('dashboard.member',compact('all'));
    }

    public function sezione()
    {
        // $id = Auth()->user()->id;

        $all = User::withCount('mema')->where('status','ikut')->paginate(15);
        // $all = User::withCount('mema')->paginate(15);
        $total = Member::all()->count();
        // dd($total);
        // $all = User::with('mema')->get();
        // dd($all);
        return view('dashboard.sezione',compact('all','total'));
    }
}
