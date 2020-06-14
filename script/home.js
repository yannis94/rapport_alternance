let testimonials = document.querySelectorAll(".card_testimonial");
let cards = [];

function changedClass(element, classRemove, classAdd) {
    element.classList.add(classAdd);
    element.classList.remove(classRemove);
}

(function() {
    
    for (i = 0; i < testimonials.length; i++) {
        cards.push(testimonials[i])
        if (i === 0) {
            continue;
        }
        else {
            changedClass(testimonials[i], "card_testimonial", "hide_testimonial");
        }
    }   

    //loop changing testimonials
    setInterval(() => {
        changedClass(cards[0], "card_testimonial", "hide_testimonial");
        oldT = cards.shift();
        newT = cards[0];
        changedClass(newT, "hide_testimonial", "card_testimonial");
        cards.push(oldT);
    }, 5000);

})();