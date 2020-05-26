<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function uploadAvatar(Request $request)
    {
        if ($request->hasFile('image')) {
            User::uploadAvatar($request->image);
            // $request->session()->flash('message', 'The avatar is successfully uploaded.');
            return redirect()->back()->with('message', 'The avatar is successfully uploaded.');
        }
        // $request->session()->flash('error', 'The avatar image is not uploaded successfuly.');
        return redirect()->back()->with('error', 'The avatar image is not uploaded successfuly.');
    }


    public function index()
    {
        // $data = [
        //     'name' => 'Mansyur',
        //     'email' => 'nyux@nyux1.com',
        //     'password' => 'password',
        // ];

        // User::create($data);

        // User::where('id', 3)->delete();

        // DB::insert('insert into users (name, email, password) values(?, ?, ?)', [
        //     'nyux', 'nyux14@gmail.com','nyux',
        // ]);

        $users = User::all();
        return $users;

        return view('home');
    }
}
