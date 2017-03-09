/**
 * Created by zhangyangzuo on 2016/11/8.
 */

$(document).ready(function () {
    // $(document).bind("contextmenu",function(e){
    // return false;
    //  });
    document.oncontextmenu = function(){
        return false;
    }
    //click the button at the bottom of the page ,and trigger the function
    $(".bomb").bind("contextmenu",function (event) {
        //get the object clicking right now
            this.innerHTML="<img src='../resources/flag.gif'/>";
            this.style.backgroundColor="white";
    });
    $(".bomb").bind("click",function (event) {
        //get the object clicking right now
            this.innerHTML = "<img src='../resources/bomb.gif'/>";
            this.style.backgroundColor = "white";
    });
});
