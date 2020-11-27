<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $user = User::all();
    }
    public function create(){
        return view('users.create');
    }
    public function store(Request $request){
        return view();
    }
    public function edit(Request $request , $id){

    }
    public function destroy(){

    }
}
