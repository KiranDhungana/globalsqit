
 const buttonRight = document.getElementById('slideRight');
    const buttonLeft = document.getElementById('slideLeft');
    console.log(buttonRight)

    buttonRight.onclick = function () {
        console.log("clicked")
      document.getElementById('container').scrollLeft += 300;
    };
    buttonLeft.onclick = function () {
      document.getElementById('container').scrollLeft -= 300;
    };


function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  }
      document.addEventListener('DOMContentLoaded', function() {
          const toggleButton = document.getElementById('toggleButton');
          const icon = document.getElementById('icon');
          let isToggled = false;
  
          toggleButton.addEventListener('click', function() {
              isToggled = !isToggled;
              updateIcon();
          });
  
          function updateIcon() {
              if (isToggled) {
                  // Change the SVG path or attributes for the "on" state
                  icon.innerHTML =
                      '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"> <path d="M18 6L6 18" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M6 6L18 18" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </svg>';
              } else {
                  // Change the SVG path or attributes for the "off" state
  
                  icon.innerHTML =
                      '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"> <path d="M3 11H21" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M3 5.375H21" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M3 16.625H21" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </svg>';
              }
          }
      });
  
      hamburger = document.querySelector(".hamburger");
      nav = document.querySelector("nav");
      hamburger.onclick = function() {
          nav.classList.toggle("active");
      }