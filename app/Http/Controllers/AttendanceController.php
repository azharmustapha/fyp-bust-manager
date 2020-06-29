<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AttendanceController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = DB::select('select * from jadual');
        return view('attendance',['users'=>$users]);
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $users = DB::table('jadual')->where('scannedCode', 'like', '%'.$search.'%')->paginate(5);

        return view('attendance',['users'=>$users]);
    }
}
