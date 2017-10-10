var done = false;
$('.showinfo').click(function(){
    if (!done)
    {
        $('.sales-information').toggleClass('sales-information-vis');
        done = true;
    }
});

var items = $(".item-js");

items.each(function(k, v){
    $(v).click(function(){
        var firstN = $(this).attr('data-first-name');
        var last = $(this).attr('data-last-name');
        var customer = $(this).attr('data-customer-nr');
        var status = $(this).attr('data-status');
        var bkr = $(this).attr('data-bkr');
        var credit = $(this).attr('data-credit');
        var creditCeiling = $(this).attr('data-credit-ceiling');

        fill(firstN , last , customer , status , bkr , credit , creditCeiling);
    });
});

var blad = document.getElementById('pop-up');

function fill(firstN, last, customer, status , bkr, credit , creditCeiling) {
    var text =
        "                    <ul>\n" +
        "                        <li>First Name:</li>\n" +
        "                        <li>Last Name:</li>\n" +
        "                        <li>Customer Number:</li>\n" +
        "                        <li>Description:</li>\n" +
        "                        <li>BRK:</li>\n" +
        "                        <li>Credit:</li>\n" +
        "                        <li>Credit Ceiling:</li>\n" +
        "                    </ul>\n" +
        "                    <ul>\n" +
        "                        <li id=\"firstN\">"+ firstN +"</li>\n" +
        "                        <li id=\"last\">" + last +"</li>\n" +
        "                        <li id=\"customer\">"+ customer +"</li>\n" +
        "                        <li id=\"status\">" + status + "</li>\n" +
        "                         <li id=\"bkr\">" + bkr + "</li>\n" +
        "                        <li id=\"credit\">" + credit +"</li>\n" +
        "                        <li id=\"creditceiling\">" + creditCeiling + "</li>\n" +
        "                    </ul>\n" ;
    console.log(text);
    console.log(blad);
    blad.innerHTML = text;
}