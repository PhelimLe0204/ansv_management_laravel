<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class PicController extends Controller
{
    //
    public function index(){
        $users = User::select('users.id','users.name as name','users.email','users.enabled','users.created_at')
        ->get();

        foreach($users as $user) {
            $user->role = Role::select('role.name as role_name')
            ->join('user_roles', 'user_roles.role','=','role.id')
            ->join('users', 'users.id','=','user_roles.user')
            ->where('user_roles.user',$user->id)
            ->orderBy('role.level')
            ->first()->role_name;
        }
        return view('user.pic.pic',compact('users'));
    }
}
