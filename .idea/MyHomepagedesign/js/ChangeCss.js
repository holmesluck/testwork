//noinspection JSUnresolvedFunction
/**
 * Created by zhangyangzuo on 2016/11/4.
 */
$(document).ready(function () {
    //click the button at the bottom of the page ,and trigger the function
    $(".changestyle").bind("click",function () {

        var css = document.getElementById("changestyle");
        var a = this.getAttribute('value');//get the click object right now
        //judge the action to change different  style on the webpage
        if (a==1)
        {
            css.setAttribute("href","../css/style.css");
        }
        if (a==2)
        {
            css.setAttribute("href", "../css/style1.css");
        }
        else if(a==3)
        {
            css.setAttribute("href","../css/defaultstyle.css")
        }
     });
});
