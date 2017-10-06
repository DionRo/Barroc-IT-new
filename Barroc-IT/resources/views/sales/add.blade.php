@include('/header/sales/index')

<div class="add-edit-customers main-content">
    <div class="container space-between">
        <div class="add-customers">
            <h2>Add Customers</h2>
            <form class="flex flex-column" action="">
                <div class="form-group flex">
                    <label for="">First Name</label>
                    <input type="text">
                </div>
                <div class="form-group flex">
                    <label for="">Last Name</label>
                    <input type="text">
                </div>
                <div class="form-group flex">
                    <label for="">Email</label>
                    <input type="text">
                </div>
                <div class="form-group flex">
                    <label for="">Phone Number</label>
                    <input type="text">
                </div>
                <div class="form-group flex">
                    <label for="">Address</label>
                    <input type="text">
                </div>
                <div class="form-group flex">
                    <label for="">Postal Code</label>
                    <input type="text">
                </div>
                <div class="form-group flex description">
                    <label for="">Product Description</label>
                    <input type="text">
                </div>

                <input class="submit" type="submit" value="Add">
            </form>
        </div>
        <div class="edit-customers">
            <h2>Edit Customers</h2>
            <form class="search" action="">
                <input class="search-button" type="button" name="search">
                <input class="search-input" type="text" name="search" placeholder="Search...">
            </form>
        </div>
    </div>
</div>