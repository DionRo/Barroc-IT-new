@extends('layouts/salesMaster')

@section('content')
</div>
</header>
<div class="main-content">
    <div class="add-customers">
        <div class="container flex align-center flex-column">
            <h2>Edit: {{$customer->firstName}} {{$customer->lastName}}</h2>
            {{$message = session('message')}}
            <form method="post" class="flex flex-column" action="/sales">
                {{csrf_field()}}
                <div class="form-group flex">
                    <label for="firstName">First Name</label>
                    <input type="text" value="@if($message) {{old('firstName')}} @else {{$customer->firstName}} @endif" name="firstName" required>
                </div>
                <div class="form-group flex">
                    <label for="lastName">Last Name</label>
                    <input type="text" value="@if($message) {{old('lastName')}} @else {{$customer->lastName}} @endif" name="lastName" required>
                </div>
                <div class="form-group">
                    <div class="flex">
                        <label for="company">Company</label>
                        <input type="text" value="@if($message) {{old('company')}} @else {{$customer->store->companyName}} @endif" name="company">
                    </div>
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
                    <label for="email">Email</label>
                    <input type="text" value="@if($message) {{old('email')}} @else {{$customer->email}} @endif" name="email" required>
                </div>
                <div class="form-group flex">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="text" value="@if($message) {{old('phoneNumber')}} @else {{$customer->cellPhone}} @endif" name="phoneNumber" required>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="selecter" name="gender" id="gender">
                        @for($i = 0; $i < count($genders); $i++)
                            <option value="{{$i}}"
                            @if(isset($message))
                                @if(old('gender') == $i) selected="selected"
                                @endif
                            @else
                                 @if($customer->gender == $i) selected="selected"
                                 @endif
                            @endif>{{$genders[$i]}}</option>
                        @endfor
                    </select>
                </div>
                <input class="submit" type="submit" value="Edit">
            </form>
        </div>
    </div>
</div>
@endsection