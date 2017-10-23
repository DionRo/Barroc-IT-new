@extends('layouts/financeMaster')

@section('title')
    Adjust company
@endsection

@section('content')

<div class="main-content light">
    <div class="container">
        <div class="form-center flex-center">
            <h2>Adjusting customer {{$customer->firstName}},{{$customer->lastName}}</h2>
            <form action="{{action('financeController@update', $customer->company->companyNr)}}" method="POST">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="bkr"><b>BKR</b></label><br>
                    <select class="select" name="BKR">
                        <option value="">SELECT CORRECT BKR!</option>
                        <option value="0">BKR Positive</option>
                        <option value="1">BKR Unknown</option>
                        <option value="2">BKR Negative</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="credit"><b>Credit</b></label><br>
                    <input class="text" type="text" value="{{$customer->company->credit}}" name="credit">
                </div>

                <div class="form-group">
                    <label for="ceiling"><b>CreditCeiling</b></label></br>
                    <input class="text" type="text" value="{{$customer->company->creditCeiling}}" name="ceiling">
                </div>
                <input type="hidden" value="{{$customer->company->companyNr}}" name="companyNr">
                <input class="submit" type="submit">
                {{method_field('PUT')}}
            </form>
        </div>
    </div>
</div>

@endsection