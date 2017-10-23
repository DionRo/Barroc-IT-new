<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ordersController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = 0;
        $finance = 1;
        $sales = 2;
        $development = 3;

        if (Auth::user()->adminLevel == $admin)
        {
            return view('admin/index');
        }
        elseif(Auth::user()->adminLevel == $finance)
        {

        }
        elseif(Auth::user()->adminLevel == $sales)
        {

            $companyId = $_GET['companyId'];

            $customerId = $_GET['customerId'];

            $company = \App\Company::select('*')
                ->where('companyNr', '=', $companyId)
                ->first();

            return view('sales/orders')
                ->with('company', $company)
                ->with('customerId', $customerId);
        }
        elseif(Auth::user()->adminLevel == $development)
        {

        }
        else
        {

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'companyId' => 'required|integer',
            'customerId' => 'required|integer',
            'description' => 'required|string',
            'price' => 'required'
        ]);

        $order = new \App\Orders();
        $customer = \App\Customers::find($request->customerId);

        $order->companyNr = $request->companyId;
        $order->products = $request->description;
        $order->price = $request->price;

        $customer->isActive = '0';

        $order->save();
        $customer->save();

        return redirect('sales');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
