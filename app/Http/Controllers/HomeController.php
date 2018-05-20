<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User as User;
use App\Company as Company;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $users = User::all();
        $users = User::with('companies')->get();
        $companies = Company::all();
        $products = \App\Product::all();
//        $companies = Company::with('users')->get();
        
//        echo "<pre>";
//        print_r($users[0]->companies);die();

        return view('home', [
            'users' => $users,
            'companies' => $companies,
            'products' => $products
        ]);
    }
}
