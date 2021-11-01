"use strict"

let x, y, r;
var input = document.getElementsByClassName("inputY");
var form = document.getElementById("form");

window.onload = function () {

    let buttons = document.querySelectorAll("button[name = x-button]");
    buttons.forEach(click);

    function click(element) {
        element.onclick = function () {
            x = this.value;
            buttons.forEach(function (element) {
                element.style.boxShadow = "";
                element.style.transform = "";
            });
            this.style.boxShadow = "0 0 40px 5px #f41c52";
            this.style.transform = "scale(1.05)";
        }
    }
};

function validateY(elem) {
	var error = elem.parentElement.querySelector(".error");
	if (!elem.validity.valid) {
		elem.setAttribute("aria-invalid", true);
		error.classList.add("active");
		error.innerHTML = elem.getAttribute("title");
    }
    else if(elem.value > 5 || elem.validity < -5) {
        elem.setAttribute("aria-invalid", true);
		error.classList.add("active");
		error.innerHTML = elem.getAttribute("title1")
    }
	else {
		elem.removeAttribute("aria-invalid");
		error.innerHTML = "";
		error.classList.remove("active");
	}
}

form.addEventListener("change", function(e) {
	var changedInput = e.target;
	validateY(changedInput);
});


function validateX() {
    if(document.getElementsByName("x-button") == null) {
        elem.setAttribute("aria-invalid", true);
		error.classList.add("active");
		error.innerHTML = elem.getAttribute("titleX");

    }
    else {
		elem.removeAttribute("aria-invalid");
		error.innerHTML = "";
		error.classList.remove("active");
	}

function validateR() {
    select = document.getElementsByClassName("selectR");
    if(!select.value == ""){
        return true;
    }
    else {
    return false;
}}

function send() {
    var params = new URLSearchParams('x=' + x + '&y=' + y + "&r=" + r); 
    if(validateX() && validateY() && validateR) {
        fetch("main.php", {
            method: "GET",
            body: params
        })

    }
}

}











