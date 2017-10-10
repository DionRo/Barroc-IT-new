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
                                <tr class="space-between showinfo">
                                    <td class="table-sizer">{{$customer->lastName}}, {{$customer->firstName}}</td>
                                    <td>{{$customer->companyNr}}</td>
                                    <td>{{$customer->status}}</td>
                                </tr>
                            @endif
                        @endforeach
                    </table>
                    <div class="sales-information flex">
                        <ul>
                            <li>First Name:</li>
                            <li>Last Name:</li>
                            <li>Customer Number:</li>
                            <li>Description:</li>
                            <li>BRK:</li>
                            <li>Credit:</li>
                            <li>Credit Ceiling:</li>
                        </ul>
                        <ul>
                            <li>First Name</li>
                            <li>Last Name</li>
                            <li>Customer Number</li>
                            <li>Description</li>
                            <li>Positive</li>
                            <li>€250,-</li>
                            <li>€500,-</li>
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
                                <tr class="space-between showinfo">
                                    <td class="table-sizer">{{$customer->lastName}}, {{$customer->firstName}}</td>
                                    <td>{{$customer->companyNr}}</td>
                                    <td>{{$customer->status}}</td>
                                </tr>
                            @endif
                        @endforeach
                    </table>
                    <div class="sales-information flex">
                        <ul>
                            <li>First Name:</li>
                            <li>Last Name:</li>
                            <li>Customer Number:</li>
                            <li>Description:</li>
                            <li>BRK:</li>
                            <li>Credit:</li>
                            <li>Credit Ceiling:</li>
                        </ul>
                        <ul>
                            <li>First Name</li>
                            <li>Last Name</li>
                            <li>Customer Number</li>
                            <li>Description</li>
                            <li>Positive</li>
                            <li>€250,-</li>
                            <li>€500,-</li>
                        </ul>
                    </div>
                </div>
                {{$customers->Links()}}
        </div>
    </div>
@endsection