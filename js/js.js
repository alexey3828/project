"use strict";

let p1 = document.querySelector("#p1");
let p2 = document.querySelector("#p2");
let p3 = document.querySelector("#p3");
let p4 = document.querySelector("#p4");
let p5 = document.querySelector("#p5");

function exclamation() {
    this.innerHTML+="!";
}
p1.addEventListener("click", exclamation);
p2.addEventListener("click", exclamation);
p3.addEventListener("click", exclamation);
p4.addEventListener("click", exclamation);
p5.addEventListener("click", exclamation);