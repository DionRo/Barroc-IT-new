@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard @ BARROC-IT</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>You are logged in!</h3>

                    <p>Please wait untill an admin assigns you to your department, in order to use the system!</p>

                    <p>Thank you for your patience!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

