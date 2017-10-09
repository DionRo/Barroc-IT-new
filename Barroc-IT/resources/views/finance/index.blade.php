@include('/header/finance/index');

<div class="main-content">
    <div class="positive">
        <div class="container">
            <h2><span class="title-green">Positive</span> BKR Customers</h2>
            <div class="space-between">
                <table class="sales-active" cellspacing="0" cellpadding="0">
                    <tr class="space-between title-table">
                        <td>Name</td>
                        <td>Customer number</td>
                        <td>Company number</td>
                        <td>Status</td>
                    </tr>

                    <tr class="space-between">
                        <td>Name</td>
                        <td>Customer number</td>
                        <td>Company number</td>
                        <td>Status</td>
                    </tr>
                    <tr class="space-between">
                        <td>Name</td>
                        <td>Customer number</td>
                        <td>Company number</td>
                        <td>Status</td>
                    </tr>
                    <tr class="space-between">
                        <td>Name</td>
                        <td>Customer number</td>
                        <td>Company number</td>
                        <td>Status</td>
                    </tr>


                    @foreach($customers as$customer)
                        <tr class="space-between">
                            <td>{{$customer->lastName}},{{$customer->firstName}}</td>
                            <td>{{$customer->customerNr}}</td>
                            <td>{{$customer->companyNr}}</td>
                            <td>{{$customer->status}}</td>
                        </tr>
                    @endforeach
                </table>
                <div class="sales-information flex">
                    <ul>
                        <li>First Name:</li>
                        <li>Last Name:</li>
                        <li>Customer Number:</li>
                        <li>Description:</li>
                        <li>BRK:</li>
                        <li>Credit:</li>
                        <li>Credit Ceiling:</li>
                    </ul>
                    <ul>
                        <li>First Name</li>
                        <li>Last Name</li>
                        <li>Customer Number</li>
                        <li>Description</li>
                        <li>Positive</li>
                        <li>€250,-</li>
                        <li>€500,-</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="unknown">
        <div class="container">
            <h2><span class="title-orange">Unknown</span> BKR Customers</h2>
            <div class="space-between">
                <table class="sales-active" cellspacing="0" cellpadding="0">
                    <tr class="space-between title-table">
                        <td>Name</td>
                        <td>Customer number</td>
                        <td>Company number</td>
                        <td>Status</td>
                    </tr>
                    <tr class="space-between">
                        <td>Name</td>
                        <td>Customer number</td>
                        <td>Company number</td>
                        <td>Status</td>
                    </tr>
                    <tr class="space-between">
                        <td>Name</td>
                        <td>Customer number</td>
                        <td>Company number</td>
                        <td>Status</td>
                    </tr>
                    <tr class="space-between">
                        <td>Name</td>
                        <td>Customer number</td>
                        <td>Company number</td>
                        <td>Status</td>
                    </tr>
                </table>
                <div class="sales-information flex">
                    <ul>
                        <li>First Name:</li>
                        <li>Last Name:</li>
                        <li>Customer Number:</li>
                        <li>Description:</li>
                        <li>BRK:</li>
                        <li>Credit:</li>
                        <li>Credit Ceiling:</li>
                    </ul>
                    <ul>
                        <li>First Name</li>
                        <li>Last Name</li>
                        <li>Customer Number</li>
                        <li>Description</li>
                        <li>Unknown</li>
                        <li>N/A</li>
                        <li>N/A</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="negative">
        <div class="container">
            <h2><span class="title-red">Negative</span> BKR Customers</h2>
            <div class="space-between">
                <table class="sales-active" cellspacing="0" cellpadding="0">
                    <tr class="space-between title-table">
                        <td>Name</td>
                        <td>Customer number</td>
                        <td>Company number</td>
                        <td>Status</td>
                    </tr>
                    <tr class="space-between">
                        <td>Name</td>
                        <td>Customer number</td>
                        <td>Company number</td>
                        <td>Status</td>
                    </tr>
                    <tr class="space-between">
                        <td>Name</td>
                        <td>Customer number</td>
                        <td>Company number</td>
                        <td>Status</td>
                    </tr>
                    <tr class="space-between">
                        <td>Name</td>
                        <td>Customer number</td>
                        <td>Company number</td>
                        <td>Status</td>
                    </tr>
                </table>
                <div class="sales-information flex">
                    <ul>
                        <li>First Name:</li>
                        <li>Last Name:</li>
                        <li>Customer Number:</li>
                        <li>Description:</li>
                        <li>BRK:</li>
                        <li>Credit:</li>
                        <li>Credit Ceiling:</li>
                    </ul>
                    <ul>
                        <li>First Name</li>
                        <li>Last Name</li>
                        <li>Customer Number</li>
                        <li>Description</li>
                        <li>Negative</li>
                        <li>N/A</li>
                        <li>N/A</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@include('/footer/index');