@extends('layouts/salesMaster')

@section('content')
<div class="main-content">
    <div class="add-project">
        <div class="container">
            <h2>Order for {{$company->companyName}}</h2>
            <form method="POST" action="{{action('ordersController@store', $company->companyNr)}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="companyId"></label>
                    <input type="hidden" name="companyId" value="{{$company->companyNr}}">
                </div>
                <div class="form-group">
                    <label for="companyId"></label>
                    <input type="hidden" name="customerId" value="{{$customerId}}">
                </div>
                <div class="form-group">
                    <label for="companyId"></label>
                    <input type="hidden" name="companyId" value="{{$company->companyNr}}">
                </div>
                <div class="form-group">
                    <label for="description">description</label>
                    <textarea type="text" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price">
                </div>
                <input type="submit" value="Create Order">
            </form>
        </div>

    </div>
</div>
@endsection