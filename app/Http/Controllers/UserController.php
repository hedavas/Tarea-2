<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        if(request()->has('empty')){
            $users = [];
        }else{
            $users = ["David Cruz","Henry Ag","Lisseth Ramirez"];
        }
        return view('users.index',compact('users'));
    }
    public function show($id){
        return view('users.show',compact('id'));
    }
    public function create(){
        return "Crear un usuario";
    }   
}
