<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function login_index() {
        return view('user.secure.login');
    }

    public function login_processing(Request $request) {
        $request->validate([
            // 'name' => 'required'
            // 'password' => 'required|min:6|max:16'
            'username' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $findUser = User::where('email', $request->username)->first();

        if(!$findUser) {
            return back()
                ->with('login_error', '<span style="font-size: 12px; color: red">Email hoặc mật khẩu không chính xác!</span>');
        } else {
            // Check password
            if (Hash::check($request->password, $findUser->password)) {
                // Lấy ra toàn bộ role của user
                $roleUser = Role::select('role.name AS role_name')
                                ->join('user_roles', 'user_roles.role', '=', 'role.id')
                                ->join('users', 'users.id', '=', 'user_roles.user')
                                ->where('email', $request->username)
                                ->orderBy('role.level', 'desc')
                                ->get();

                if ($roleUser->count() <= 0) {
                    return back()
                        ->with('login_error', '<span style="font-size: 12px; color: red">User này chưa được cấp quyền truy cập!</span>');
                }

                $arrayRole = array();
                for ($i = 0; $i < $roleUser->count(); $i++) {
                    array_push($arrayRole, $roleUser[$i]->role_name);
                }

                $request->session()->put('user_id', $findUser->id);
                $request->session()->put('user_name', $findUser->name);
                $request->session()->put('user_role', $arrayRole);
                return redirect()->route('user.dashboard');
            } else {
                return back()
                    ->with('login_error', '<span style="font-size: 12px; color: red">Email hoặc mật khẩu không chính xác!</span>');
            }
        }
    }

    public function logout(Request $request)
    {
    	$request->session()->flush();

    	return redirect()->route('user.login')
    		->with('login_error','<span style="color: blue">Đăng xuất thành công!</span>');
    }
}
