@extends('layouts.devMaster')
@section('title')
    Home
@endsection
@section('content')
    <div class="main-content">
        <div class="active">
            <div class="container">
                @if (session('status'))
                    <div class="alert alert-success">
                        <h3>{{ session('status') }}</h3>
                    </div>
                @endif
                <h2><span class="title-red">New</span> Projects</h2>

                <table class="sales-active" cellspacing="0" cellpadding="0">
                    <tr class="space-between title-table">
                        <td style="width: 15%" >Order number</td>
                        <td style="width: 55%;margin-right: 10px;">Products</td>
                        <td style="width: 15%">Price</td>
                        <td style="width: 15%">Start Working</td>
                    </tr>
                    @foreach($ordersN as $orderN)
                        <tr class="space-between">
                            <td style="width: 15%">{{$orderN->id}}</td>
                            <td style="width: 55%; margin-right: 10px;">{{$orderN->products}}</td>
                            <td style="width: 15%">{{$orderN->price}}</td>
                            <td style="width: 15%">
                                <form action="{{action('developmentController@update', $orderN->id)}}" method="POST">
                                    {{csrf_field()}}
                                    {{method_field('PUT')}}
                                    <input class="button-nice" type="submit" value="Start working!">
                                    <input type="hidden" name="adjust" value="{{$orderN->id}}">
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </table>
                {{$ordersN->Links()}}
            </div>
        </div>
        <div class="ongoing">
            <div class="container">
                @if (session('succes'))
                    <div class="alert alert-success">
                        <h3>{{ session('succes') }}</h3>
                    </div>
                @endif
                <h2><span class="title-green">Ongoing</span> Projects</h2>
                <table class="sales-active" cellspacing="0" cellpadding="0">
                    <tr class="space-between title-table">
                        <td style="width: 15%" >Order number</td>
                        <td style="width: 55%;margin-right: 10px;">Products</td>
                        <td style="width: 15%">Price</td>
                        <td style="width: 15%">Finish Working</td>
                    </tr>
                    @foreach($ordersO as $orderO)
                        <tr class="space-between">
                            <td style="width: 15%">{{$orderO->id}}</td>
                            <td style="width: 55%; margin-right: 10px;">{{$orderO->products}}</td>
                            <td style="width: 15%">{{$orderO->price}}</td>
                            <td style="width: 15%">
                                <form action="{{action('developmentController@finish')}}" method="GET">
                                    {{csrf_field()}}
                                    <input type="radio" name="finish" required><b style="font-size: 13px">Finished?</b>
                                    <input class="button-nice" type="submit" value="Finish Working!">
                                    <input type="hidden" name="adjust" value="{{$orderO->id}}">
                                    <input type="hidden" name="companyNr" value="{{$orderO->companyNr}}">
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </table>
                {{$ordersO->Links()}}
            </div>
            <br>
        </div>
    </div>
@endsection