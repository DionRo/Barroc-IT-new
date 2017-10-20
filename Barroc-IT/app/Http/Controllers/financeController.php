<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Faker\Factory;
use App\Finance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;




class financeController extends Controller
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
        $finance = 1 ;
        if (Auth::user()->adminLevel == $finance)
        {
            $customers = \App\Customers::whereHas('company', function ($query)
            {$query->where('BKR', '=', 0);
            })->paginate(10);

            $customersU = \App\Customers::whereHas('company', function ($query)
            {$query->where('BKR', '=', 1);
            })->paginate(10);

            $customersN = \App\Customers::whereHas('company', function ($query)
            {$query->where('BKR', '=', 2);
            })->paginate(10);

            $finance = \App\Finance::all();
            return view('finance/index')->with('finances', $finance)
                ->with('customers', $customers)
                ->with('customersU' , $customersU)
                ->with('customersN', $customersN);

        }
        else
        {
            $admin = 0;
            $sales = 2;
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
        $finance = 1;
        if (Auth::user()->adminLevel == $finance) {
            return 'You are on the create page from the @ finance section';
        }
        else
        {
            $admin = 0;
            $sales = 2;
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
        $finance = 1;
        if (Auth::user()->adminLevel == $finance) {
            return 'You are on the store page from the @ finance section';
        }
        else
        {
            $admin = 0;
            $sales = 2;
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
        $finance = 1 ;
        if (Auth::user()->adminLevel == $finance)
        {
        }
        else
        {
            $admin = 0;
            $sales = 2;
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
        $finance = 1 ;
        if (Auth::user()->adminLevel == $finance)
        {
            $customer = \App\Customers::find($id);

            $customers = \App\Customers::whereHas('company');
            return view('finance/adjust')
                ->with('customer' , $customer)
                ->with('test' , $customers);
        }
        else
        {
            $admin = 0;
            $sales = 2;
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
        $finance = 1 ;
        if (Auth::user()->adminLevel == $finance)
        {
            $customer = \App\Customers::find($id);
            $financeId = DB::table('tbl_finance')
            ->select('id')
            ->where([
                ['companyNr', '=', $customer->companyNr]])
            ->first()
            ->id;

            $update = \App\Finance::find($financeId);

            $update->BKR = $request->BKR;
            $update->credit = $request->credit;
            $update->creditCeiling = $request->ceiling;

            $update->save();


            return redirect('finance')->with('status', 'Customers Finance Has Been Updated');
        }
        else
        {
            $admin = 0;
            $sales = 2;
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
        $finance = 1 ;
        if (Auth::user()->adminLevel == $finance)
        {
            return 'You are on the destroy page from the @ finance section';
        }
        else
        {
            $admin = 0;
            $sales = 2;
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

    public function invoice()
    {
        $finance = 1;
        if (Auth::user()->adminLevel == $finance) {

           $orders =  DB::table('tbl_orders')
               ->select(DB::raw('*'))
               ->where('isDone', '=', 0)
               ->paginate(10);

           $ordersD =DB::table('tbl_orders')
               ->select(DB::raw('*'))
               ->where('isDone', '=', 3)
               ->paginate(10);

            return view('finance/invoice')
                ->with('orders', $orders)
                ->with('ordersD', $ordersD);
        }
        else
        {
            $admin = 0;
            $sales = 2;
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
    public function invoiceCheck()
    {
        $finance = 1;
        if (Auth::user()->adminLevel == $finance) {

            $id = $_GET['adjust'];
            $company = $_GET['companyNr'];


            $orders =  DB::table('tbl_orders')
                ->select(DB::raw('*'))
                ->where('id', '=', $id)
                ->get();

            $finance = DB::table('tbl_finance')
                ->select(DB::raw('*'))
                ->where('companyNr', '=', $company)
                ->get();

            $totalCredit = $orders[0]->price + $finance[0]->credit;

            if ($finance[0]->credit < $finance[0]->creditCeiling)
            {

                if ($totalCredit <= $finance[0]->creditCeiling)

                {
                    $financeId = DB::table('tbl_finance')
                        ->select('id')
                        ->where([
                            ['companyNr', '=', $company]])
                        ->first()
                        ->id;

                    $update = \App\Finance::find($financeId);
                    $update->credit = $orders[0]->price + $finance[0]->credit;
                    $update->save();

                    $updateOrder = \App\Orders::find($id);
                    $updateOrder->isDone = 1;
                    $updateOrder->save();



                    return redirect('invoice')->with('status', 'Invoice Has Been Uploaded');
                }
                else
                {
                    return redirect('invoice')->with('failure', 'Invoice upload has failed due creditceiling current CreditCeiling: $'
                        .$finance[0]->creditCeiling . ' CreditCeiling after invoice is ' . '$'. $totalCredit . ' You are not allowed to go over the creditceiling');
                }
            }
            return redirect('invoice')->with('failure', 'Invoice Upload Has Failed Due CreditCeiling current CreditCeiling: $'
                . $finance[0]->creditCeiling. ' After invoice add total credit becomes higher then current CreditCeiling $' .$totalCredit);

        }
        else
        {
            $admin = 0;
            $sales = 2;
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
    public function finish()
    {
        $finance = 1;
        if (Auth::user()->adminLevel == $finance)
        {
            $id = $_GET['adjust'];
            $company  = $_GET['companyNr'];


            $orders =  DB::table('tbl_orders')
                ->select(DB::raw('*'))
                ->where('id', '=', $id)
                ->get();

            $finance = DB::table('tbl_finance')
                ->select(DB::raw('*'))
                ->where('companyNr', '=', $company)
                ->get();


            $financeId = DB::table('tbl_finance')
                ->select('id')
                ->where([
                    ['companyNr', '=', $company]])
                ->first()
                ->id;

            $update = \App\Finance::find($financeId);
            $update->credit = $finance[0]->credit - $orders[0]->price ;
            $update->save();

            $updateOrder = \App\Orders::find($id);
            $updateOrder->isDone = 4;
            $updateOrder->save();

            return redirect('invoice')->with('payment', 'Order has been finished! Payment has been transfert');
        }
        else
        {
            $admin = 0;
            $sales = 2;
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
