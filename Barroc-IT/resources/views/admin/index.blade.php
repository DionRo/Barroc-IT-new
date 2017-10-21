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
                            <form action="adjust_form.php" method="post">
                                <input class="adjust" type="submit" value="adjust">
                                <input type="hidden" name="adjust" value="{$id}">
                            </form>
                            <li class="li-content">
                            <li>{{ $staff->firstName}} {{ $staff->lastName}}</li>
                            </li>
                            <form action="../app/delete_manager.php" method="post">
                                <input type="hidden" name="delete" value="{$id}">
                                <input class="delete" type="submit" value="delete">
                            </form>
                        </ul>
                    @endforeach
                    {{$staffs->Links()}}
                </div>
            </div>
        </div>
    </div>
@endsection

