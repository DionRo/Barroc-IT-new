@extends('layouts/adminMaster')

@section('title')
    Adjust staffmember: {{$staff->lastName}}, {{$staff->firstName}}
@endsection

@section('content')
    <div class="main-content">
        <div class="container divide-light">
            <div class="right">
                <div class="flex">
                    <form action="{{action('adminpanelController@update', $staff->id)}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                        <select class="select" name="department">
                            <option value="100">SELECT YOUR DEPARTMENT</option>
                            <option value="0">ADMIN</option>
                            <option value="1">FINANCE</option>
                            <option value="2">SALES</option>
                            <option value="3">DEVELOPMENT</option>
                        </select>
                        <div class="form-group">
                            <label for="first"><b>Firstname</b></label><br>
                            <input class="text" type="text" name="first" value="{{$staff->firstName}}" >
                        </div>

                        <div class="form-group">
                            <label for="last"><b>Lastname</b></label><br>
                            <input class="text" type="text" name="last" value="{{$staff->lastName}}">
                        </div>


                        <div class="form-group">
                            <label for="email"><b>Email</b></label><br>
                            <input class="text" type="text" name="email" value="{{$staff->email}}">
                        </div>

                        <div class="form-group">
                            <label for="adress"><b>Adress</b></label><br>
                            <input class="text" type="text" name="adress" value="{{$staff->adress}}">
                        </div>

                        <div class="form-group">
                            <label for="zipcode"><b>Zipcode</b></label><br>
                            <input class="text" type="text" name="zipcode" value="{{$staff->zipcode}}">
                        </div>

                        <div class="form-group">
                            <label for="country"><b>Country</b></label><br>
                            <input class="text" type="text" name="country" value="{{$staff->country}}">
                        </div>

                        <div class="form-group">
                            <input  class="submit" type="submit" value="ADJUST USER">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection