@extends('layouts/salesMaster')

@section('content')
</div>
</header>
<div class="main-content">
    <div class="add-customers">
        <div class="container flex align-center flex-column">
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
                <div class="form-group flex">
                    <label for="description">Description</label>
                    <textarea type="text" name="description"></textarea>
                </div>
                <div class="form-group flex">
                    <label for="price">Price</label>
                    <input type="number" name="price">
                </div>
                <input class="submit" type="submit" value="Create Order">
            </form>
        </div>

    </div>
</div>
@endsection