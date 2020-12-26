$(document).ready(function() 
{
    $('.number').text(function(i,num)
    {
        num = addPeriod(num);
        $('.number').eq(i).text(num+' VND')
    });
});
function addPeriod(nStr)
{
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1))
    {
        x1 = x1.replace(rgx, '$1' + '.' + '$2');
    }
    return x1 + x2;
}
$(".search").keyup(function(event)
{
            if(event.keyCode == 13){
        $(".search_submit").click();
    }
});