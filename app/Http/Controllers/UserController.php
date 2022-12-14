<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Apenas redirecionamento e views
    public function index(){

        $search = request('search');

        if($search){
            $users = User::where('name', 'like', '%'.$search.'%')
                        ->orWhere('email', 'like', '%'.$search.'%')
                        ->orWhere('birth_date', 'like', '%'.$search.'%')
                        ->get();
        }else{
            $users = User::all();
        }

        return view('welcome', ['users' => $users]);
    }

    public function create(){

        $user = [
            'name' => '',
            'email' => '',
            'birth_date' => '',
            'password' => '',
            'url' => route('user.store')
        ];
        
        return view('users.create', ['user' => $user]);
    }

    public function edit($id){
        $user = User::findOrFail($id);

        $user['url'] = route('user.update', ['id' => $id]);

        return view('users.create', ['user' => $user]);
    }

    // Alterações no banco

    /**
     * It creates a new user, sets the name, email, password and birth date, and then saves it to the
     * database
    */
    public function store(Request $request){

        /* Checking if the email is already registered in the database. */
        $users = User::where('email', $request->email);

        if ($users->count()>0) {

            $user = [
                'name' => $request->name,
                'email' => $request->email,
                'birth_date' => $request->birth_date,
                'password' => '',
                'url' => route('user.store')
            ];

            return redirect(route('user.create'))->with('msg', 'Email já cadastrado')->with('user', $user);
        }

        $user = new User;

        $birth_date = str_replace('/', '-', $request->birth_date);

        $date = date("Y-m-d", strtotime($birth_date));

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->birth_date = $date;

        $user->save();

        $user = [
            'name' => '',
            'email' => '',
            'birth_date' => '',
            'password' => '',
            'url' => route('user.store')
        ];

        return redirect(route('user.create'))->with('msg', 'Dados cadastrados com sucesso')->with('user', $user);
        
    }

    public function destroy($id){
        User::findOrFail($id)->delete();

        return redirect(route('index'))->with('msg', 'Usuário excluido com suceso');
    }

    public function update(Request $request, $id){
        
        /* Checking if the email is already registered in the database. */
        $user = User::where('email', $request->email)->where('id', '!=', $id);
        if ($user->count()>0) {
            return redirect(route('user.edit', ['id' => $id]))->with('msg', 'Email já cadastrado');
        }

        $user = User::findOrFail($id);
        
        if ($user->password == $request->password_before) {

            if ($request->password == '') {
                $request['password'] = $user->password;
            }

            echo $request->birth_date."<br>";

            $birth_date = str_replace('/', '-', $request->birth_date);

            $date = date("Y-m-d", strtotime($birth_date));
            $data = $request->all();

            User::findOrFail($id)->update($data);
            
            /* Updating the birth date of the user. */
            $user = User::findOrFail($id);
            $user->birth_date = $date;
            $user->update();

            return redirect(route('user.edit', ['id' => $id]))->with('msg', 'Usuário editado com sucesso');
        }
            
        return redirect(route('user.edit', ['id' => $id]))->with('msg', 'Senha incorreta, digite a senha certa para alterar o usuário'); 
        
    }
}
