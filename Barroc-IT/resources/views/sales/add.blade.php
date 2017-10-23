@extends('layouts/salesMaster')

@section('content')

<div class="main-content">
    <div class="add-customers">
        <div class="container flex align-center flex-column">
            <h2>Add Customers</h2>
            {{$message = session('message')}}
            <form method="post" class="flex flex-column" action="{{action('salesController@store')}}">
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
                    <div class="flex">
                        <label for="company">Company</label>
                        <input type="text" value="{{old('company')}}" name="company">
                    </div>
                </div>
                    @if(isset($message))
                    <div class="company-info">
                        <div class="form-group">
                            <label for="companyAddress">Company address</label>
                            <input class="company-input" type="text" value="{{old('companyAddress')}}" name="companyAddress">
                        </div>
                        <div class="form-group">
                            <label for="companyZipcode">Company Zipcode</label>
                            <input class="company-input" type="text" value="{{old('companyZipcode')}}" name="companyZipcode">
                        </div>
                        <div class="form-group">
                            <label for="companyCountry">Company Country</label>
                            <input class="company-input" type="text" value="{{old('companyCountry')}}" name="companyCountry">
                        </div>
                    </div>
                    @endif
                <div class="form-group flex">
                    <label for="email">Email</label>
                    <input type="text" value="{{old('email')}}" name="email" required>
                </div>
                <div class="form-group flex">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="text" value="{{old('phoneNumber')}}" name="phoneNumber" required>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender">
                        @for($i = 0; $i < count($genders); $i++)
                            <option value="{{$i}}" @if(old('gender') == $i) selected="selected" @endif>{{$genders[$i]}}</option>
                        @endfor
                    </select>
                </div>
                <input class="submit" type="submit" value="Add">
            </form>
        </div>
    </div>
</div>

@endsection