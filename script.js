function loadingScreen() {
    let t = Math.floor(Math.random() * (20 - 5 + 1)) + 5;
    let loadingDiv = document.querySelector("#loading");

    setTimeout(() => {
        loadingDiv.style.display = "none";
    }, t*100);
}

function burgerStyle(status) {
    status = sessionStorage.getItem("menu_open");
    console.log(status)
    if (status === "close") {
        document.querySelector("#menu_link").style.right = 0;
        sessionStorage.setItem("menu_open", "open");
    }
    else {
        document.querySelector("#menu_link").style.right = `${-40}vw`;
        sessionStorage.setItem("menu_open", "close");
    }
}


(function() {
    let menu_page = document.querySelectorAll("#menu > a");
    let actual_page = document.location.href;
    let burger = document.querySelector("#burger");
    sessionStorage.setItem("menu_open", "close");
    
    menu_page.forEach(path => {
        if (path.href === actual_page) {
            path.className = "current_page";
        }
    });

    burger.addEventListener("click", burgerStyle);

    loadingScreen();
})();