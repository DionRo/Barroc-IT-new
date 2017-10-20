@include('/header/finance/index')

<div class="main-content">
<div class="positive">
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                <h3>{{ session('status') }}</h3>
            </div>
        @elseif(session('failure'))
            <div class="alert alert-success">
                <h3>{{ session('failure') }}</h3>
            </div>
        @endif
        <h2><span class="title-green">Create</span> Invoice</h2>
        <div class="space-between">

            <table class="sales-active" cellspacing="0" cellpadding="0">
                    <tr class="space-between title-table">
                        <td style="width: 15%" >Order number</td>
                        <td style="width: 55%;margin-right: 10px;">Products</td>
                        <td style="width: 15%">Price</td>
                        <td style="width: 15%">Make invoice</td>
                    </tr>
                    @foreach($orders as $order)
                    <tr class="space-between">
                        <td style="width: 15%">{{$order->id}}</td>
                        <td style="width: 55%; margin-right: 10px;">{{$order->products}}</td>
                        <td style="width: 15%">{{$order->price}}</td>
                        <td style="width: 15%">
                            <form action="{{action('financeController@invoiceCheck', $order->id)}}" method="GET">
                                {{csrf_field()}}
                                <input class="button-nice" type="submit" value="Make invoice!">
                                <input type="hidden" name="adjust" value="{{$order->id}}">
                                <input type="hidden" name="companyNr" value="{{$order->companyNr}}">

                            </form>
                        </td>
                    </tr>
                    @endforeach

            </table>
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
        {{$orders->Links()}}
    </div>
</div>
</div>
@include('/footer/index')