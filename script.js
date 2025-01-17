


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
const itemsToShow = 2; // Number of items to show at once
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
    if (currentIndex < totalItems - 3) {
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
  submenu.addEventListener("click", function (e) {
      e.preventDefault(); // Prevent default behavior of the link
      this.classList.toggle("active"); // Toggle the active class
  });
});

// Counter Animation for Numbers
document.addEventListener("DOMContentLoaded", function () {
  const counters = document.querySelectorAll(".counter");
  const speed = 90; // Adjust speed as needed
  let hasRun = false; // To ensure the counter only runs once

  const runCounter = () => {
      counters.forEach(counter => {
          const target = +counter.getAttribute("data-target");
          const updateCount = () => {
              const current = +counter.innerText;
              const increment = Math.ceil(target / speed);

              if (current < target) {
                  counter.innerText = current + increment;
                  setTimeout(updateCount, 40);
              } else {
                  counter.innerText = target;
              }
          };

          updateCount();
      });
  };

  // Intersection Observer API
  const section = document.querySelector(".custom-requirements-section");

  const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
          if (entry.isIntersecting && !hasRun) {
              hasRun = true; // Prevent running multiple times
              runCounter();
              observer.unobserve(entry.target); // Stop observing after animation runs
          }
      });
  });

  observer.observe(section);
});


// flip 
document.addEventListener("DOMContentLoaded", function () {
  const flipButtons = document.querySelectorAll(".flip-button");
  const backButtons = document.querySelectorAll(".flip-button-back");

  flipButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const card = button.closest(".flip-card-inner");
      card.style.transform = "rotateY(180deg)";
    });
  });

  backButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const card = button.closest(".flip-card-inner");
      card.style.transform = "rotateY(0deg)";
    });
  });
});


// sub menue 
    document.addEventListener("DOMContentLoaded", function () {
        const servicesLink = document.querySelector('[data-toggle="submenu"]');
        const submenu = document.querySelector('.services-menu .submenu');

        servicesLink.addEventListener('click', function (e) {
            e.preventDefault(); // Prevent the default action (navigation)
            submenu.classList.toggle('active'); // Toggle visibility

            // Stop event propagation to avoid immediate closure
            e.stopPropagation();
        });

        // Close the submenu when clicking outside
        document.addEventListener('click', function (e) {
            if (!submenu.contains(e.target) && !servicesLink.contains(e.target)) {
                submenu.classList.remove('active');
            }
        });

        // Smooth scroll to "services" section when submenu link is clicked
        submenu.addEventListener('click', function (e) {
            const target = e.target.closest('a');
            if (target && target.getAttribute('href').startsWith('#')) {
                e.preventDefault();
                const sectionId = target.getAttribute('href').substring(1);
                const section = document.getElementById(sectionId);
                if (section) {
                    section.scrollIntoView({ behavior: 'smooth' });
                    submenu.classList.remove('active'); // Optionally close submenu after click
                }
            }
        });
    });



    // latest 
    document.addEventListener("DOMContentLoaded", function () {
      const servicesLink = document.querySelector('[data-toggle="submenu"]');
      const submenu = document.querySelector('.services-menu .submenu');
  
      // Toggle submenu visibility on click
      servicesLink.addEventListener('click', function (e) {
          e.preventDefault(); // Prevent navigation
          submenu.classList.toggle('active'); // Add or remove "active" class
  
          // Stop event propagation to avoid closure
          e.stopPropagation();
      });
  
      // Close the submenu when clicking outside
      document.addEventListener('click', function (e) {
          if (!submenu.contains(e.target) && !servicesLink.contains(e.target)) {
              submenu.classList.remove('active'); // Remove "active" class
          }
      });
  
      // Smooth scroll for submenu links
      submenu.addEventListener('click', function (e) {
          const target = e.target.closest('a');
          if (target && target.getAttribute('href').startsWith('#')) {
              e.preventDefault();
              const sectionId = target.getAttribute('href').substring(1);
              const section = document.getElementById(sectionId);
              if (section) {
                  section.scrollIntoView({ behavior: 'smooth' });
                  submenu.classList.remove('active'); // Close submenu
              }
          }
      });
  });
  