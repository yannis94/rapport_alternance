(function () {
    let main_div = document.querySelector("#images_collection");
    let blur_div = document.querySelector("#blur_div");
    let blur_div_bg = document.querySelector("#image_zoom");
    let cross = document.querySelector("#cross");
    let change = document.querySelectorAll(".change_img");
    let actual_index;
    let images = [
        "main/bureau.jpg",
        "main/vue_bureau.jpg",
        "main/warehouse.jpg",
        "main/help.jpg",
        "main/impressions.png",
        "main/nbr_contact.png",
        "missions/DESIGN/figma.png",
        "missions/DESIGN/new.png",
        "missions/DESIGN/old.png",
        "missions/DESIGN/wireframe.png",
        "missions/DESIGN/zoning.png",
        "missions/DEV/btn.png",
        "missions/SEO/gestionRetour.png",
        "missions/SEO/newTop0.png",
        "missions/SEO/top0.png",
        "missions/SEO/top0-1.png",
        "missions/SEO/top0_google.png",
        "missions/SEO/who_the_boss.png"
    ]

    function close_zoom() {
        main_div.style.filter = "blur(0px)";
        blur_div.style.display = "none";
        blur_div_bg.style.display = "none";
    }

    change.forEach(btn => {
        btn.addEventListener("click", function() {
            
            if (this.id === "right") {
                
                if (actual_index === images.length - 1) {
                    actual_index = 0
                }
                else {
                    actual_index++;
                }
            }
            else if (this.id === "left") {
                if (actual_index === 0) {
                    actual_index = images.length - 1;
                }
                else {
                    actual_index--;
                }
            }
            else {
                return;
            }

            blur_div_bg.style.backgroundImage = `url("images/${images[actual_index]}")`;

        });
    });

    cross.addEventListener("click", close_zoom);


    function createDiv(bgUrl) {
        div = document.createElement("div");
        main_div.appendChild(div);
        div.style.backgroundImage = `url("images/${bgUrl}")`;
        div.classList.add("image_div");
        
        div.addEventListener("click", function() {
            main_div.style.filter = "blur(5px)";
            blur_div.style.display = "block";
            blur_div_bg.style.display = "block";
            blur_div_bg.style.backgroundImage = `url("images/${bgUrl}")`;

            for (i = 0; i < images.length; i++) {
                if (images[i] === bgUrl) {
                    actual_index = i;
                    return;
                }
            }

        });
    }

    images.forEach(image => {
        if (image === "main/bureau.jpg") {
            image.id = "first_img";
        }
        createDiv(image);
    });

})()