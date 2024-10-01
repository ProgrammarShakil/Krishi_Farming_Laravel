// MOBILE MENU JS 
// Toggle Mobile Menu
const mobileMenuButton = document.getElementById('mobileMenuButton');
const mobileMenu = document.getElementById('mobileMenu');

mobileMenuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});

// Toggle Mobile Dropdown
const mobileDropdownButton = document.getElementById('mobileDropdownButton');
const mobileDropdownContent = document.getElementById('mobileDropdownContent');

mobileDropdownButton.addEventListener('click', () => {
    mobileDropdownContent.classList.toggle('hidden');
});

// Toggle Desktop Dropdown
const dropdownButton = document.getElementById('dropdownButton');
const dropdownContent = document.getElementById('dropdownContent');

dropdownButton.addEventListener('click', () => {
    dropdownContent.classList.toggle('hidden');
});

// TYPING ANIMATION JS 
const textElement = document.querySelector('.typing-text');
const names = ["Digital", "Smarter"];
let nameIndex = 0;
let charIndex = 0;
let isDeleting = false;

function type() {
    const currentName = names[nameIndex];

    if (isDeleting) {
        charIndex--;
    } else {
        charIndex++;
    }

    textElement.textContent = currentName.slice(0, charIndex);

    if (!isDeleting && charIndex === currentName.length) {
        setTimeout(() => (isDeleting = true), 1000);
    } else if (isDeleting && charIndex === 0) {
        isDeleting = false;
        nameIndex = (nameIndex + 1) % names.length; // Loop between names
    }

    setTimeout(type, isDeleting ? 100 : 150);
}

type();

// PORTFOLIO MODAL CONTROL

function openModal(imageSrc) {
    const modal = document.getElementById('modal');
    const modalImage = document.getElementById('modalImage');

    modalImage.src = imageSrc; // Set the modal image source
    modal.classList.remove('hidden'); // Show the modal
}

function closeModal() {
    const modal = document.getElementById('modal');
    modal.classList.add('hidden'); // Hide the modal
}

// OWL CAROUSEL WITH JQUERY 
$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        loop: true,            // Allows the slider to loop infinitely
        margin: 10,            // Sets the margin between slides
        nav: true,            // Hides the next and prev buttons
        dots: false,            // Enables dots navigation
        autoplay: true,        // Enables autoplay
        autoplayTimeout: 3000, // Time between slides (in milliseconds)
        autoplayHoverPause: true, // Pause on hover
        responsive: {          // Custom settings for different screen sizes
            0: {
                items: 1,      // 1 item on small screens
                nav: true,     // Enable dots on mobile
            },
            600: {
                items: 2,      // 2 items on medium screens
                nav: true,     // Keep dots on tablets
            },
            1000: {
                items: 3,      // 3 items on large screens
                nav: true,     // Keep dots on larger screens
            }
        }
    });
});