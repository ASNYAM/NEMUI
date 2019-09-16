<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IreulController extends Controller
{
    //
    public function show($id){
        return view('ireul/show');
    }
}
