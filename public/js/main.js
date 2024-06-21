

<!-- Navbar -->
function setActiveNav() {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.nav a');

    sections.forEach(section => {
        const top = section.offsetTop;
        const height = section.offsetHeight;
        const id = section.getAttribute('id');

        if (window.pageYOffset >= top && window.pageYOffset < top + height) {
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${id}`) {
                    link.classList.add('active');
                }
            });
        }
    });
}

window.addEventListener('scroll', setActiveNav);
<!-- Carousel -->

var content = document.getElementById("content-carousel");
var speed = 2;
var distance = 0;
var frame;
var cardWidth = content.firstElementChild.offsetWidth;

function startCarousel() {
    frame = requestAnimationFrame(startCarousel);
    distance -= speed;
    content.style.transform = "translateX(" + distance + "px)";

    if (distance <= -cardWidth) {
        var firstImg = content.firstElementChild;
        content.appendChild(firstImg);
        distance += cardWidth;
        content.style.transform = "translateX(" + distance + "px)";
    }
}

startCarousel();


<!-- Whatsapp float -->

const floatBtn = document.querySelector('.float-btn');

window.addEventListener('scroll', function() {
    if (window.scrollY === 0) {
        floatBtn.style.display = 'none';
    } else {
        floatBtn.style.display ='block';
    }
});
