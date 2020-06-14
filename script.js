function loadingScreen() {
    let t = Math.floor(Math.random() * (20 - 5 + 1)) + 5;
    let loadingDiv = document.querySelector("#loading");

    setTimeout(() => {
        loadingDiv.style.display = "none";
    }, t*100);
}

(function() {
    let menu_page = document.querySelectorAll("#menu > a");
    let actual_page = document.location.href;
    
    menu_page.forEach(path => {
        if (path.href === actual_page) {
            path.className = "current_page";
        }
    });


    loadingScreen();
})();