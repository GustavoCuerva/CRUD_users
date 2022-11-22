<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        $user = new User;

        $date = date("Y-m-d", strtotime($request->date));

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->birth_date = $date;

        $user->save();

        return redirect(route('user.create'))->with('msg', 'Dados cadastrados com sucesso');
    }
}
