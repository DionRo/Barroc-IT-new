@extends('layouts.devMaster')
@section('title')
    Home
@endsection
@section('content')
    <div class="main-content">
        <div class="active">
            <div class="container">
                <h2><span class="title-green">Active</span> Customers</h2>
                <div class="space-between">
                    <table class="sales-active" cellspacing="0" cellpadding="0">
                        <tr class="space-between title-table">
                            <td class="table-sizer">Name</td>
                            <td>Company number</td>
                            <td>Status</td>
                        </tr>
                        @foreach($customers as $customer)
                            @if($customer->status == 'Active')
                                <tr class="space-between showinfo item-js"
                                    data-first-name="{{$customer->firstName}}"
                                    data-last-name="{{$customer->lastName}}"
                                    data-customer-nr="{{$customer->id}}"
                                    data-company-nr="{{$customer->companyNr}}"
                                    data-status="{{$customer->status}}"
                                    data-order-nr="{{$orders->orderNr}}"
                                    data-product="{{$orders->product}}"
                                >
                                    <td class="table-sizer">{{$customer->lastName}}, {{$customer->firstName}}</td>
                                    <td>{{$customer->companyNr}}</td>
                                    <td>{{$customer->status}}</td>
                                </tr>
                            @endif
                        @endforeach
                    </table>
                    <div class="sales-information flex" id="pop-up">
                        <ul>
                            <li>First Name:</li>
                            <li>Last Name:</li>
                            <li>Customer Nr:</li>
                            <li>Status:</li>
                            <li>Order Nr:</li>
                            <li>Product:</li>
                        </ul>
                        <ul>
                            <li>First Name</li>
                            <li>Last Name</li>
                            <li>Customer Number</li>
                            <li>Status</li>
                            <li>Order Number</li>
                            <li>Product</li>
                        </ul>
                    </div>
                </div>
                {{$customers->Links()}}
            </div>
        </div>
        <div class="inactive">
            <div class="container">
                <h2><span class="title-orange">Hold</span> Customers</h2>
                <div class="space-between">
                    <table class="sales-active" cellspacing="0" cellpadding="0">
                        <tr class="space-between title-table">
                            <td class="table-sizer">Name</td>
                            <td>Company number</td>
                            <td>Status</td>
                        </tr>
                        @foreach($customers as $customer)
                            @if($customer->status == 'On Hold')
                                <tr class="space-between showholdinfo item-js"
                                    data-first-name="{{$customer->firstName}}"
                                    data-last-name="{{$customer->lastName}}"
                                    data-customer-nr="{{$customer->id}}"
                                    data-company-nr="{{$customer->companyNr}}"
                                    data-status="{{$customer->status}}"
                                    data-order-nr="{{$customer->orderNr}}"
                                    data-product="{{$customer->product}}"
                                >
                                    <td class="table-sizer">{{$customer->lastName}}, {{$customer->firstName}}</td>
                                    <td>{{$customer->companyNr}}</td>
                                    <td>{{$customer->status}}</td>
                                </tr>
                            @endif
                        @endforeach
                    </table>
                    <div class="sales-holdinformation flex" id="pop-up">
                        <ul>
                            <li>First Name:</li>
                            <li>Last Name:</li>
                            <li>Customer Nr:</li>
                            <li>Status:</li>
                            <li>Order Nr:</li>
                            <li>Product:</li>
                        </ul>
                        <ul>
                            <li>First Name</li>
                            <li>Last Name</li>
                            <li>Customer Number</li>
                            <li>Status</li>
                            <li>Order Number</li>
                            <li>Product</li>
                        </ul>
                    </div>
                </div>
            </div>
            {{$customers->Links()}}
        </div>
    </div>
@endsection