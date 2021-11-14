<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class Usercont extends Controller
{
    //
    function getdata(Request $req){
        $member = new member;
        $member->name=$req->name;
        $member->email=$req->email;
        $member->contact=$req->contact;
        $member->msj=$req->msj;
        $member->save();
        return redirect('/');

    }
} 
