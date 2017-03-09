window.onload = function() {
    var b = document.getElementById("myButton");
    b.onclick = function() {
        traverse();
    };
}

function traverse()
{
    if( typeof document.body !== "undefined" && document.body !== null )
        rec_post_order(document.body);
};

function rec_post_order(node)
{
    var children = node.childNodes;

    for(var i=0; i< children.length; i++){
        rec_post_order(children[i]);
    }

    alert("After Recursion: Current html node:" + node + ";\nIts parent:" + node.parentNode + ";\nCurrent node innerHTML:" + node.innerHTML);
};


