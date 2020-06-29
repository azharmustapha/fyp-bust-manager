<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudentController extends Controller
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
        $users = DB::select('select * from pelajar');
        return view('student',['users'=>$users]);

    }

    public function make($id)
    {
        $user = DB::table('pelajar')->where('pelajar_id',$id);

        $rs = $user->pelajar_id = $id;
        $user->qrcode =$rs;

        $file = ('qr'.'/'.$rs.'.png');
        \QRCode::text($rs)->setOutFIle($file)->png();

        $user->qrcode = $file;
        //$user->save();

        return response()->download($file);
        return redirect('student')->with('user', $user);
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $users = DB::table('pelajar')->where('pelajar_nama', 'like', '%'.$search.'%')
                                    ->orwhere('pelajar_id', 'like', '%'.$search.'%')
                                    ->orwhere('sekolah_nama', 'like', '%'.$search.'%')
                                    ->orwhere('full_name', 'like', '%'.$search.'%')->paginate(5);

        return view('student',['users'=>$users]);
    }

    public function delete($id)
    {
        DB::table('pelajar')->where('pelajar_id',$id)->delete();
        return redirect('student');
    }
}
