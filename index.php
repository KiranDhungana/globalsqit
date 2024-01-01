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
    <style>
    #parent {
        position: relative;
        right: 125px;
    }

    #child {
        position: absolute;
        margin-top: 95px;
        right: 20px;
    }

    #parent1 {
        position: relative;
        left: 155px;
        bottom: 40px;

    }

    #child1 {
        position: absolute;
    }

    #parent2 {
        position: relative;
        left: 145px;
        bottom: 100px;

    }

    #child2 {
        position: absolute;
        bottom: -25px;

    }
    </style>
</head>

<body>



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

    <div class="grid grid-cols-2 items-center mt-[72px] mx-[50px]">
        <div class="text-[40px] font-[500px]">
            Welcome to <span class="text-[#0CB061] font-[700]">Global Square IT</span> Global Square IT - Unleashing
            Digital
            Innovation
            <br>
            <span class="text-[24px] font-[400] leading-[24px] text-[#5F5F61]">
                Connecting Opportunities, Harvesting Success </span>
        </div>
        <div class="flex flex-col  ">
            <div class="flex flex-row justify-end">
                <img id="parent" class="h-[180px] w-[180px]" src="images/gs1.png" alt="globalsquare">
                <div id="child" class="flex flex-col w-[222px]  ">
                    <p class="font-[700] text-[14px]">Design & Development</p>
                    <p class="text-[#A1A1AA] text-[10px]">Global Square: Bridging Design Excellence with Technical
                        Innovation for Unparalleled Development Solutions.</p>
                </div>
            </div>
            <div class="flex flex-row">
                <div id="child1" class="flex flex-col w-[166px]">
                    <p class="font-[700] text-[14px]">Automate with Precision</p>
                    <p class="text-[#A1A1AA] text-[10px]">Global Square's QA Automation: Elevating Quality Assurance
                        through Cutting-edge Solutions.</p>
                </div>
                <img id="parent1" class="h-[141px] w-[105px]" src="images/gs2.png" alt="globalsquare">

            </div>
            <div class="flex flex-row justify-center">
                <div id="child2" class="flex flex-col w-[240px]">
                    <p class="font-[700] w-[140px] text-[14px]">Web/Mobile App Development</p>
                    <p class="text-[#A1A1AA] text-[10px]">Pioneering Seamless Experiences through Expert Web and Mobile
                        App Development</p>
                </div>
                <div class="flex flex-row items-start">
                    <div>
                        <img id="parent2" class="h-[244px] w-[244px]" src="images/gs3.png" alt="globalsquare">

                    </div>
                    <div class="h-[80px] mb-[50px] ml-[90px] w-[80px] bg-[#CEEEE0] rounded-full">
                        <div
                            class="h-[60px] mt-[10px] ml-[10px] w-[60px] bg-[#1FD392] rounded-full flex flex-col items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33"
                                fill="none">
                                <path
                                    d="M16.7044 30.0364C24.0682 30.0364 30.0378 24.0669 30.0378 16.7031C30.0378 9.33929 24.0682 3.36975 16.7044 3.36975C9.34063 3.36975 3.37109 9.33929 3.37109 16.7031C3.37109 24.0669 9.34063 30.0364 16.7044 30.0364Z"
                                    stroke="#136849" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M16.7031 24.703C21.1214 24.703 24.7031 21.1213 24.7031 16.703C24.7031 12.2847 21.1214 8.703 16.7031 8.703C12.2848 8.703 8.70312 12.2847 8.70312 16.703C8.70312 21.1213 12.2848 24.703 16.7031 24.703Z"
                                    stroke="#136849" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M16.7018 19.3696C18.1746 19.3696 19.3685 18.1757 19.3685 16.7029C19.3685 15.2302 18.1746 14.0363 16.7018 14.0363C15.2291 14.0363 14.0352 15.2302 14.0352 16.7029C14.0352 18.1757 15.2291 19.3696 16.7018 19.3696Z"
                                    stroke="#136849" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>

    <script>
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
    </script>
</body>

</html>