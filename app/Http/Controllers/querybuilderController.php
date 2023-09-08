<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class querybuilderController extends Controller
{
    public function index(Request $request)
    {
        // $data=DB::table('studentmarks')->delete();
        // $data=DB::table('studentmarks')->where('name','=','ajay')->delete();
        // $data=DB::table('studentmarks')->updateOrInsert(["id"=>4],
        //     [
        //         "name"=>"reethu",
        //         "age"=>67,
        //         "marks"=>39
        //     ]
        //     );
        // $data=DB::table('studentmarks')->where('name','=','amal')->update(
        //         [
        //             "name"=>"athira",
        //             "age"=>29,
        //             "marks"=>65
        //         ]
        //         );
        // $data=DB::table('studentmarks')->distinct()->get('age');
        // dd($data);
        // $data=DB::table('studentmarks')->find(2);//only for primary key
        // dd($data);
        // $data=DB::table('studentmarks')->where('name','=','anitha')->exists();
        // dd($data);
        // $data=DB::table('studentmarks')->where('age','<',24)->count();
        // dd($data);
        // $data=DB::table('studentmarks')->min('marks');
        //  dd($data);
        // $data=DB::table('studentmarks')->
        // where('age','>',24)->
        // where('age','<',40)->get();
        // dd($data);
        // $data=DB::table('studentmarks')->where('age','<',24)->value('id');
        // dd($data);
        // $data=DB::table('studentmarks')->where('age','=',22)->first();
        // dd($data);
        // $data=DB::table('studentmarks')->where('age','>',24)->get();
        // dd($data);
        // $data=DB::table('studentmarks')->get();
        // dd($data);
        // $data=DB::table('studentmarks')->insert([
        //     [
        //         "name"=>"anakha",
        //         "age"=>25,
        //         "marks"=>35
        //     ],
        //     [
        //         "name"=>"amrutha",
        //         "age"=>53,
        //         "marks"=>90
        //     ]
        //     ]);
    }
}
