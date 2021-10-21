//Service
//Carousel 

function Carousel(container) {
    // This factory function allows us to grab all the elements we'll need for each carousel
    // And keep them within the individual carousel's scope
    let track = container.querySelector(".track");
    let prev = container.querySelector(".prev");
    let next = container.querySelector(".next");
    let carouselWidth = container.offsetWidth;
    // Each carousel gets a starting index of 0 when created, 
    // but this is updated individually when moveForward() or moveBackward() are called
    let index = 0;

    const getContainer = () => container;
    const getPrev = () => prev;
    const getNext = () => next;

    const moveBackward = () => {
        index--;
        next.classList.remove('hide');
        if (index === 0) {
            prev.classList.remove('show');
        }
        track.style.transform = `translateX(-${index * carouselWidth}px)`;
    }

    const moveForward = () => {
        index++;
        prev.classList.add('show');
        track.style.transform = `translateX(-${index * carouselWidth}px)`;
        if (track.offsetWidth - (index * carouselWidth) < carouselWidth) {
            next.classList.add('hide');
        }
    }

    const resizeCarousel = () => {
        carouselWidth = getContainer().offsetWidth;
    }

    return {
        getPrev,
        getNext,
        moveBackward,
        moveForward,
        resizeCarousel
    };
}

// Create an array ([...]) from a Node List (querySelectorAll), containing all carousels on the page
const carouselList = [...document.querySelectorAll('.carousel-container')];
// Map over the above array and create a new Carousel object from each carousel; put these in carousels array
const carousels = carouselList.map(container => new Carousel(container));

for (let carousel of carousels) {
    // When we click the previous button, run the carousel's moveBackward function
    carousel.getPrev().addEventListener("click", carousel.moveBackward);
    // When we click the next button, run the carousel's moveForward function
    carousel.getNext().addEventListener("click", carousel.moveForward);
}

window.addEventListener('resize', () => {
    for (let carousel of carousels) {
        carousel.resizeCarousel;
    }
})

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}

//Nav Bar

var menuBtn = document.getElementById("menuBtn")
var sideNav = document.getElementById("sideNav")
var mmenu = document.getElementById("menu")

sideNav.style.right = "-250px";

menuBtn.onclick = function() {
    if (sideNav.style.right == "-250px") {
        sideNav.style.right = "0";
        menu.src = "images/CloseMenu.png"
    } else {
        sideNav.style.right = "-250px";
        menu.src = "images/MenuButton.png"
    }
}

//Footer JavaScript Data Injection

var days = 'Monday to Saturday ';
var hours = '- 10am to 5:30pm';
var workdays = days + hours;
var workdaysEl = document.getElementById('workdays');

workdaysEl.textContent = workdays;

var inTouchAddy = '3245 N. Martin Luther King Dr.';
var inTouchAddyEl = document.getElementById('inTouchAddy');

inTouchAddyEl.textContent = inTouchAddy;

var inTouchEmail = 'stylebyjinfo@gmail.com';
var inTouchEmailEl = document.getElementById('inTouchEmail');

inTouchEmailEl.textContent = inTouchEmail;

var inTouchNumber = '414-923-2993'
var inTouchNumberEl = document.getElementById('inTouchNumber');

inTouchNumberEl.textContent = inTouchNumber;