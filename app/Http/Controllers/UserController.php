<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // to get the all data
    public function showUsers() {
        $users = DB::table('users')->get();

       if($users) {
        return view('allUsers', ['data' =>$users]);
       }
    }

    // this get the single data
    public function singleUser(string $id) {
        $user =DB::table('users')
                   ->where('id', $id)
                   ->get();
        if($user) {
            return view('singleUser', ['data' => $user]);
        }
    }

    // this is delete
    public function deleteUser(string $id) {
        $user = DB::table('users')
                    ->where('id', $id)
                    ->delete();
        if($user) {
            return redirect()->route('home');
        }
    }

    // add user
    public function addUser(Request $req) {
        $user =DB::table('users')
                   ->insert([
                        'name' => $req->name,
                        'email' => $req->email,
                        'age' => $req->age,
                        'city' => $req->city,
                   ]);

         return redirect()->route('home');
    }
}
