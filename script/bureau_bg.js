(function () {
    let div = document.querySelector("#workplace_left");
    let images = [
        'warehouse.jpg',
        'bureau.jpg',
        'vue_bureau.jpg'
    ]
    console.log(images.length)
    let i = 0;

    setInterval(() => {
        if (i >= images.length) {
            i = 0;
        }

        div.style.backgroundImage = `url('images/main/${images[i]}')`;
        i++
    }, 3800);
})()