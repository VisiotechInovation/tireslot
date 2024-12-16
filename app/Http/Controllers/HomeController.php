<?php

namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
  public function redirect()
  {
    $usertype = Auth::user()->usertype;
    if ($usertype == '1') {
      return view('admin.home');
    } else {
      return route('home');
    }
  }

  public function home()
  {

    $preload = null;
    return view('store.home', compact('preload'));
  }
}