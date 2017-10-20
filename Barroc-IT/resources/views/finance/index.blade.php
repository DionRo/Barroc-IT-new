@include('/header/finance/index')

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
                    @foreach($customers as $customer)
                        <tr class="space-between showinfo item-js"
                            data-first-name="{{$customer->firstName}}"
                            data-last-name="{{$customer->lastName}}"
                            data-customer-nr="{{$customer->id}}"
                            data-company-nr="{{$customer->companyNr}}"
                            data-status="{{$customer->status}}"
                            data-bkr="{{$customer->company->BKR}}"
                            data-credit="{{$customer->company->credit}}"
                            data-credit-ceiling="{{$customer->company->creditCeiling}}"

                        >


                            <td class="table-sizer">{{$customer->lastName}}, {{$customer->firstName}}</td>
                            <td>{{$customer->id}}</td>
                            <td>{{$customer->companyNr}}</td>
                            <td>{{$customer->status}}</td>
                            <td>
                                <form action="{{action('financeController@edit', $customer->id)}}" method="GET">
                                    {{csrf_field()}}
                                    <input class="adjust" type="submit" value="adjust">
                                    <input type="hidden" name="adjust" value="{{$customer->id}}">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="sales-information flex" id="pop-up">
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
                        <li id="firstN"></li>
                        <li id="last"></li>
                        <li id="customer"></li>
                        <li id="status"></li>
                        <li id="bkr"></li>
                        <li id="credit"></li>
                        <li id="creditceiling"></li>
                    </ul>
                </div>
            </div>
            {{$customers->Links()}}
        </div>
    </div>
    <div class="unknown">
        <div class="container">
            <h2><span class="title-orange">Unknown</span> BKR Customers</h2>
            <div class="space-between">
                <table class="sales-active" cellspacing="0" cellpadding="0">
                    <tr class="space-between title-table">
                        <td class="table-sizer">Name</td>
                        <td>Customer number</td>
                        <td>Company number</td>
                        <td>Status</td>
                        <td>Update</td>
                    </tr>
                    @foreach($customersU as $customerU)
                        <tr class="space-between showinfo2 item-js2"
                            data-first-name2="{{$customerU->firstName}}"
                            data-last-name2="{{$customerU->lastName}}"
                            data-customer-nr2="{{$customerU->id}}"
                            data-company-nr2="{{$customerU->companyNr}}"
                            data-status2="{{$customerU->status}}"
                            data-bkr2="{{$customerU->company->BKR}}"
                            data-credit2="{{$customerU->company->credit}}"
                            data-credit-ceiling2="{{$customerU->company->creditCeiling}}"

                        >
                            <td class="table-sizer">{{$customerU->lastName}}, {{$customerU->firstName}}</td>
                            <td>{{$customerU->id}}</td>
                            <td>{{$customerU->companyNr}}</td>
                            <td>{{$customerU->status}}</td>

                        </tr>
                    @endforeach
                </table>
                <div class="sales-information-2 flex" id="pop-up2">
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
                        <li id="firstN2"></li>
                        <li id="last2"></li>
                        <li id="customer2"></li>
                        <li id="status2"></li>
                        <li id="bkr2"></li>
                        <li id="credit2"></li>
                        <li id="creditceiling2"></li>
                    </ul>
                </div>
            </div>
            {{$customersU->Links()}}
        </div>
    </div>
    <div class="negative">
        <div class="container">
            <h2><span class="title-red">Negative</span> BKR Customers</h2>
            <div class="space-between">
                <table class="sales-active" cellspacing="0" cellpadding="0">
                    <tr class="space-between title-table">
                        <td class="table-sizer">Name</td>
                        <td>Customer number</td>
                        <td>Company number</td>
                        <td>Status</td>
                    </tr>
                    @foreach($customersN as $customerN)
                        <tr class="space-between showinfo3 item-js3"
                            data-first-name3="{{$customerN->firstName}}"
                            data-last-name3="{{$customerN->lastName}}"
                            data-customer-nr3="{{$customerN->id}}"
                            data-company-nr3="{{$customerN->companyNr}}"
                            data-status3="{{$customerN->status}}"
                            data-bkr3="{{$customerN->company->BKR}}"
                            data-credit3="{{$customerN->company->credit}}"
                            data-credit-ceiling3="{{$customerN->company->creditCeiling}}"
                        >
                            <td class="table-sizer">{{$customerN->lastName}}, {{$customerN->firstName}}</td>
                            <td>{{$customerN->id}}</td>
                            <td>{{$customerN->companyNr}}</td>
                            <td>{{$customerN->status}}</td>
                        </tr>
                    @endforeach
                </table>
                <div class="sales-information-3 flex" id="pop-up3">
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
                        <li id="firstN3"></li>
                        <li id="last3"></li>
                        <li id="customer3"></li>
                        <li id="status3"></li>
                        <li id="bkr3"></li>
                        <li id="credit3"></li>
                        <li id="creditceiling3"></li>
                    </ul>
                </div>
            </div>
            {{$customersU->Links()}}
        </div>
    </div>
</div>

@include('/footer/index');