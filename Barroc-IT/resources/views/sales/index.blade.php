@extends('layouts/salesMaster')

@section('content')
        <form class="search" action="">
            <input class="search-button" type="button" name="search">
            <input class="search-input" type="text" name="search" placeholder="Search...">
        </form>

    </div>
</header>
<div class="main-content">
    <div class="active">
        <div class="container">
            <h2><span class="title-green">Active</span> Customers</h2>
            <div class="space-between">
                <table class="sales-active" cellspacing="0" cellpadding="0">
                    <tr class="space-between title-table">
                        <td class="table-sizer2">Name</td>
                        <td>Customer number</td>
                        <td>Status</td>
                        <td></td>
                        <td></td>
                    </tr>
                    @foreach($customersA as $customerA)
                        <tr class="space-between showinfo4 item-js4"
                            data-first-name4="{{$customerA->firstName}}"
                            data-last-name4="{{$customerA->lastName}}"
                            data-customer-nr4="{{$customerA->id}}"
                            data-phone-nr4="{{$customerA->cellPhone}}"
                            data-email4="{{$customerA->email}}"
                            data-active4="{{$customerA->isActive}}"
                            data-status4="{{$customerA->status}}"
                            data-company4="{{$customerA->store->companyName}}"
                            data-adress4="{{$customerA->store->adress}}"
                            data-postal4="{{$customerA->store->zipcode}}"
                            data-country4="{{$customerA->store->country}}"
                        >
                            <td class="table-sizer">{{$customerA->lastName}}, {{$customerA->firstName}}</td>
                            <td>{{$customerA->id}}</td>
                            <td>{{$customerA->status}}</td>
                            <td>
                                <form method="GET" action="{{action('salesController@edit', $customerA->id)}}">
                                    {{csrf_field()}}
                                    <input type="submit" value="Edit">
                                </form>
                            </td>
                            <td>
                                <form method="GET" action="{{action('ordersController@index')}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="companyId" value="{{$customerA->companyNr}}">
                                    <input type="submit" value="Add Order">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                <div class="sales-information-4 flex" id="pop-up4">
                    <ul>
                        <li>First Name:</li>
                        <li>Last Name:</li>
                        <li>Customer Number:</li>
                        <li>Company name:</li>
                        <li>Email:</li>
                        <li>Phone Number:</li>
                        <li>Address:</li>
                        <li>Postal Code:</li>
                        <li>Country: </li>
                        <li>Description:</li>

                    </ul>
                    <ul>
                        <li id="firstN4"></li>
                        <li id="lastN4"></li>
                        <li id="customerNr4"></li>
                        <li id="companyname"></li>
                        <li id="email4"></li>
                        <li id="phone4"></li>
                        <li id="adress4"></li>
                        <li id="postal4"></li>
                        <li id="country"></li>
                        <li id="desc4"></li>
                    </ul>
                </div>
            </div>
            {{$customersA->Links()}}
        </div>
    </div>
    <div class="inactive">
        <div class="container">
            <h2><span class="title-red">Inactive</span> Customers</h2>
            <div class="space-between">
                <table class="sales-active" cellspacing="0" cellpadding="0">
                    <tr class="space-between title-table">
                        <td class="table-sizer2">Name</td>
                        <td>Customer number</td>
                        <td>Status</td>
                    </tr>
                    @foreach($customersI as $customerI)
                        <tr class="space-between showinfo5 item-js5"
                            data-first-name5="{{$customerI->firstName}}"
                            data-last-name5="{{$customerI->lastName}}"
                            data-customer-nr5="{{$customerI->id}}"
                            data-phone-nr5="{{$customerI->cellPhone}}"
                            data-email5="{{$customerI->email}}"
                            data-active5="{{$customerI->isActive}}"
                            data-status5="{{$customerI->status}}"
                            data-company5="{{$customerI->store->companyName}}"
                            data-adress5="{{$customerI->store->adress}}"
                            data-postal5="{{$customerI->store->zipcode}}"
                            data-country5="{{$customerI->store->country}}"
                        >
                            <td class="table-sizer">{{$customerI->lastName}}, {{$customerI->firstName}}</td>
                            <td>{{$customerI->id}}</td>
                            <td>{{$customerI->status}}</td>
                        </tr>
                    @endforeach
                </table>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="sales-information-5 flex" id="pop-up5">
                    <ul>
                        <li>First Name:</li>
                        <li>Last Name:</li>
                        <li>Customer Number:</li>
                        <li>Company name:</li>
                        <li>Email:</li>
                        <li>Phone Number:</li>
                        <li>Address:</li>
                        <li>Postal Code:</li>
                        <li>Country: </li>
                        <li>Description:</li>

                    </ul>
                    <ul>
                        <li id="firstN5"></li>
                        <li id="lastN5"></li>
                        <li id="customerNr5"></li>
                        <li id="companyname5"></li>
                        <li id="email5"></li>
                        <li id="phone5"></li>
                        <li id="adress5"></li>
                        <li id="postal5"></li>
                        <li id="country5"></li>
                        <li id="desc5"></li>
                    </ul>
                </div>
            </div>
            {{$customersI->Links()}}
        </div>
    </div>
</div>
@endsection