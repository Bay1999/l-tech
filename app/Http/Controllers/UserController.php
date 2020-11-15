<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        
        $data['users']=User::all();
        return view('teknisi.index',$data);
    }

    public function teknisi_add ()
    {
        return view('teknisi.add');
    }
    public function teknisi_store (Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'first_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
            'city' => 'required',
            'country' => 'required',
            'kode_pos' => 'required',
        ]);

        $user=new User();
        $user->name=$request->first_name." ".$request->last_name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->role=$request->role;
        $user->city=$request->city;
        $user->kode_pos=$request->kode_pos;
        $user->save();
        return redirect()->route('teknisi');
    }

    //function to split name
    function split_name($name) {
        $name = trim($name);
        $last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
        $first_name = trim( preg_replace('#'.$last_name.'#', '', $name ) );
        return array($first_name, $last_name);
    }
}
