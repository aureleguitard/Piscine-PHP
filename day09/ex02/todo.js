        // add todo
var cookie = [];
var buttonClick = document.getElementById("button");
buttonClick.addEventListener("click", clickB);
function clickB() {
    var textToInsert = prompt("New todo item", ""); //get info for text node
    var newItem = document.createElement("li"); //create a <li> node
    var textNode = document.createTextNode(textToInsert); //create a text node
    newItem.appendChild(textNode); //append text to <li>
    var insertNode = document.getElementById("ul_list"); //get the <ul> elen to insert a new node
    insertNode.insertBefore(newItem, insertNode.childNodes[0]); //insert <li> before first child of <ul>
    newItem.addEventListener("click", remove);
}

function remove(elem) {
    if (confirm("Tu es sur d'avoir finis ?"))
    {
        elem.target.remove();
    }
}

window.onunload = function () {
    var ft_list = document.querySelector("#ft_list");
    var todo = ft_list.children;
    var newCookie = [];
    for (var i = 0; i < todo.length; i++){
        newCookie.reverse().push(todo[i].innerHTML);
    }
    document.cookie = JSON.stringify(newCookie);
    console.log(newCookie);
};
            
window.onload = function () {
    ft_list = document.querySelector("#ft_list");
    var tmp = document.cookie;
    if (tmp)  
        cookie = JSON.parse(tmp);
        cookie.forEach(function(e) {
            loadnormal(e);
        });
    }


function loadnormal(textToInsert) {
    var newItem = document.createElement("li"); //create a <li> node
    var textNode = document.createTextNode(textToInsert); //create a text node
    newItem.appendChild(textNode); //append text to <li>
    var insertNode = document.getElementById("ul_list"); //get the <ul> elen to insert a new node
    insertNode.insertBefore(newItem, insertNode.childNodes[0]); //insert <li> before first child of <ul>
    newItem.addEventListener("click", remove);
}