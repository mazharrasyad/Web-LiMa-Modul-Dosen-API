<?php

namespace App\Http\Controllers;
use App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        // $getPost = User::all();
 
        // $out = [
        //     "message" => "list_post",
        //     "results" => $getPost
        // ];
 
        // return response()->json($out, 200);

        return array('results' => User::all());
    }
}
