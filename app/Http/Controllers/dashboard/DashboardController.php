<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }
    public function profile()
    {
        return view('dashboard.profile');
    }
    public function profileUpdate(Request $request)
    {
        //update profile with password
        if ($request->password) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed|min:8',
            ]);
            $request->user()->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),

            ]);
            return redirect()->route('dashboard.profile')->withSuccess('Profile was successful updated!');
        } else{
            //update profile without password
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
            ]);
            $request->user()->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
            return redirect()->route('dashboard.profile')->withSuccess('Profile was successful updated!');
        }
    }

}
