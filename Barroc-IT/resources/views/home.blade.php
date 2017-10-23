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

                    You are logged in! Please wait untill an admin assigns you to your department, in order to use the system!
                        <br>
                    Thank you for your patience!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

