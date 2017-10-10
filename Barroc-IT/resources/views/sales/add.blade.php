@extends('layouts/salesMaster')

@section('content')
</div>
</header>
<div class="main-content">
    <div class="container">
        <h2>Add Customers</h2>
        <form method="post" class="flex flex-column" action="/sales">
            {{csrf_field()}}
            <div class="form-group flex">
                <label for="firstName">First Name</label>
                <input type="text" name="firstName" required>
            </div>
            <div class="form-group flex">
                <label for="middleName">Middle Name</label>
                <input type="text" name="middleName">
            </div>
            <div class="form-group flex">
                <label for="lastName">Last Name</label>
                <input type="text" name="lastName" required>
            </div>
            <div class="form-group">
                <label for="company">Company</label>
                <input type="text" name="company">
            </div>
            <div class="form-group flex">
                <label for="address">Address</label>
                <input type="text" name="address" required>
            </div>
            <div class="form-group flex">
                <label for="zipCode">Zip Code</label>
                <input type="text" name="zipCode" required>
            </div>
            <div class="form-group flex">
                <label for="email">Email</label>
                <input type="text" name="email" required>
            </div>
            <div class="form-group flex">
                <label for="phoneNumber">Phone Number</label>
                <input type="text" name="phoneNumber" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <input type="text" name="gender" required>
            </div>
            <div class="form-group flex description">
                <label for="description">Description</label>
                <input type="text" name="description">
            </div>

            <input class="submit" type="submit" value="Add">
        </form>
    </div>
</div>

@endsection