<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id='23',$name='Yonatan'){
        return 'Id saya '.$id . ' & Nama Saya ' .$name;
    }
}
