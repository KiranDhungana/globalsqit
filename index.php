<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar using HTML, CSS and Javascript</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-wvfXp9d2mPoHvVjKb5Au/ZzRfxHw6NZeWqQwFqquYxRfxI+YBxYUq9UId5tl+2GL9R2lY2zzkXp3o3KXMZaXEZDg=="
        crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@500&family=Plus+Jakarta+Sans:wght@500&family=Raleway:wght@700&display=swap"
        rel="stylesheet">
</head>

<body>

    <!-- pc view  -->
    <header class="hidden sm:block pt-[20px]">
        <div class="flex  h-[79px] flex-row justify-between items-center ">
            <div class=" font-[800px] leading-[30px] ">
                GLOBAL <span class="text-[#04A558]">SQUARE</span>
            </div>
            <div class="flex text-[12px] flex-row items-center gap-[32px] ">
                <div>
                    Join us ?
                </div>
                <div class="bg-black text-center rounded-[2px]">
                    <p class="py-[12px] text-[18px] font-[600px] px-[24px] text-white ">
                        Contact Us
                    </p>
                </div>
            </div>
        </div>

        <div class="flex leading-[24px] text-[16px] font-[300px] text-[#3D3D3D] flex-row items-center">
            <ul class="flex flex-row gap-[24px]">
                <li>
                    Introduction
                </li>
                <li>
                    Why Choose us ?
                </li>
                <li>
                    Our Services
                </li>
                <li>
                    Our Team
                </li>
                <li>
                    FAQs
                </li>
            </ul>

        </div>
    </header>

    <!-- mobile view -->
    <header class="sm:hidden pt-[20px]">
        <div class="header-left">
            <div class="logo font-[800px] ">
                GLOBAL <span class="text-[#04A558]">SQUARE</span>
            </div>
            <nav>
                <ul class="flex gap-[24px] flex-col leading-[24px] text-[16px] font-[300px] text-[#3D3D3D] ">
                    <li>
                        <a href="">Introduction</a>
                    </li>
                    <li>
                        <a href=""> Why Choose us ?</a>
                    </li>
                    <li>
                        <a href="">Our Services</a>
                    </li>
                    <li>
                        <a href="">FAQs</a>
                    </li>

                </ul>

            </nav>
        </div>
        <div class="header-right">
            <div class="login-signup">
                <a href="">Login</a> or <a href="">Signup</a>
            </div>
            <div class="hamburger ">
                <div id="toggleButton" class="toggle-btn">
                    <svg id="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <path d="M3 11H21" stroke="black" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M3 5.375H21" stroke="black" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M3 16.625H21" stroke="black" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>

                </div>

            </div>
        </div>
    </header>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleButton = document.getElementById('toggleButton');
            const icon = document.getElementById('icon');
            let isToggled = false;

            toggleButton.addEventListener('click', function () {
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
        hamburger.onclick = function () {
            nav.classList.toggle("active");
        }
    </script>
</body>

</html>