function loadingScreen() {
    let t = Math.floor(Math.random() * (20 - 5 + 1)) + 5;
    let loadingDiv = document.querySelector("#loading");

    setTimeout(() => {
        loadingDiv.style.display = "none";
    }, t*100);
}

function burgerStyle(status) {
    status = sessionStorage.getItem("menu_open");

    function close() {
        document.querySelector("#menu_link").style.animationName = "closeBurger";
        document.querySelector("#menu_link").style.right = `${-40}vw`;
        document.querySelector("#shadow").style.animationName = "shadowOff";
        document.querySelector("#shadow").style.opacity = "0";
        document.querySelector("#shadow").style.display = "none";
        sessionStorage.setItem("menu_open", "close");
    }
    
    if (status === "close") {
        document.querySelector("#menu_link").style.animationName = "openBurger";
        document.querySelector("#menu_link").style.right = 0;
        document.querySelector("#shadow").style.display = "block";
        document.querySelector("#shadow").style.animationName = "shadowOn";
        document.querySelector("#shadow").style.opacity = "0.7";

        sessionStorage.setItem("menu_open", "open");

        setTimeout(() => {
            close();
        },5000);
    }
    else {
        close();
    }
}


(function() {
    let menu_page = document.querySelectorAll("#menu_link > a");
    let actual_page = document.location.href;
    let burger = document.querySelector("#burger");
    sessionStorage.setItem("menu_open", "close");
    
    menu_page.forEach(path => {
        if (path.href === actual_page) {
            path.className = "current_page";
        }
    });

    burger.addEventListener("click", burgerStyle);
    document.querySelector("#shadow").addEventListener("click", burgerStyle);

    loadingScreen();
})();