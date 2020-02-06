<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Pnexam;

class pnexamController extends Controller
{
    public function index(){
        $employee = DB::select('select employee from pnexam');
        // dd($employee);
        return view('pnexam',['employee'=>$employee]);
        
        }

    // public function insert(Request $request){
    //     $clockin = $request->input('clockin');
    //     $start = $request->input('start');
    //     $end= $request->input('end');
    //     $clockout = $request->input('clockout');
    //     $data=array('clockin'=>$clockin,"start"=>$start,"end"=>$end,"clockout"=>$clockout);
    //     DB::table('pnexam')->insert($data);
    //     $data->save();
    //     DB::commit();
    // }

    public function clockin(Request $request)
    {
        $clockin = $request->input('clockin');
        $data=array('clockin'=>$clockin);
        DB::table('pnexam')->insert($data);
        $data->save();
        DB::commit();
    }
}
