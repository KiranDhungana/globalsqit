<!-- mobile view -->
<header class="md:hidden pt-[10px]">
    <div class="header-left">
        <!-- <div class="logo font-[800px] ">
            GLOBAL <span class="text-[#04A558] font-[800]">SQUARE</span>
        </div> -->
        <img src="./images/logo.svg" alt="companylogo">
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

        <div class="hamburger ">
            <div id="toggleButton" class="toggle-btn">
                <svg id="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none">
                    <path d="M3 11H21" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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
<div class="hidden md:block pt-[10px] mx-[132px]">
    <div class="flex  h-[79px] flex-row justify-between items-center ">
        <!-- <div class=" font-[800px] leading-[30px] ">
            GLOBAL <span class="text-[#04A558] font-[800] ">SQUARE</span>
        </div> -->
         <img src="./images/logo.svg" alt="companylogo">
        <div class="flex text-[12px] flex-row items-center gap-[32px] ">
            <div>
                <a href="./jointeam.php" target="blank" >
                Join us ?

                </a>
            </div>
            <a href="./apply.php" >
                <div class="bg-black text-center rounded-[4px]">
                <p class="py-[12px] text-[18px] font-[600px] px-[24px] text-white ">
                    Contact Us
                </p>
            </div>
            </a>
        </div>
    </div>

    <div class="flex leading-[24px] text-[16px] font-[300px] text-[#3D3D3D] flex-row items-center">
        <ul class="flex flex-row gap-[24px]">
            <li>
                <a href="./">
                    Introduction
                </a>
            </li>
            <li>
                <a href="./whychooseus.php">
                    Why Choose us ?
                </a>
            </li>
            <li>
                <a href="./ourservice.php">
                    Our Services
                </a>
            </li>
            <!-- <li>
                <a href="./team.php">
                    Our Team
                </a>
            </li> -->
            <li>
                <a href="./faq.php">
                    FAQs
                </a>
            </li>
        </ul>

    </div>
</div>