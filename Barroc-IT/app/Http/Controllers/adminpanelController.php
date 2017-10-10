<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Faker\Factory;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;



class adminpanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = 0 ;
        if (Auth::user()->adminLevel == $admin)
        {
            $staff = DB::table('users')->paginate(10);
            return view('admin/index', ['staffs' => $staff] );
        }else
        {
            return view('auth/login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admin = 0 ;
        if (Auth::user()->adminLevel == $admin)
        {
            return 'You are on the create page from the @ admin section';
        }else{
            return view('auth/login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admin = 0 ;
        if (Auth::user()->adminLevel == $admin)
        {
            return 'You are on the store page from the @ admin section';
        }else{
            return view('auth/login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = 0 ;
        if (Auth::user()->adminLevel == $admin)
        {
            return 'You are on the show page from the @ admin section';
        }else{
            return view('auth/login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = 0 ;
        if (Auth::user()->adminLevel == $admin)
        {
            return 'You are on the edit page from the @ admin section';
        }else{
            return view('auth/login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $admin = 0 ;
        if (Auth::user()->adminLevel == $admin)
        {
            return 'You are on the update page from the @ admin section';
        }else{
            return view('auth/login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = 0 ;
        if (Auth::user()->adminLevel == $admin)
        {
            return 'You are on the destroy page from the @ admin section';
        }else{
            return view('auth/login');
        }
    }
}
