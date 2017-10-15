@extends('layouts/salesMaster')

@section('content')
</div>
</header>
<div class="main-content">
    <div class="container">
        <div class="add-customer">
            <h2>Add Customers</h2>
            {{$message = session('message')}}
            <form method="post" class="flex flex-column" action="/sales">
                {{csrf_field()}}
                <div class="form-group flex">
                    <label for="firstName">First Name</label>
                    <input type="text" value="{{old('firstName')}}" name="firstName" required>
                </div>
                <div class="form-group flex">
                    <label for="lastName">Last Name</label>
                    <input type="text" value="{{old('lastName')}}" name="lastName" required>
                </div>
                <div class="form-group">
                    <label for="company">Company</label>
                    <input type="text" value="{{old('company')}}" name="company">
                    @if(isset($message))
                    <div class="company-info">
                        <div class="form-group">
                            <label for="">Company address</label>
                            <input type="text" value="{{old('companyAddress')}}" name="companyAddress">
                        </div>
                        <div class="form-group">
                            <label for="">Company Zipcode</label>
                            <input type="text" value="{{old('companyZipcode')}}" name="companyZipcode">
                        </div>
                        <div class="form-group">
                            <label for="">Company Country</label>
                            <input type="text" value="{{old('companyCountry')}}" name="companyCountry">
                        </div>
                    </div>
                    @endif
                </div>
                <div class="form-group flex">
                    <label for="address">Address</label>
                    <input type="text" value="{{old('address')}}" name="address" required>
                </div>
                <div class="form-group flex">
                    <label for="zipCode">Zip Code</label>
                    <input type="text" value="{{old('zipCode')}}" name="zipCode" required>
                </div>
                <div class="form-group flex">
                    <label for="email">Email</label>
                    <input type="text" value="{{old('email')}}" name="email" required>
                </div>
                <div class="form-group flex">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="text" value="{{old('phoneNumber')}}" name="phoneNumber" required>
                </div>
                <div class="form-group">
                    <select name="gender" id="gender">
                        @for($i = 0; $i < count($genders); $i++)
                            <option value="{{$i}}" @if(old('gender') == $i) selected="selected" @endif>{{$genders[$i]}}</option>
                        @endfor
                    </select>
                </div>
                {{old('gender')}}
                <input class="submit" type="submit" value="Add">
            </form>
        </div>
    </div>
</div>

@endsection