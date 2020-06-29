<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use SebastianBergmann\CodeCoverage\Driver\Driver;

class DriverController extends Controller
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
        return view('driver');
    }

    public function insertform(){
        return view('driver');
        } 
        public function insert(Request $request){
            $pemandu_fullname = $request->input('pemandu_fullname');
            $pemandu_ic = $request->input('pemandu_ic');
            $pemandu_phone = $request->input('pemandu_phone');
            $pemandu_username = $request->input('pemandu_username');
            $pemandu_password = $request->input('pemandu_password');
            $data=array('pemandu_fullname'=>$pemandu_fullname,"pemandu_ic"=>$pemandu_ic,"pemandu_username"=>$pemandu_username,"pemandu_password"=>$pemandu_password,"pemandu_phone"=>$pemandu_phone);
            
            DB::table('pemandu')->insert($data);
            
            echo "Record inserted successfully<br/>";
            
            echo '<a href = "/driverlist">Click Here</a> to go back.';
        }

    public function edit($id)
    {
        return view('edit');
    }
}
