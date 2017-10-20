<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Faker\Factory;
use App\Orders;
use App\Company;
use App\customers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class developmentController extends Controller
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

        $development = 3 ;
        if (Auth::user()->adminLevel == $development)
        {
            $ordersN =  DB::table('tbl_orders')
                ->select(DB::raw('*'))
                ->where('isDone', '=', 1)
                ->paginate(10);

            $ordersO =  DB::table('tbl_orders')
                ->select(DB::raw('*'))
                ->where('isDone', '=', 2)
                ->paginate(10);



            return view('development/index')
                ->with('ordersN', $ordersN)
                ->with('ordersO', $ordersO);
        }
        else
        {

            $admin = 0;
            $finance = 1;
            $sales = 2;

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
        $development = 3 ;
        if (Auth::user()->adminLevel == $development)
        {

        }
        else
        {

            $admin = 0;
            $finance = 1;
            $sales = 2;

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
        $development = 3 ;
        if (Auth::user()->adminLevel == $development)
        {
            return 'You are on the store page from the @ development section';
        }
        else
        {

            $admin = 0;
            $finance = 1;
            $sales = 2;

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
        $development = 3 ;
        if (Auth::user()->adminLevel == $development)
        {
            $orders =  DB::table('tbl_orders')
                ->select(DB::raw('*'))
                ->where('isDone', '=', 3)
                ->paginate(10);

            return view('development/done')
                ->with('orders', $orders);
        }
        else
        {

            $admin = 0;
            $finance = 1;
            $sales = 2;

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
        $development = 3 ;
        if (Auth::user()->adminLevel == $development)
        {
            return view('development/edit');
        }
        else
        {

            $admin = 0;
            $finance = 1;
            $sales = 2;

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
        $development = 3 ;
        if (Auth::user()->adminLevel == $development)
        {
            $update = \App\Orders::find($id);

            $update->isDone = 2;
            $update->save();
            return redirect('development')->with('status', 'Project has been started');
        }
        else
        {

            $admin = 0;
            $finance = 1;
            $sales = 2;

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
        $development = 3 ;
        if (Auth::user()->adminLevel == $development)
        {
        }
        else
        {
            $admin = 0;
            $finance = 1;
            $sales = 2;

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
    public function done()
    {
        $development = 3 ;
        if (Auth::user()->adminLevel == $development)
        {
            $orders =  DB::table('tbl_orders')
                ->select(DB::raw('*'))
                ->where('isDone', '=', 3)
                ->paginate(10);

            return view('development/done')
                ->with('orders', $orders);
        }
        else
        {
            $admin = 0;
            $finance = 1;
            $sales = 2;

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
        $development = 3 ;
        if (Auth::user()->adminLevel == $development)
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

            $updateOrder = \App\Orders::find($id);
            $updateOrder->isDone = 3;
            $updateOrder->save();

            return redirect('development')->with('succes', 'Order has been finished! Finance can now prepare payment');
        }
        else
        {
            $admin = 0;
            $finance = 1;
            $sales = 2;

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
