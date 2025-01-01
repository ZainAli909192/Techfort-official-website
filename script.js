


const navbarToggle = document.querySelector('.navbar-toggle');
const navbarLinks = document.querySelector('.navbar-links');

document.body.addEventListener('click', (e) => {
  if (!navbarToggle.contains(e.target) && !navbarLinks.contains(e.target)) {
    navbarLinks.classList.remove('active');
  }
});


navbarLinks.addEventListener('click', (e) => {
    if (e.target.tagName === 'A') {
        document.querySelectorAll('.navbar-links a').forEach(link => link.classList.remove('active'));
        e.target.classList.add('active');

        // Toggle navbar links visibility on small screens
        navbarLinks.classList.remove('active');
    }
});

// JavaScript for typing and deleting effect
document.addEventListener("DOMContentLoaded", function() {
    const texts = ["Innovating Solutions", "Transforming Ideas", "Leading the Future"];
    const colors = [
        "linear-gradient(to right, #E90074, #FF4191)", // Gradient color 1
        "linear-gradient(to left, #D8EFD3, #55AD9B)", // Gradient color 2
        "linear-gradient(to right, #ff9966, yellow)"  // Gradient color 3
    ];
    let count = 0; 
    let index = 0;
    let currentText = "";
    let letter = "";
    let isDeleting = false;
    const typingElement = document.querySelector(".typing");

    (function type() {
        if (count === texts.length) {
            count = 0;
        }
        currentText = texts[count];

        if (isDeleting) {
            letter = currentText.slice(0, --index);
        } else {
            letter = currentText.slice(0, ++index);
        }

        typingElement.textContent = letter;
        typingElement.style.backgroundImage = colors[count];
        typingElement.style.webkitBackgroundClip = "text";
        typingElement.style.webkitTextFillColor = "transparent";

        if (!isDeleting && letter.length === currentText.length) {
            setTimeout(() => isDeleting = true, 2000); // Pause before deleting
        } else if (isDeleting && letter.length === 0) {
            isDeleting = false;
            count++;
            setTimeout(type, 500); // Pause before typing next text
            return;
        }

        setTimeout(type, isDeleting ? 100 : 150); // Adjust typing and deleting speed
    })();
});

document.querySelector('.navbar-toggle').addEventListener('click', () => {
    document.querySelector('.navbar-links').classList.toggle('active');
});




const feedbackContainer = document.querySelector('.feedback-container');
const feedbackItems = document.querySelectorAll('.feedback-item');
const leftBtn = document.querySelector('.left-btn');
const rightBtn = document.querySelector('.right-btn');

let currentIndex = 0;
const itemsToShow = 3; // Number of items to show at once
const itemWidth = feedbackItems[0].offsetWidth + 20; // Item width including margin
const totalItems = feedbackItems.length;

function updateSliderPosition() {
    const offset = -currentIndex * itemWidth;
    feedbackContainer.style.transform = `translateX(${offset}px)`;
}

function slideLeft() {
    if (currentIndex > 0) {
      currentIndex -= 1; // Changed from itemsToShow to 1
      updateSliderPosition();
    }
  }
  

  function slideRight() {
    if (currentIndex < totalItems - itemsToShow) {
      currentIndex += itemsToShow;
      updateSliderPosition();
    } else {
      currentIndex = 0; // Reset currentIndex to 0 when reaching the end
      updateSliderPosition();
    }
  }
  function slideRightSlow() {
    if (currentIndex < totalItems - 1) {
      currentIndex += 1;
      updateSliderPosition();
    } else {
      currentIndex = 0; // Reset currentIndex to 0 when reaching the end
      updateSliderPosition();
    }
  }
  
  let isAutomaticSliding = true;
  let timeoutId;
  
  setInterval(() => {
    if (isAutomaticSliding) {
      slideRightSlow();
    } 
    // if (!isAutomaticSliding) {
    //   slideLeft();
    // } 
  }, 3000);
  
  leftBtn.addEventListener('click', () => {
    isAutomaticSliding = false;
    clearTimeout(timeoutId);
    timeoutId = setTimeout(() => {
      isAutomaticSliding = true;
    }, 4000); // Resume automatic sliding after 10 seconds
    slideLeft();
  });
  
  rightBtn.addEventListener('click', () => {
    isAutomaticSliding = false;
    clearTimeout(timeoutId);
    timeoutId = setTimeout(() => {
      isAutomaticSliding = true;
    }, 4000); // Resume automatic sliding after 10 seconds
    slideRight();
  });
  
// Set the initial position
updateSliderPosition();


// mob nav services 

document.addEventListener("DOMContentLoaded", function () {
  const servicesMenu = document.querySelector(".services-menu");
  const submenu = document.querySelector(".services-menu .submenu");

  // Add click event to toggle submenu
  servicesMenu.addEventListener("click", function (e) {
      e.preventDefault(); // Prevent default behavior of the link
      this.classList.toggle("active"); // Toggle the active class
  });
});
