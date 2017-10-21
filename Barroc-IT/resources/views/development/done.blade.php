@extends('layouts.devMaster')
@section('title')
    Closed Projects
@endsection
@section('content')
    <div class="main-content">
        <div class="active">
            <div class="container">
                <h2><span class="title-red">Closed</span> Projects</h2>

                <table class="sales-active" cellspacing="0" cellpadding="0">
                    <tr class="space-between title-table">
                        <td style="width: 20%" >Order number</td>
                        <td style="width: 55%;margin-right: 10px;">Products</td>
                        <td style="width: 15%">Price</td>
                    </tr>
                    @foreach($orders as $order)
                        <tr class="space-between">
                            <td style="width: 20%">{{$order->id}}</td>
                            <td style="width: 55%; margin-right: 10px;">{{$order->products}}</td>
                            <td style="width: 15%">{{$order->price}}</td>
                        </tr>
                    @endforeach
                </table>
                {{$orders->Links()}}
            </div>
        </div>
    </div>
@endsection