/**
 * Created by zhangyangzuo on 2016/11/8.
 */
$(document).ready(function () {
    //click the button at the bottom of the page ,and trigger the function
    $(".bomb").bind("click",function () {
        //get the object clicking right now
        this.innerHTML="<img src='../resources/bomb.gif'/>";
        this.style.backgroundColor="white";
    });
});
// $(document).ready(function(){
//    $(".create").bind("click",function () {
//
//            var table = document.createElement('table');
//            var tbody = document.createElement('tbody');
//            var createRow = function(parent,cols,idx){
//
//                var row = document.createElement('tr');
//                tbody.appendChild(row);
//
//                row.className = (idx & 1) == 1 ? 'even' : 'odd';
//
//                for(var i=0;i<cols;i++)
//                    row.appendChild(document.createElement('td'));
//            }
//            document.body.appendChild(table);
//            table.appendChild(tbody);
//
//            for(var i=0;i<10;i++)
//                createRow(tbody,10,i);
//    });
// });
