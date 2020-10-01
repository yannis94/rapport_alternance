let cards = [];


function changedClass(element, classRemove, classAdd) {
    element.classList.add(classAdd);
    element.classList.remove(classRemove);
}

function changeTestimonials(k, auto) {
    if (auto) {
        nextBullet = document.querySelector(`#testimonial${k}`);
    }
    else {
        nextBullet = document.querySelector(`#${this.id}`);
    }
    
    actualBullet = document.querySelector(".active");
    actualBullet.classList.remove("active");
    nextBullet.classList.add("active");

    cards.forEach(card => {
        if (nextBullet.id === card.classList[0]) {
            changedClass(card, "hide_testimonial", "card_testimonial");
        }
        else {
            changedClass(card, "card_testimonial", "hide_testimonial");
        }
    });

    return 8000;
}

(function() {
    let testimonials = document.querySelectorAll(".card_testimonial");
    let bulletsContainer = document.querySelector("#bullets");
    let k = 1;
    let time = 8000;

    for (i = 0; i < testimonials.length; i++) {
        cards.push(testimonials[i]);

        let div = document.createElement('div');
        let bullet = bulletsContainer.appendChild(div);
        bullet.className = "bullet";
        bullet.id = `testimonial${i+1}`;
        bullet.addEventListener("click", changeTestimonials, auto=false);

        if (i === 0) {
            bullet.classList.add("active");
            continue;
        }
        else {
            changedClass(testimonials[i], "card_testimonial", "hide_testimonial");
        }
    }   

    //loop changing testimonials
    setInterval(() => {
        k++;
        if (k > cards.length) {
            k=1;
        }
        time = changeTestimonials(k, true);
        
    }, time);

})();