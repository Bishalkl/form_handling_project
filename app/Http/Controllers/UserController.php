<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // to get the all data
    public function showUsers() {
        $users = DB::table('users')->get();

       if($users->isEmpty()) {
        return response('<h1>No users found</h1>', 404);
       }
       return view('allUsers', ['data' => $users]);
    }


    // this get the single data
    public function singleUser(string $id) {
        $user =DB::table('users')
                   ->where('id', $id)
                   ->get();
        if(!$user) {
            return response('<h1>User not found</h1>', 404);
        }

        return view('singleUser', ['data' => $user]);
    }

    // this is delete
    public function deleteUser(string $id) {
       $user = DB::table('users')->where('id', $id)->first();
       if(!$user) {
            return response('<h1>User not found</h1>', 404);
       }

       $deleteRows = DB::table('users')->where('id', $id)->delete();
       return redirect()->route('home');
    }

    // add user
    public function addUser(Request $req) {
        $user = DB::table('users')
                   ->insert([
                        'name' => $req->name,
                        'email' => $req->email,
                        'age' => $req->age,
                        'city' => $req->city,
                   ]);

        if($user) {
            return redirect()->route('home');
        }
        return response('<h1>Operation is unsuccessful</h1>', 400);
    }

    //update page
    public function updatepage(string $id) {
        // $user = DB::table('users')->where('id', $id)->get();
        $user = DB::table('users')->find($id);
        return view('updateUser', ['data' => $user]);
    }

    // update user
    public function updateUser(Request $req, $id) {
        $update = DB::table('users')
                            ->where('id', $id)
                            ->update([

                                    'name' => $req->name,
                                    'email' => $req->email,
                                    'age' => $req->age,
                                    'city' => $req->city,
                                ]);

        if(!$update) {
                response('<h1>Operation is unsuccessful</h1>', 400);
        }

        return redirect()->route('home');

    }

}
