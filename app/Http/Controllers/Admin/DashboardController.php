<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return redirect()->route('admin.pages.homepage');
    }

    public function changePassword()
    {
        return view('admin.change-password');
    }

    public function updatePassword(Request $request)
    {
        $oldPassword = $request->get('old_password');
        $newPassword = $request->get('password');
        $user = Auth::guard('admin')->user();

        if (!(Hash::check($oldPassword, $user->password))) {
            flash("Old Password Do Not Match !")->error();
            return redirect(route('change-password'));
        } else {
            $data['password'] = Hash::make($newPassword);
            $user->update($data);
            flash("Password Successfully Updated.")->success();
        }
        return redirect()->back();
    }
}
