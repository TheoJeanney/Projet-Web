<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\User;
//Controller for User
class UsersController extends Controller
{
    public function editU($id)
    {   
        $user=User::find($id);
        return view('pages.editU')->with('users', $user);
    }
//Update users
    public function update(Request $request, $id)
    { 
        $this->validate($request,
            [
            'User_lastname' => 'required',
            'User_firstname' => 'required',
            'email' => 'required|email',
            'Id_status' => 'required|integer|between:1,4',
            'Id_campus' => 'required|integer|between:1,25'
        ]);

        $user=User::find($id);
        $user->User_lastname = $request->input('User_lastname');
        $user->User_firstname = $request->input('User_firstname');
        $user->email = $request->input('email');
        $user->Id_status = $request->input('Id_status');
        $user->Id_campus = $request->input('Id_campus');

        $user->save();

        return redirect('admin');
    }
//Destroy an user.
    public function destroyU($id)
    {
        $user=User::find($id);
        $user->delete();

        return redirect('admin');
    }
}
