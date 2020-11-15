<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function personalAdmin()
    {
        $user=Auth::user();
        $name[]=$this->split_name($user->name);
        $data['first_name']=$name[0][0];
        $data['last_name']=$name[0][1];
        // dd($data);
        return view('admin.admin',['user'=>$user,'data'=>$data]);
    }

    public function userData()
    {
        return view('user.index');
    }

    public function teknisi()
    {
        return view('teknisi.index');
    }

    //function to split name
    function split_name($name) {
        $name = trim($name);
        $last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
        $first_name = trim( preg_replace('#'.$last_name.'#', '', $name ) );
        return array($first_name, $last_name);
    }
}
