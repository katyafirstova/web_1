"use strict"


let x, y, r;
let input = document.getElementsByClassName("inputY");
let form = document.getElementById("form");

window.onload = function () {

    let buttons = document.querySelectorAll("button[name = x]");
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
	let error = elem.parentElement.querySelector(".error");
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
	let changedInput = e.target;
	validateY(changedInput);
});

    $('#form').submit(function() {
        $.ajax({
            type: "GET",
            url: "main.php",
            data: {
                "x": x, "y": y, "r": r,
                success: function (html) {
                    $("#content").html(html);
                }
            }
        });
    });
















