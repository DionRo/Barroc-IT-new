@include('/header/admin/index')


<div class="container divide-light">
    <div class="main-content">
        <div class="left">
            <br>
            <h2>CREATE USER</h2>
            <form action="../app/user_manager.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input class="text" type="text" class="form-control" name="username" placeholder="Fill in the username!">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input class="text" type="password" class="form-control" name="password" placeholder="Fill in the password!">
                </div>
                <div class="form-group">
                    <label for="email">email:</label>
                    <input class="text" type="email" class="form-control" name="email" placeholder="Fill in the email!">
                </div>
                <div class="form-group">
                    <label for="name">Firstname:</label>
                    <input class="text" type="text" class="form-control" name="firstname" placeholder="Fill in the firstname!">
                </div>
                <div class="form-group">
                    <label for="name">Middlename:</label>
                    <input class="text" type="text" class="form-control" name="middlename" placeholder="Fill in the Middlename!">
                </div>
                <div class="form-group">
                    <label for="name">lastname:</label>
                    <input class="text" type="text" class="form-control" name="lastname" placeholder="Fill in the Lastname!">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="text" type="email" class="form-control" name="email" placeholder="Fill in the email!">
                </div>
                <div class="form-group">
                    <label for="email">Adress:</label>
                    <input class="text" type="text" class="form-control" name="adress" placeholder="Fill in the adress">
                </div>
                <div class="form-group">
                    <label for="email">Zipcode:</label>
                    <input class="text" type="text" class="form-control" name="zipcode" placeholder="Fill in the zipcode!!">
                </div>
                <div class="form-group">
                    <label for="email">Country:</label>
                    <input class="text" type="text" class="form-control" name="country" placeholder="Fill in the country!">
                </div>
                <div class="form-group">
                    <input type="submit" value="Create a user!" class="submit" name="register">
                </div>
                <!-- alle datums in een optie veld -->
            </form>
        </div>
        <div class="right">
            <br>
            <h2>CURRENT USERS</h2>
            <div class="container">

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