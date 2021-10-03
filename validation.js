let x, y, r;


window.onload = function () {

    let buttons = document.querySelectorAll("input[name=X-button]");
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


x.onblur = function() {
    if(document.getElementsByClassName("btn").clicked == false) {
    Xerror.innerHTML = 'Выберите значение X'
    this.classList.add("Xerror");
    y.classList.add('invalid');
}
};
x.onfocus = function() {
    if (this.classList.contains('invalid')) {
        this.classList.remove('invalid');
        error.innerHTML = "";
        }
    };


