<?php

namespace App\Http\Controllers\Back\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
        return response()->json(['a'=>'asdf']);
    }

    public function update(){

    }
}
