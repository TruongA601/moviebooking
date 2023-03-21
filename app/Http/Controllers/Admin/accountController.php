<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  \Illuminate\Support\Facades\Session;

class accountController extends Controller
{
    public function account()
    {
        $users = DB::table('users')->select('*');
        $users = $users->get();
        return view('admin.users.account', compact('users'));
    }
    public function delete($UserID)
    {
        Session()->flash('deletecheck', 'Bạn có chắc muốn xóa không');
        DB::table('users')->where('UserID', $UserID)->delete();

        return redirect()->route('account');
    }
    public function viewupdate($UserID)
    {
        $users = DB::table('users')->where('UserID', $UserID)->select();
        $users = $users->get();
        return view('admin.users.update', compact('users'));
    }
    public function update($UserID, Request $request)
    {
        $data = $request->all();
        $hashed_password = password_hash($data['password'], PASSWORD_DEFAULT);
        $users = DB::table('users')->where('UserID', $UserID)
            ->update([
                'username' => $data['username'],
                'password' => $hashed_password,
                'email' => $data['email'],
                'sdt' => $data['sdt']
            ]);

        $users = DB::table('users')->where('UserID', $UserID)->select();
        $users = $users->get();
        Session::flash('success', 'users update successfully');
        return view('admin.users.update', compact('users'));
    }
}
