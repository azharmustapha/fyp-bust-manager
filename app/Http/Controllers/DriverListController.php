<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class DriverListController extends Controller
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
       $users = DB::select('select * from pemandu');
       return view('driverlist',['users'=>$users]);
   }

   public function search(Request $request)
   {
       $search = $request->get('search');
       $users = DB::table('pemandu')->where('pemandu_ic', 'like', '%'.$search.'%')
                                    ->orwhere('pemandu_username', 'like', '%'.$search.'%')
                                    ->orwhere('pemandu_fullname', 'like', '%'.$search.'%')->paginate(5);

       return view('driverlist',['users'=>$users]);
   }

   public function delete($id)
   {
       DB::table('pemandu')->where('pemandu_id',$id)->delete();
       return redirect('driverlist');
   }

   public function edit($id)
   {
       //
   }
}
