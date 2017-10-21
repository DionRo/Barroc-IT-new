@extends('layouts/adminMaster')
@section('title')
    Home
@endsection

@section('content')
    <div class="main-content">
        <div class="container divide-light">
            <div class="right">
                <h2>CURRENT USERS</h2>
                <div class="test">
                    @foreach ($staffs as $staff)
                        <ul class="product-item">
                            <form action="{{action('adminpanelController@edit', $staff->id)}}" method="GET">
                                {{csrf_field()}}
                                <input class="adjust" type="submit" value="adjust">
                                <input type="hidden" name="adjust" value="{{$staff->id}}">
                            </form>
                            <li class="li-content">
                            <li>{{ $staff->firstName}} {{ $staff->lastName}}</li>
                            </li>
                            <form action="{{action('adminpanelController@destroy', $staff->id)}}" method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <input type="hidden" name="delete" value="{{$staff->id}}">
                                <input class="delete" type="submit" value="delete">
                            </form>
                        </ul>
                    @endforeach
                        @if (session('succes'))
                            <div class="alert alert-success">
                                <h3>{{ session('succes') }}</h3>
                            </div>
                        @endif
                    {{$staffs->Links()}}
                </div>
            </div>
        </div>
    </div>
@endsection

