<?php

namespace App\Http\Controllers;

use App\customers;
use Illuminate\Http\Request;
use Faker\Factory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;

class salesController extends Controller
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
        $sales = 2 ;
        if (Auth::user()->adminLevel == $sales)
        {
            $customersA = \App\Customers::whereHas('store', function ($query)
            {$query->where('isActive', '=', 0);
            })->paginate(10);

            $customersI = \App\Customers::whereHas('store', function ($query)
            {$query->where('isActive', '=', 1);
            })->paginate(10);


            return view('sales/index')
                ->with('customersA' , $customersA)
                ->with('customersI', $customersI);



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
            $genders = ['Female', 'Male'];

            return view('sales/add')
                ->with('genders', $genders);
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
                'gender' => 'between:0,1'
            ]);

            $customer = new \App\Customers();
            $finance = new \App\Finance();

            $customer->firstName = $request->firstName;
            $customer->lastName = $request->lastName;
            $customer->email = $request->email;
            $customer->cellPhone = $request->phoneNumber;
            $customer->gender = $request->gender;

            $company = new \App\Company();
            $companyName = $company::where('companyName', '=', $request->company)->first();

            if(isset($request->companyAddress) || isset($request->companyZipcode) || isset($request->comanyCountry)){
                $this->validate($request, [
                    'companyAddress' => 'required',
                    'companyZipcode' => 'required',
                    'companyCountry' => 'required'
                ]);
                $company->companyName = $request->company;
                $company->adress = $request->companyAddress;
                $company->zipcode = $request->companyZipcode;
                $company->country = $request->companyCountry;

                $company->save();

                $companyId = $company::select('companyNr')
                    ->where('companyName', '=', $request->company)
                    ->first()
                    ->companyNr;

                $customer->companyNr = $companyId;

                $customer->save();

                $finance->companyNr = $companyId;
                $finance->save();

                return redirect('sales');
            }
            else{
                if ($companyName == null) {
                    return redirect()
                        ->back()
                        ->withInput()
                        ->with('message', '');
                }
                else{
                    $companyId = $company::select('companyNr')
                        ->where('companyName', '=', $request->company)
                        ->first()
                        ->companyNr;

                    $customer->companyNr = $companyId;
                    $customer->save();

                    return redirect('sales');
                }
            }
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
            $customer = \App\Customers::find($id);
            $genders = ['Female', 'Male'];

            return view('sales/edit')
                ->with('customer', $customer)
                ->with('genders', $genders);
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

