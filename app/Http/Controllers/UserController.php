<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){

        $users = User::all();

        return view('welcome', ['users' => $users]);
    }

    public function create(){
        return view('users.create');
    }

    /**
     * It creates a new user, sets the name, email, password and birth date, and then saves it to the
     * database
    */
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

    public function destroy($id){
        User::findOrFail($id)->delete();

        return redirect(route('index'))->with('msg', 'Usuário excluido com suceso');
    }
}
