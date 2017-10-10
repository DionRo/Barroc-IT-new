<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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
        $admin = 0;
        $finance = 1;
        $sales = 2;
        $development = 3;

        if (Auth::user()->adminLevel == $admin) {
            return redirect(action('adminpanelController@index'));
        }
        elseif (Auth::user()->adminLevel == $finance)
        {
            return redirect(action('financeController@index'));
        }
        elseif (Auth::user()->adminLevel == $sales)
        {
            return redirect(action('salesController@index'));
        }
        elseif (Auth::user()->adminLevel == $development)
        {
            return redirect(action('developmentController@index'));
        }
        else
        {
            return view('home');
        }
    }
}
