"use strict";
let ul = document.getElementById("ul");
ul.addEventListener("click",function(e){
   console.log(e.target.tagName);
    if(e.target.tagName == "LI") {
        e.target.innerHTML+="!";
    }
    else {
        let li = document.createElement("li");
        e.target.after(li);
    }
})sdf