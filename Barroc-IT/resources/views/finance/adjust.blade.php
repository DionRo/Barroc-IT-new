@include('/header/finance/index')

<div class="main-content">
    <div class="container">
        <form action="{{action('financeController@update', $customer->company->companyNr)}}" method="POST">
            {{csrf_field()}}
            <select class="select" name="BKR">
                <option value="">SELECT CORRECT BKR!</option>
                <option value="0">BKR Positive</option>
                <option value="1">BKR Unknown</option>
                <option value="2">BKR Negative</option>
            </select>
            <input class="text" type="text" placeholder="Current Credit : {{$customer->company->credit}}" name="credit">
            <input class="text" type="text" placeholder="Current creditCeiling : {{$customer->company->creditCeiling}}" name="ceiling">
            <input type="hidden" value="{{$customer->company->companyNr}}" name="companyNr">
            <input class="submit" type="submit">
            {{method_field('PUT')}}
        </form>
    </div>
</div>

@include('/footer/index')