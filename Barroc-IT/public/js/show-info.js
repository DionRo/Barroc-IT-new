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
        "                        <li>BKR:</li>\n" +
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
        "                    </ul>\n";
    blad.innerHTML = text;
}
var done2 = false;
$('.showinfo2').click(function(){
    if (!done2)
    {
        $('.sales-information-2').toggleClass('sales-information-vis');
        done2 = true;
    }
});

var items2 = $(".item-js2");

items2.each(function(k2, v2){
    $(v2).click(function(){
        var firstN = $(this).attr('data-first-name2');
        var last = $(this).attr('data-last-name2');
        var customer = $(this).attr('data-customer-nr2');
        var status = $(this).attr('data-status2');
        var bkr = $(this).attr('data-bkr2');
        var credit = $(this).attr('data-credit2');
        var creditCeiling = $(this).attr('data-credit-ceiling2');

        fill2(firstN , last , customer , status , bkr , credit , creditCeiling);
    });
});

var blad2 = document.getElementById('pop-up2');

function fill2(firstN, last, customer, status , bkr, credit , creditCeiling) {
    var text =
        "                    <ul>\n" +
        "                        <li>First Name:</li>\n" +
        "                        <li>Last Name:</li>\n" +
        "                        <li>Customer Number:</li>\n" +
        "                        <li>Description:</li>\n" +
        "                        <li>BKR:</li>\n" +
        "                        <li>Credit:</li>\n" +
        "                        <li>Credit Ceiling:</li>\n" +
        "                    </ul>\n" +
        "                    <ul>\n" +
        "                        <li id=\"firstN2\">"+ firstN +"</li>\n" +
        "                        <li id=\"last2\">" + last +"</li>\n" +
        "                        <li id=\"customer2\">"+ customer +"</li>\n" +
        "                        <li id=\"status2\">" + status + "</li>\n" +
        "                        <li id=\"bkr2\">" + bkr + "</li>\n" +
        "                        <li id=\"credit2\">" + credit +"</li>\n" +
        "                        <li id=\"creditceiling2\">" + creditCeiling + "</li>\n" +
        "                    </ul>\n" ;
    blad2.innerHTML = text;
}

var done3 = false;
$('.showinfo3').click(function(){
    if (!done3)
    {
        $('.sales-information-3').toggleClass('sales-information-vis');
        done3 = true;
    }
});

var items3 = $(".item-js3");

items3.each(function(k3, v3){
    $(v3).click(function(){
        var firstN = $(this).attr('data-first-name3');
        var last = $(this).attr('data-last-name3');
        var customer = $(this).attr('data-customer-nr3');
        var status = $(this).attr('data-status3');
        var bkr = $(this).attr('data-bkr3');
        var credit = $(this).attr('data-credit3');
        var creditCeiling = $(this).attr('data-credit-ceiling3');

        fill3(firstN , last , customer , status , bkr , credit , creditCeiling);
    });
});

var blad3 = document.getElementById('pop-up3');

function fill3(firstN, last, customer, status , bkr, credit , creditCeiling) {
    var text =
        "                    <ul>\n" +
        "                        <li>First Name:</li>\n" +
        "                        <li>Last Name:</li>\n" +
        "                        <li>Customer Number:</li>\n" +
        "                        <li>Description:</li>\n" +
        "                        <li>BKR:</li>\n" +
        "                        <li>Credit:</li>\n" +
        "                        <li>Credit Ceiling:</li>\n" +
        "                    </ul>\n" +
        "                    <ul>\n" +
        "                        <li id=\"firstN3\">"+ firstN +"</li>\n" +
        "                        <li id=\"last3\">" + last +"</li>\n" +
        "                        <li id=\"customer3\">"+ customer +"</li>\n" +
        "                        <li id=\"status3\">" + status + "</li>\n" +
        "                         <li id=\"bkr3\">" + bkr + "</li>\n" +
        "                        <li id=\"credit3\">" + credit +"</li>\n" +
        "                        <li id=\"creditceiling3\">" + creditCeiling + "</li>\n" +
        "                    </ul>\n" ;
    blad3.innerHTML = text;
}

var done4 = false;
$('.showinfo4').click(function(){
    if (!done4)
    {
        $('.sales-information-4').toggleClass('sales-information-vis');
        done4 = true;
    }
});

var items4 = $(".item-js4");

items4.each(function(k4, v4){
    $(v4).click(function(){
        var firstN = $(this).attr('data-first-name4');
        var lastN = $(this).attr('data-last-name4');
        var customer = $(this).attr('data-customer-nr4');
        var status = $(this).attr('data-status4');
        var phone = $(this).attr('data-phone-nr4');
        var email = $(this).attr('data-email4');
        var company = $(this).attr('data-company4');
        var active = $(this).attr('data-active4');
        var gender = $(this).attr('data-gender4');
        var adress = $(this).attr('data-adress4');
        var postal = $(this).attr('data-postal4');
        var country = $(this).attr('data-country4');

        fill4(firstN, lastN, customer, status ,phone , email , company, country , postal , adress);
    });
});

var blad4 = document.getElementById('pop-up4');

function fill4(firstN, lastN, customer, status ,phone , email , company, country , postal , adress) {
    var text =
        "                        <ul>\n" +
        "                        <li>First Name:</li>\n" +
        "                        <li>Last Name:</li>\n" +
        "                        <li>Customer Number:</li>\n" +
        "                        <li>Company name:</li>\n" +
        "                        <li>Email:</li>\n" +
        "                        <li>Phone Number:</li>\n" +
        "                        <li>Address:</li>\n" +
        "                        <li>Postal Code:</li>\n" +
        "                        <li>Country: </li>\n" +
        "                        <li>Description:</li>\n" +
        "\n" +
        "                    </ul>\n" +
        "                    <ul>\n" +
        "                        <li id=\"firstN4\">" + firstN +"</li>\n" +
        "                        <li id=\"lastN4\">"+ lastN +"</li>\n" +
        "                        <li id=\"customerNr4\">" + customer + "</li>\n" +
        "                        <li id=\"companyname\">"+ company +"</li>\n" +
        "                        <li id=\"email4\">" + email +"</li>\n" +
        "                        <li id=\"phone4\">" + phone +"</li>\n" +
        "                        <li id=\"adress4\">" + adress +"</li>\n" +
        "                        <li id=\"postal4\">" + postal + "</li>\n" +
        "                        <li id=\"country\">" +country+ "</li>\n" +
        "                        <li id=\"desc4\">"+ status +"</li>\n" +
        "                    </ul>";
    blad4.innerHTML = text;
}

var done5 = false;
$('.showinfo5').click(function(){
    if (!done5)
    {
        $('.sales-information-5').toggleClass('sales-information-vis');
        done5 = true;
    }
});

var items5 = $(".item-js5");

items5.each(function(k5, v5){
    $(v5).click(function(){
        var firstN = $(this).attr('data-first-name5');
        var lastN = $(this).attr('data-last-name5');
        var customer = $(this).attr('data-customer-nr5');
        var status = $(this).attr('data-status5');
        var phone = $(this).attr('data-phone-nr5');
        var email = $(this).attr('data-email5');
        var company = $(this).attr('data-company5');
        var active = $(this).attr('data-active5');
        var gender = $(this).attr('data-gender5');
        var adress = $(this).attr('data-adress5');
        var postal = $(this).attr('data-postal5');
        var country = $(this).attr('data-country5');

        fill5(firstN, lastN, customer, status ,phone , email , company, country , postal , adress);
    });
});

var blad5 = document.getElementById('pop-up5');

function fill5(firstN, lastN, customer, status ,phone , email , company, country , postal , adress) {
    var text =
        "                        <ul>\n" +
        "                        <li>First Name:</li>\n" +
        "                        <li>Last Name:</li>\n" +
        "                        <li>Customer Number:</li>\n" +
        "                        <li>Company name:</li>\n" +
        "                        <li>Email:</li>\n" +
        "                        <li>Phone Number:</li>\n" +
        "                        <li>Address:</li>\n" +
        "                        <li>Postal Code:</li>\n" +
        "                        <li>Country: </li>\n" +
        "                        <li>Description:</li>\n" +
        "\n" +
        "                    </ul>\n" +
        "                    <ul>\n" +
        "                        <li id=\"firstN5\">" + firstN +"</li>\n" +
        "                        <li id=\"lastN5\">"+ lastN +"</li>\n" +
        "                        <li id=\"customerNr5\">" + customer + "</li>\n" +
        "                        <li id=\"companyname5\">"+ company +"</li>\n" +
        "                        <li id=\"email5\">" + email +"</li>\n" +
        "                        <li id=\"phone5\">" + phone +"</li>\n" +
        "                        <li id=\"adress5\">" + adress +"</li>\n" +
        "                        <li id=\"postal5\">" + postal + "</li>\n" +
        "                        <li id=\"country5\">" +country+ "</li>\n" +
        "                        <li id=\"desc5\">"+ status +"</li>\n" +
        "                    </ul>";
    blad5.innerHTML = text;
}

