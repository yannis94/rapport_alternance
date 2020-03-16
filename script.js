(function(){
    //création menu sur chaque page
    let pages_url = ["/index.html", "/entreprise.html", "/aboutme.html", "/missions.html", "/bilan.html"];
    let actual_page = document.location.pathname;
    let menu_div = document.querySelector("#menu");
    
    let pages_infos = {
        "/index.html": {
            "nom": "Home",
            "active": false
        },
        "/entreprise.html": {
            "nom": "Entreprise",
            "active": false
        },
        "/aboutme.html": {
            "nom": "About me",
            "active": false
        },
        "/missions.html": {
            "nom": "Mes missions",
            "active": false
        },
        "/bilan.html": {
            "nom": "Bilan",
            "active": false
        }
    }
    
    pages_infos[actual_page].active = true;
    
    
    let menu_img = document.createElement("img");
    let menu_links = document.createElement("div");
    menu_img.id = "menu_logo";
    menu_img.src = "#"; //! changer path
    menu_links.id = "menu_link";
    
    menu_div.appendChild(menu_img);
    menu_div.appendChild(menu_links);
    
    
    pages_url.forEach(path => {
        let link_page = document.createElement("a");
        link_page.href = path;
        menu_links.appendChild(link_page);
        link_page.innerText = `${pages_infos[path].nom}`;
    
        if (pages_infos[path].active) {
            link_page.classList = "current_page";
        }
    });
    
})()