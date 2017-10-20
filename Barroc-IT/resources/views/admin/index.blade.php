@include('/header/admin/index')


<div class="container divide-light">
    <div class="main-content">
        <div class="left">
            <h2>ADD USERS</h2>
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <label for="username" class="control-label">Username</label>
                    <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}"
                           required>

                    @if ($errors->has('username'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">
                    <label for="department" class="control-label">Department</label>
                    <select class="form-control" name="department" value="{{ old('department') }}">
                        <option value="0">Admin</option>
                        <option value="1">Finance</option>
                        <option value="2">Sales</option>
                        <option value="3">Development</option>
                    </select>

                    @if ($errors->has('department'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                    <label for="firstName" class="control-label">Firstname</label>
                    <input id="name" type="text" class="form-control" name="firstName" value="{{ old('firstName') }}"
                           required autofocus>

                    @if ($errors->has('firstName'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
                    <label for="lastName" class="control-label">Lastname</label>

                    <input id="lastName" type="text" class="form-control" name="lastName" value="{{ old('lastName') }}"
                           required autofocus>

                    @if ($errors->has('lastName'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                    @endif
                </div>


                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="control-label">E-Mail Address</label>

                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                           required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('zipcode') ? ' has-error' : '' }}">
                    <label for="zipcode" class="control-label">Zipcode</label>

                    <input id="zipcode" type="text" class="form-control" name="zipcode" value="{{ old('zipcode') }}"
                           required autofocus>

                    @if ($errors->has('zipcode'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('zipcode') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('adress') ? ' has-error' : '' }}">
                    <label for="adress" class="control-label">Adress</label>
                        <input id="adress" type="text" class="form-control" name="adress" value="{{ old('adress') }}" required autofocus>

                        @if ($errors->has('adress'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('adress') }}</strong>
                                    </span>
                        @endif
                </div>
                <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                    <label for="country" class="control-label">Country</label>

                    <input id="country" type="text" class="form-control" name="country" value="{{ old('country') }}"
                           required autofocus>

                    @if ($errors->has('country'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label">Password</label>

                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="control-label">Confirm Password</label>

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                           required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>
            </form>
        </div>

        <div class="right">
            <h2>CURRENT USERS</h2>
            <div class="col-lg-12">

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
                {{ $staffs->links() }}
            </div>
        </div>
    </div>
</div>
</body>
</html>