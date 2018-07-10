<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Auth;

class UsersController extends Controller{
  public function index(){
    if (Auth::check()){
      if (Auth::user()->type==2)
        return view('users.adminhome');
      else if (Auth::user()->type==1)
        return view('users.userhome');
    }else
      return view('users.homegeral');
    }

  public function adminhome(){
    if (Auth::user()->type==2){
      return view('users.adminhome');
    }else{
      echo "<script type='text/javascript'>alert('Você não tem permissão para acessar essa página!');
        location.href ='/';
        </script>";
    }
  }
  public function userhome(){
    if (Auth::user()->type==1){
      return view('users.userhome');
    }else{
      echo "<script type='text/javascript'>alert('Você não tem permissão para acessar essa página!');
        location.href ='/';
        </script>";
    }
  }

  public function listaradmin(){
    $usuarios = User::all();
    return view('users.adminlistar')->with("usuarios", $usuarios);
  }
    //
}
