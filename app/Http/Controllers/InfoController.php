<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Info;
use DB;
use Illuminate\Support\Facades\validator;

class InfoController extends Controller
{
    public function store(Request $request){
            $validator = validator::make($request->all(),[
                'fname'=>'required|max:255',
                'lname'=>'required|max:255',
                'email'=>'required|max:255',
                'cname'=>'required|max:255',
                'number'=>'required|max:10|min:10',
                'details'=>'required',
            ]);

            if($validator->fails()){
                return redirect('/')
                    ->withInput()
                    ->withErrors($validator);
            }

            $info = new Info;

            $info->fname = $request->fname;
            $info->lname = $request->lname;
            $info->email = $request->email;
            $info->number = $request->number;
            $info->cname = $request->cname;
            $info->industry = $request->industry;
            $info->province = $request->province;
            $info->details = $request->details;
          
            $info->save();
            return redirect('/Show');
    }
public function show(){
    $info = DB::table('info')->get();

        return view('results' , ['InfoData' => $info] );
}

}
