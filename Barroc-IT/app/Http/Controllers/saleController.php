<?php

namespace App\Http\Controllers;

use App\customers;
use Illuminate\Http\Request;
use Faker\Factory;
use Illuminate\Support\Facades\Auth;

class saleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = 2 ;
        if (Auth::user()->adminLevel == $sales)
        {

            $customers = \App\Customers::All();

            return view('sales/index')
                ->with('customers', $customers);

        }
        else
        {

            $admin = 0;
            $finance = 1;
            $development = 3;

            if (Auth::user()->adminLevel == $admin) {
                return redirect(action('adminpanelController@index'));
            } elseif (Auth::user()->adminLevel == $finance) {
                return redirect(action('financeController@index'));
            } elseif (Auth::user()->adminLevel == $sales) {
                return redirect(action('salesController@index'));
            } elseif (Auth::user()->adminLevel == $development) {
                return redirect(action('developmentController@index'));
            } else {
                return view('auth/login');
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $sales = 2 ;
        if (Auth::user()->adminLevel == $sales)
        {
            return view('sales/add');
        }
        else
        {

            $admin = 0;
            $finance = 1;
            $development = 3;

            if (Auth::user()->adminLevel == $admin) {
                return redirect(action('adminpanelController@index'));
            } elseif (Auth::user()->adminLevel == $finance) {
                return redirect(action('financeController@index'));
            } elseif (Auth::user()->adminLevel == $sales) {
                return redirect(action('salesController@index'));
            } elseif (Auth::user()->adminLevel == $development) {
                return redirect(action('developmentController@index'));
            } else {
                return view('auth/login');
            }
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
        $sales = 2;
        if (Auth::user()->adminLevel == $sales) {
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

            if (isset($request->middleName)) {
                $this->validate($request, [
                    'middleName' => 'string'
                ]);
                $customer->middleName = $request->middleName;
            }

            $customer->address = $request->address;
            $customer->zipCode = $request->zipCode;
            $customer->email = $request->email;
            $customer->cellPhone = $request->phoneNumber;

            if ($request->gender == 'female') {
                $customer->gender = 0;
            }
            if ($request->gender == 'male') {
                $customer->gender = 1;
            }

            $customer->description = $request->description;
            $customer->save();

            return redirect('projects');
        }
        else
        {
            $admin = 0;
            $finance = 1;
            $development = 3;

            if (Auth::user()->adminLevel == $admin) {
                return redirect(action('adminpanelController@index'));
            } elseif (Auth::user()->adminLevel == $finance) {
                return redirect(action('financeController@index'));
            } elseif (Auth::user()->adminLevel == $sales) {
                return redirect(action('salesController@index'));
            } elseif (Auth::user()->adminLevel == $development) {
                return redirect(action('developmentController@index'));
            } else {
                return view('auth/login');
            }
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
        $sales = 2 ;
        if (Auth::user()->adminLevel == $sales)
        {
            return 'You are on the show page from the @ sales section';
        }
        else
        {
            $admin = 0;
            $finance = 1;
            $development = 3;

            if (Auth::user()->adminLevel == $admin) {
                return redirect(action('adminpanelController@index'));
            } elseif (Auth::user()->adminLevel == $finance) {
                return redirect(action('financeController@index'));
            } elseif (Auth::user()->adminLevel == $sales) {
                return redirect(action('salesController@index'));
            } elseif (Auth::user()->adminLevel == $development) {
                return redirect(action('developmentController@index'));
            } else {
                return view('auth/login');
            }
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
        $sales = 2 ;
        if (Auth::user()->adminLevel == $sales)
        {
            return view('sales/edit');
        }
        else
        {
            $admin = 0;
            $finance = 1;
            $development = 3;

            if (Auth::user()->adminLevel == $admin) {
                return redirect(action('adminpanelController@index'));
            } elseif (Auth::user()->adminLevel == $finance) {
                return redirect(action('financeController@index'));
            } elseif (Auth::user()->adminLevel == $sales) {
                return redirect(action('salesController@index'));
            } elseif (Auth::user()->adminLevel == $development) {
                return redirect(action('developmentController@index'));
            } else {
                return view('auth/login');
            }
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
        $sales = 2 ;
        if (Auth::user()->adminLevel == $sales)
        {
            return 'You are on the update page from the @ sales section';
        }
        else
        {
            $admin = 0;
            $finance = 1;
            $development = 3;

            if (Auth::user()->adminLevel == $admin) {
                return redirect(action('adminpanelController@index'));
            } elseif (Auth::user()->adminLevel == $finance) {
                return redirect(action('financeController@index'));
            } elseif (Auth::user()->adminLevel == $sales) {
                return redirect(action('salesController@index'));
            } elseif (Auth::user()->adminLevel == $development) {
                return redirect(action('developmentController@index'));
            } else {
                return view('auth/login');
            }
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
        $sales = 2 ;
        if (Auth::user()->adminLevel == $sales)
        {
            return 'You are on the destroy page from the @ sales section';
        }
        else
        {
            $admin = 0;
            $finance = 1;
            $development = 3;

            if (Auth::user()->adminLevel == $admin) {
                return redirect(action('adminpanelController@index'));
            } elseif (Auth::user()->adminLevel == $finance) {
                return redirect(action('financeController@index'));
            } elseif (Auth::user()->adminLevel == $sales) {
                return redirect(action('salesController@index'));
            } elseif (Auth::user()->adminLevel == $development) {
                return redirect(action('developmentController@index'));
            } else {
                return view('auth/login');
            }
        }
    }
}

