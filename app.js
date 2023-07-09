
function prev() {

    document.getElementById('slider-container').scrollLeft -= 400;

}

function next() {

    document.getElementById('slider-container').scrollLeft += 400;

}
//         // function prev() {

// // document.getElementById('slider-container1').scrollLeft -= 100;

// // }

// // function next() {

// // document.getElementById('slider-container1').scrollLeft += 100;

// }

$(".slide a").on("click ", function () {

    $(this).toggleClass('zoomed');

    $(".overlay ").toggleClass('active');

})

const darkSwitch = document.querySelector('#customSwitch1');
darkSwitch.addEventListener('click', function () {
    var element = document.body;
    let divs = document.querySelectorAll('body>div');
    for (div of divs) {
        div.classList.toggle("dark-mode");
    }
    let heads = document.querySelectorAll('section .heading');
    for (head of heads) {
        head.classList.toggle("dark-mode");

    }
    let heads2 = document.querySelectorAll(' .Heading1');
    for (head2 of heads2) {
        head2.classList.toggle("dark-mode");

    }
    let slides = document.querySelectorAll('#slider-container a');
    for (slide of slides) {
        slide.classList.toggle("dark-mode");

    }
    element.classList.toggle("dark-mode");
    let slider = document.querySelector('#slider-container');
    slider.classList.toggle("dark-mode");

    let btn1 = document.querySelector('.btn1');
    btn1.classList.toggle("dark-mode");
    let btn2 = document.querySelector('.btn2');
    btn2.classList.toggle("dark-mode");
    let logo = document.querySelector('.cart');
    logo.classList.toggle("dark-mode");

    let btnNext = document.querySelector('.control-next-btn');
    btnNext.classList.toggle("dark-mode");
    let btnPrev = document.querySelector('.control-prev-btn');
    btnPrev.classList.toggle("dark-mode");
})
