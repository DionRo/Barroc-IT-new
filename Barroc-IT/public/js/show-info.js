$('.showinfo').click(function(){
    $('.sales-information').toggleClass('sales-information-vis');

    var items = document.getElementsByClassName("item-js");

    for (var i = 0;i < items.length ; i++)
    {
        items[i].addEventListener('click', function () {
           var test = items[i].attr(id);
           console.log(test);
        });
    }


});
