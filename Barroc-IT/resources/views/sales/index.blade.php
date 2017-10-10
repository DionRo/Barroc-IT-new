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
                        <td>Name</td>
                        <td>Customer number</td>
                        <td>Status</td>
                    </tr>
                @foreach($customers as $customer)

                    <tr>
                        <td>{{$customer->firstName}} {{$customer->lastName}}</td>
                        <td>{{$customer->customerNr}}</td>
                        <td>{{$customer->status}}</td>
                    </tr>

                @endforeach
                </table>
                <div class="sales-information flex">
                    <ul>
                        <li>First Name:</li>
                        <li>Last Name:</li>
                        <li>Customer Number:</li>
                        <li>Email:</li>
                        <li>Phone Number:</li>
                        <li>Address:</li>
                        <li>Postal Code:</li>
                        <li>Description:</li>
                    </ul>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="inactive">
        <div class="container">
            <h2><span class="title-red">Inactive</span> Customers</h2>
            <div class="space-between">
                <div class="sales-information flex">
                    <ul>
                        <li>First Name:</li>
                        <li>Last Name:</li>
                        <li>Customer Number:</li>
                        <li>Email:</li>
                        <li>Phone Number:</li>
                        <li>Address:</li>
                        <li>Postal Code:</li>
                        <li>Description:</li>
                    </ul>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <table class="sales-active" cellspacing="0" cellpadding="0">
                    <tr class="space-between title-table">
                        <td>Name</td>
                        <td>Customer number</td>
                        <td>Status</td>
                    </tr>
                    <tr class="space-between">
                        <td>Name</td>
                        <td>Customer number</td>
                        <td>Status</td>
                    </tr>
                    <tr class="space-between">
                        <td>Name</td>
                        <td>Customer number</td>
                        <td>Status</td>
                    </tr>
                    <tr class="space-between">
                        <td>Name</td>
                        <td>Customer number</td>
                        <td>Status</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection