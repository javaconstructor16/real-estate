<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;

class NewsletterController extends Controller
{
    
    
    public function insertEmail(Request $request){

        $Newsletter = new Newsletter();
        $data = $this->validate($request, [
            'email'=>'required',
        ]);
        $Newsletter->saveEmail($data);
        //return redirect('/home')->with('success', 'New email created');
        //return view('newsletter');
     }

     
}
