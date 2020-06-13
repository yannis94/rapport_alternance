let btn = document.querySelectorAll(".button");
let i = 0;
btn.forEach(button => {
    i++;
    button.btnId = i;
    button.addEventListener("click", function(){
        document.querySelector(`#content${this.btnId}`).style.display = "block";
    });
});
