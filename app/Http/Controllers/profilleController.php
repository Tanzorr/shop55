<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class profilleController extends Controller
{
    //
    public function updateInbox(Request $request){
       $mId =$request->msgId;

       $update = DB::table('inbox')
           ->where('id',$mId)
           ->update([
               'status'=>0
           ]);
       if($update){
           echo "Status Upadate successfully";
       }
    }
}
