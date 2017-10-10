<?php

namespace App\Http\Controllers;

use App\customers;
use Illuminate\Http\Request;
use Faker\Factory;

class saleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = \App\Customers::All();

        return view('sales/index')
            ->with('customers', $customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sales/add');
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
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'company' => 'required|string',
            'email' => 'required|string',
            'phoneNumber' => 'required',
            'address' => 'required',
            'zipCode' => 'required',
            'description' => 'string',
            'gender' => ['male', 'female'],
            'in_array' => 'gender'
        ]);

        $customer = new \App\Customer();

        $customer->firstName = $request->firstName;
        $customer->lastName = $request->lastName;

            $companyId = DB::table('company')
                ->select('id')
                ->where('companyName', '==', $request->company)
                ->get();

        if (isset($request->middleName)){
            $this->validate($request, [
                'middleName' => 'string'
            ]);
            $customer->middleName = $request->middleName;
        }

        $customer->address = $request->address;
        $customer->zipCode = $request->zipCode;
        $customer->email = $request->email;
        $customer->cellPhone = $request->phoneNumber;

        if ($request->gender == 'female'){
            $customer->gender = 0;
        }
        if ($request->gender == 'male'){
            $customer->gender = 1;
        }

        $customer->description = $request->description;
        $customer->save();

        return redirect('projects');
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
        return view('sales/edit');
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
