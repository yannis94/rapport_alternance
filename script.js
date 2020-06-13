let menu_page = document.querySelectorAll("#menu > a");
let actual_page = document.location.href;

menu_page.forEach(path => {
    if (path.href === actual_page) {
        path.className = "current_page";
    }
});