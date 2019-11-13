<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
    // mengambil data dari table pegawai
    	$users = DB::table('users')->get();
 
    	// mengirim data pegawai ke view index
    	return view('user',['users' => $users]);
    }
    public function tambah()
	{
	 
		// memanggil view tambah
		return view('tambahuser');
	 
	}

    // public function updatePassword(Request $request){
    //     if (!(Hash::check($request->get('old_password'), Auth::user()->password))) {
    //         // The passwords not matches
    //         //return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
    //         return response()->json(['errors' => ['current'=> ['Current password does not match']]], 422);
    //     }
    //     //uncomment this if you need to validate that the new password is same as old one

    //     if(strcmp($request->get('old_password'), $request->get('new_password')) == 0){
    //         //Current password and new password are same
    //         //return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
    //         return response()->json(['errors' => ['current'=> ['New Password cannot be same as your current password']]], 422);
    //     }
    //     $validatedData = $request->validate([
    //         'old_password' => 'required',
    //         'new_password' => 'required|string|min:6|confirmed',
    //     ]);
    //     //Change Password
    //     $user = Auth::user();
    //     $user->password = Hash::make($request->get('new_password'));
    //     $user->save();
    //     return $user;
    // }
}
