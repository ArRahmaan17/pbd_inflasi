<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('layout.admin.login');
    }

    public function singup()
    {
        return view('layout.admin.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'unique:users,email|required',
            'password' => 'required'
        ]);
        DB::beginTransaction();
        try {
            if ($request->organisasi) {
            } else {
                $data = $request->except('_token');
                $data['password'] = Hash::make($data['password']);
                $user = User::create($data);
                RoleUser::create(['user_id' => $user->id, 'role_id' => 1]);
            }
            $response = ['message' => 'User berhasil di buat', 'button' => 'Login'];
            $code = 200;
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th);
            $code = 422;
            $response = ['message' => 'User gagal di buat', 'button' => 'Coba Lagi'];
        }
        return response()->json($response, $code);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => "required",
            'password' => 'required'
        ]);
        $response = ['message' => 'Gagal Login Ke Aplikasi', 'button' => 'Coba Lagi'];
        $code = 401;
        if (Auth::attempt($request->except('_token'))) {
            $response = ['message' => 'Berhasil Login Ke Aplikasi', 'button' => 'Masuk Aplikasi'];
            $code = 200;
        }
        return response()->json($response, $code);
    }
}
