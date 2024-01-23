<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Globalsquareit</title>
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
    #clippath{
         /* background-repeat: no-repeat; */
  background-size: cover;
        background-image:  url("images/capture.png");
        /* object-fit: cover; */
        border-radius: 15px;

    }
    .mainblock{
position: relative;
    }
    .iconnew{
        position: absolute;
        top: -20px;
        

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


    }
.parentcircle{
 position: relative;
}
.circle1{
 position: absolute;
left:450px;
}

    .why {

        font-size: 40px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        background: var(--linear-green, linear-gradient(92deg, #5EBE90 0.72%, #92C10B 99.28%));
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    </style>
</head>

<body>
     <div class="gototop" >
    <button onclick="topFunction()" >
   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M12 19V5" stroke="#136849" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5 12L12 5L19 12" stroke="#136849" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
   </button>
      </div>
   <?php
    include('header.php');
    ?>
 <div class="grid md:grid-cols-2 items-center mt-[11px] px-[24px] md:px-[132px] md:h-[746px] bg-[#E6FAF1]">
        <div class="text-[40px] font-[500px] mb-[30px]">
            Welcome to <span class="text-[#0CB061] font-[700]">Global Square IT</span>- Unleashing
            Digital
            Innovation
            <br>
            <span class="text-[24px] font-[400] leading-[24px] text-[#5F5F61]">
                Connecting Opportunities, Harvesting Success </span>
        </div>
        <div class="flex flex-col md:mb-[0px] mb-[40px] ">
            <img src="./images/hero.gif" alt="hero">
            <!-- <div class="flex flex-row justify-end">
                <img id="parent" class="h-[180px] w-[180px]" src="images/gs1.png" alt="globalsquare">
                <div id="child" class="flex flex-col w-[222px]  ">
                    <p class="font-[700] text-[14px]">Design & Development</p>
                    <p class="text-[#A1A1AA] text-[10px]">Global Square: Bridging Design Excellence with Technical
                        Innovation for Unparalleled Development Solutions.</p>
                </div>
            </div>
            <div class="flex flex-row pb-[40px]">
                <div id="child1" class="flex flex-col w-[166px]">
                    <p class="font-[700] text-[14px]">Automate with Precision</p>
                    <p class="text-[#A1A1AA] text-[10px]">Global Square's QA Automation: Elevating Quality Assurance
                        through Cutting-edge Solutions.</p>
                </div>
                <img id="parent1" class="h-[141px] w-[105px]" src="images/gs2.png" alt="globalsquare">

            </div>
            <div class="flex flex-row justify-center ">
                <div id="child2" class="flex flex-col w-[240px]">
                    <p class="font-[700] w-[140px] text-[14px]">Web/Mobile App Development</p>
                    <p class="text-[#A1A1AA] text-[10px]">Pioneering Seamless Experiences through Expert Web and Mobile
                        App Development</p>
                </div>
                <img id="parent2" class="h-[244px] w-[244px]" src="images/gs3.png" alt="globalsquare">

            </div> -->
        </div>
    </div>
    <!-- TRUSTED BY SECTION -->
   <!-- <?php
   include("trustedby.php")
   ?> -->
    <!-- Introduction section  -->
    <div class="grid mb-[20px] mt-[20px] gap-[30px]">
        <div class="grid md:grid-cols-2 grid-cols-1 justify-center md:mx-[132px] mx-[48px]">
            <div class="md:flex md:flex-col flex flex-row justify-center " >
                <img style="object-fit: cover;" class="w-[424px] rounded-[8px] h-[348px] " src="images/homepage.jpeg" alt="globalsquare">
            </div>
            <div class="flex flex-col gap-[24px]">
                <div class="text-[#5EBE90] text-[16px] font-[600] ">
                    Introducing
                </div>
                <div class="md:text-[52px] text-[32px] font-[600]">
                    Global Square IT Company
                </div>
                <div class="text-[16px] font-[400] text-[#18181B] text-justify">
                    At Global Square, we are dedicated to transforming your digital ideas into reality. As a leading
                    software development company, we specialize in crafting cutting-edge solutions that empower
                    businesses,
                    streamline processes, and drive results.
                </div>
            </div>
        </div>
        <div class="bg-[#CBD5E1] h-[1px] md:hidden mx-[48px]" >
        </div>
        <div class="grid md:grid-cols-2 grid-cols-1 md:mx-[132px] mx-[48px]">
            <div class="flex flex-col gap-[24px]">
                <div class="md:text-[52px] text-[32px] font-[600]  ">
                    <div class="flex flex-row justify-end md:justify-start" >
                    Our Vision

                    </div>
                </div>
                <div class="text-[16px] font-[400] text-[#18181B] text-justify md:w-[500px]">
                    To be the catalyst of digital transformation, empowering businesses globally through cutting-edge
                    software solutions and innovative technologies.
                </div>
            </div>
                <div class="bg-[#CBD5E1] h-[1px] md:hidden my-[16px]" >
</div>
            <div class="flex flex-col gap-[24px]">
                <div class="md:text-[52px] text-[32px] font-[600]">
                    Our Mission
                </div>
                <div class="text-[16px] font-[400] text-[#18181B] text-justify">
                    We are on a mission to deliver exceptional software solutions that not only meet but exceed our
                    clients'
                    expectations. Through collaborative partnerships, agile methodologies, and a relentless pursuit of
                    innovation, we aim to empower businesses to thrive in the digital age.
                </div>
            </div>
        </div>
            <div class="bg-[#CBD5E1] h-[1px] md:hidden mx-[48px]" >
</div>
        <div class="grid md:grid-cols-2 grid-cols-1 md:mx-[132px] mx-[48px]">
            <div class="flex flex-col gap-[24px]">
                <div class="text-[32px] md:text-[52px]  font-[600]">
                    Our Expertise
                </div>
                <div class="text-[16px] font-[400] text-[#18181B] text-justify md:w-[500px]">
                    At the core of our services is our commitment to excellence in software development. Our experienced
                    team of developers is proficient in a wide array of technologies, ensuring that we can meet the
                    diverse needs of our clients. From web applications and mobile apps to custom software solutions, we
                    have the skills and expertise to bring your vision to life.
                </div>
            </div>
            <div class="flex flex-col gap-[24px]">

                <img class="w-[400px] h-[300px]" src="images/hp8.jpg" alt="homepage">
            </div>

        </div>
    </div>
    <!-- Introduction section end   -->

    <!-- Why choose us section  -->
    <div style="overflow: hidden;" class="md:h-[838px]  mb-[86px]  bg-[#1B1B1B] ">
        <div class="grid md:grid-cols-2 grid-cols-1 md:px-[132px] px-[48px] ">
            <img class="md:hidden block" src="images/whynew1.png" alt="homepage">
            <div class="md:flex flex-row hidden  gap-[20px]">
                
                <div class="flex flex-col gap-[20px]">
                    <div>
                        <img class="h-[380px] w-[272px]" src="images/gsh1.jpeg" alt="homepageimage">
                    </div>
                    <div>
                        <img class="h-[340px] w-[272px]" src="images/gsh3.jpeg" alt="homepageimage">
                    </div>
                    <div>
                        <img class="h-auto w-[272px]" src="images/gsh5.jpeg" alt="homepageimage">
                    </div>

                </div>
                <div class="flex flex-col gap-[20px]">
                    <div>
                        <img class="h-[272px]  w-[272px]" src="images/gsh2.jpeg" alt="homepageimage">
                    </div>
                    <div>
                        <img class="h-[340px] w-[272px]" src="images/gsh4.jpeg" alt="homepageimage">
                    </div>
                    <div>
                        <img class="h-[340px] w-[272px]" src="images/gsh6.jpeg" alt="homepageimage">
                    </div>
                </div>
            </div>
            <!-- 2nd col -->
            <div class="parentcircle md:w-[502px] gap-[32px]  flex flex-col mb-[40px] md:mb-[0px]">
                  <img class="circle1 hidden md:flex" style="width: 478px;height: 478px;" src="./images/why-2.png" alt="why">
                <div class="md:mt-[230px] mt-[20px] flex flex-col gap-[16px]">
                  
                    <div class="why">
                        Why Choose Us?
                    </div>
                    <div class="text-[#A1A1AA] text-[14px] font-[500]">
                        At Global Square, we combine a global presence with local insight. Our team brings a wealth
                        of
                        international experience, ensuring that we understand the unique needs of our clients in
                        various
                        markets.
                    </div>
                </div>

                <div class="flex flex-col text-[20px] font-[500px] text-[#FAFAFA] gap-[16px] underline">
                    <div class="flex flex-row gap-[12px] items-center">
                        Innovation at its core <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                            viewBox="0 0 24 25" fill="none">
                            <path d="M7.00781 17.5L17.0078 7.5" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M7.00781 7.5H17.0078V17.5" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="flex flex-row gap-[12px] items-center">
                        Client-Centric Approach <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                            viewBox="0 0 24 25" fill="none">
                            <path d="M7.00781 17.5L17.0078 7.5" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M7.00781 7.5H17.0078V17.5" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="flex flex-row gap-[12px] items-center">
                        Agile Development Methodology <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                            viewBox="0 0 24 25" fill="none">
                            <path d="M7.00781 17.5L17.0078 7.5" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M7.00781 7.5H17.0078V17.5" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="flex flex-row gap-[12px] items-center">
                        Transparent Communication <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                            viewBox="0 0 24 25" fill="none">
                            <path d="M7.00781 17.5L17.0078 7.5" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M7.00781 7.5H17.0078V17.5" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Why choose us end  -->

    <!-- Services Section -->

    
    <div class="grid mb-[48px]">
        <div class="flex flex-col items-center gap-[12px] ">
            <div  class="hidden md:flex flex-col" >
           <div class=" md:text-[52px] text-[40px] text-center font-[600] text-[#090914]">
                OUR SERVICES
            </div>
            <div class="text-[#667085] text-center md:mx-[192px] mx-[48px]   flex md:flex-row flex-col justify-center text-[14px] md:text-[20px] font-[400]">
                <div>
                    Welcome to Global Square, where innovation meets excellence. Explore our diverse services tailored
                    to
                    propel your business forward, driving sustainable success.
                   </div>
            </div>
            </div>
            <!-- mobile view -->
         <div  class="flex flex-row gap-[8px] items-center mx-[24px]  md:hidden " >
            <div class="flex flex-col" >
                <div>
                    <div class=" md:text-[52px] text-[35px] text-center font-[600] text-[#090914]">
                OUR SERVICES
            </div>
            <div class="text-[#667085] text-center md:mx-[192px]  text-justify   flex md:flex-row flex-col justify-center text-[14px] md:text-[20px] font-[400]">
                <div>
                    Welcome to Global Square, where innovation meets excellence. Explore our diverse services tailored
                    to
                    propel your business forward, driving sustainable success.
                   </div>
            </div>
                </div>
             </div>
                <div class="flex flex-row gap-[8px] pt-[56px]" >
                     <button id="slideLeft" type="button">
                           <div class="rounded-full border-[1px]" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <path d="M8.66683 10.334L5.3335 7.00069L8.66683 3.66736" stroke="#A1A1AA" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                     </button>
    <button id="slideRight" type="button">
             <div class="rounded-full border-[1px]" >
             <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
<path d="M5.3335 10.334L8.66683 7.00069L5.3335 3.66736" stroke="#5EBE90" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                    </div>

    </button>
                 
                     

                </div>
              
         
        
            </div>
            
         
        </div>


         <div id="container"  class="scrol md:mx-[132px] mx-[24px] md:grid grid-cols-3 flex flex-row   pt-[20px] gap-[40px] overflow-x-auto md:overflow-x-hidden   justify-between mb-[64px] mt-[48px]">
            <div  class="mainblock flex flex-col gap-[30px] items-center border-[1px]  rounded-[8px] ">
                <div class="iconnew " style="border-radius: 28px;border: 8px solid #EFF8F4;background: #D8F3E6;" >
              <svg class="h-[24px] w-[24px]" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none">
                    <g clip-path="url(#clip0_476_6882)">
                        <path
                            d="M20.25 4.5H3.75C3.33579 4.5 3 4.83579 3 5.25V18.75C3 19.1642 3.33579 19.5 3.75 19.5H20.25C20.6642 19.5 21 19.1642 21 18.75V5.25C21 4.83579 20.6642 4.5 20.25 4.5Z"
                            stroke="#5EBE90" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M6.375 9C6.99632 9 7.5 8.49632 7.5 7.875C7.5 7.25368 6.99632 6.75 6.375 6.75C5.75368 6.75 5.25 7.25368 5.25 7.875C5.25 8.49632 5.75368 9 6.375 9Z"
                            fill="#5EBE90" />
                        <path
                            d="M10.125 9C10.7463 9 11.25 8.49632 11.25 7.875C11.25 7.25368 10.7463 6.75 10.125 6.75C9.50368 6.75 9 7.25368 9 7.875C9 8.49632 9.50368 9 10.125 9Z"
                            fill="#5EBE90" />
                    </g>
                    <defs>
                        <clipPath id="clip0_476_6882">
                            <rect width="24" height="24" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                </div>
               
                <div class="text-[20px] text-[#101828] mt-[50px] w-[273px] md:w-auto md:px-[10px] text-center font-[500]">
                    Custom Software Development
                    <div class="text-[#667085] pb-[24px] font-[400] text-[16px]  w-auto">
                        Tailored solutions to meet your specific business requirements.
                    </div>

                </div>
            </div>
            <div  class="mainblock flex md:h-auto h-[200px] flex-col gap-[30px] items-center border-[1px] rounded-[8px] ">
                <div class="iconnew" style="border-radius: 28px;border: 8px solid #EFF8F4;background: #D8F3E6;" >
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
             <path d="M20.0625 3.84766H4.0625C2.95793 3.84766 2.0625 4.74309 2.0625 5.84766V15.8477C2.0625 16.9522 2.95793 17.8477 4.0625 17.8477H20.0625C21.1671 17.8477 22.0625 16.9522 22.0625 15.8477V5.84766C22.0625 4.74309 21.1671 3.84766 20.0625 3.84766Z" stroke="#5EBE90" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8.0625 21.8477H16.0625" stroke="#5EBE90" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12.0625 17.8477V21.8477" stroke="#5EBE90" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </div>
               
                <div class="text-[20px]  w-[273px] md:w-auto text-[#101828] mt-[50px] px-[10px] text-center font-[500]">
                Web Application Development
                    <div class="text-[#667085] pb-[24px] font-[400] text-[16px]  w-auto">
                    Responsive and scalable web applications for seamless user experiences.
                    </div>

                </div>
            </div>
            <div  class="mainblock flex flex-col gap-[30px] md:h-auto h-[200px] items-center border-[1px] rounded-[8px] ">
                <div class="iconnew" style="border-radius: 28px;border: 8px solid #EFF8F4;background: #D8F3E6;" >
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M17 2H7C5.89543 2 5 2.89543 5 4V20C5 21.1046 5.89543 22 7 22H17C18.1046 22 19 21.1046 19 20V4C19 2.89543 18.1046 2 17 2Z" stroke="#5EBE90" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M12 18H12.01" stroke="#5EBE90" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
                </div>
               
                <div class="text-[20px] text-[#101828]  w-[273px] md:w-auto mt-[50px] px-[10px] text-center font-[500]">
                Mobile App Development
                    <div class="text-[#667085]  pb-[24px] font-[400] text-[16px]  w-auto">
                    Native and cross-platform mobile apps that engage and captivate users.
                    </div>

                </div>
            </div>
             <div  class="mainblock flex flex-col md:h-auto h-[200px] gap-[30px] md:hidden items-center border-[1px] rounded-[8px] ">
                <div class="iconnew" style="border-radius: 28px;border: 8px solid #EFF8F4;background: #D8F3E6;" >
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 20" fill="none">
  <g clip-path="url(#clip0_476_6911)">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.5918 7.15406C10.998 8.20487 13.252 7.07667 14.1387 8.90541C14.373 9.39008 14.4238 10.054 14.2129 10.5814C14.127 10.7932 14.002 10.9826 13.8301 11.1272C13.7539 11.1903 13.6699 11.2473 13.5762 11.2962C12.4199 11.8949 11.2129 11.0579 10.5742 10.0458C9.98633 9.11312 9.73047 7.95031 9.5918 7.15406ZM19.5332 0H1.41797C0.638672 0 0 0.66592 0 1.47846V17.318C0 18.1305 0.638672 18.7965 1.41797 18.7965H15.5508L14.3262 17.709H1.39062C1.28125 17.709 1.18555 17.6662 1.11328 17.5888C1.04102 17.5135 0.998047 17.4117 0.998047 17.2997V4.14011H0.992188H19.8965V10.1823L20.9512 11.0742V1.47846C20.9512 0.66592 20.3125 0 19.5332 0ZM2.76758 1.66175C2.38086 1.66175 2.06641 1.98961 2.06641 2.39283C2.06641 2.79605 2.38086 3.12188 2.76758 3.12188C3.1543 3.12188 3.46875 2.79401 3.46875 2.39283C3.46875 1.98961 3.1543 1.66175 2.76758 1.66175ZM7.51562 1.66175C7.12891 1.66175 6.81445 1.98961 6.81445 2.39283C6.81445 2.79605 7.12695 3.12188 7.51562 3.12188C7.90234 3.12188 8.2168 2.79401 8.2168 2.39283C8.2168 1.98961 7.90234 1.66175 7.51562 1.66175ZM5.14258 1.66175C4.75586 1.66175 4.44141 1.98961 4.44141 2.39283C4.44141 2.79605 4.75586 3.12188 5.14258 3.12188C5.5293 3.12188 5.84375 2.79401 5.84375 2.39283C5.8418 1.98961 5.5293 1.66175 5.14258 1.66175ZM16.7246 15.1797C17.5078 14.5281 18.1152 13.7766 18.5293 12.9152L23.5684 18.4564C23.9492 18.8311 24.1641 19.1508 23.8457 19.7251C23.6875 19.8941 23.5195 19.9857 23.3418 19.998C23.166 20.0102 22.9805 19.945 22.7871 19.7984L16.7246 15.1797ZM14.0664 11.9642C14.4062 11.7748 14.8711 11.3064 14.9824 10.7952L18.1367 12.5995C17.6816 13.5444 17.1016 14.3529 16.3066 14.9272C15.4766 13.7664 15.0117 13.0659 14.0664 11.9642Z" fill="#5EBE90"/>
  </g>
  <defs>
    <clipPath id="clip0_476_6911">
      <rect width="24" height="20" fill="white"/>
    </clipPath>
  </defs>
</svg>
                </div>
               
                <div class="text-[20px] text-[#101828] w-[273px] md:w-auto mt-[50px] px-[10px] text-center font-[500]">
                UI/UX Design
                    <div class="text-[#667085] pb-[24px] font-[400] text-[16px]  w-auto">
                    Intuitive and visually appealing designs that enhance user satisfaction.                    </div>

                </div>
            </div>
            <div  class="mainblock flex flex-col gap-[30px] md:h-auto h-[200px] md:hidden items-center border-[1px] rounded-[8px] ">
                <div class="iconnew" style="border-radius: 28px;border: 8px solid #EFF8F4;background: #D8F3E6;" >
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<g clip-path="url(#clip0_476_6920)">
<path fill-rule="evenodd" clip-rule="evenodd" d="M21.8878 18.4484C21.8983 18.6974 21.8893 20.1345 21.8614 20.3821L23.1007 20.9743C23.2322 21.0366 23.3178 21.151 23.3442 21.2776L23.872 23.4734C23.9278 23.7055 23.7729 23.9362 23.5255 23.9887C23.279 24.0413 23.034 23.895 22.9788 23.6629L22.4948 21.6528L21.6747 21.2603C21.2614 22.553 20.3029 23.4589 19.1866 23.4589C18.0642 23.4589 17.1012 22.5422 16.6919 21.2378L15.7957 21.6209L15.3844 23.6493C15.3366 23.8832 15.0966 24.037 14.8481 23.992C14.5992 23.947 14.4363 23.721 14.4837 23.487L14.9378 21.2472C14.9627 21.1107 15.0573 20.9879 15.2012 20.9269L16.5107 20.3666C16.4843 20.1228 16.4758 18.6913 16.4858 18.446L15.1036 17.9968C14.9582 17.9499 14.8546 17.8412 14.8138 17.7127L14.3064 16.133C14.2342 15.9042 14.3721 15.6637 14.6151 15.5957C14.8576 15.5272 15.113 15.6576 15.1852 15.8864L15.6239 17.2551L16.7313 17.6147L21.6488 17.6152L22.6626 17.2855L23.1012 15.9164C23.1739 15.688 23.4294 15.5577 23.6724 15.6261C23.7301 15.6423 23.7839 15.6691 23.8306 15.7049C23.8773 15.7406 23.9161 15.7847 23.9448 15.8346C23.9734 15.8846 23.9913 15.9393 23.9974 15.9957C24.0036 16.0521 23.9978 16.1091 23.9806 16.1635L23.4747 17.7436L23.4727 17.7432C23.4521 17.8088 23.4151 17.8688 23.3649 17.9182C23.3147 17.9677 23.2526 18.0051 23.1839 18.0273L21.8878 18.4484ZM2.12365 0H19.8946C20.4762 0 21.0065 0.225066 21.3924 0.587047L21.3949 0.58986C21.7802 0.953717 22.0183 1.45308 22.0183 1.9998V11.9402C21.9401 11.9505 21.8619 11.9669 21.7837 11.9885C21.353 12.1076 20.9965 12.2117 20.6983 12.312V1.9998C20.6983 1.79115 20.6086 1.60219 20.4642 1.46621L20.4617 1.4634C20.3173 1.32742 20.1162 1.24302 19.8946 1.24302H2.12365C1.90307 1.24302 1.70241 1.32836 1.55651 1.46574C1.41062 1.60313 1.32 1.79209 1.32 1.9998V21.7601C1.32 21.9688 1.40963 22.1582 1.55402 22.2942L1.55651 22.2965C1.70141 22.4325 1.90207 22.5174 2.12365 22.5174H13.2946L13.1467 23.2465C13.1114 23.42 13.1054 23.5925 13.1258 23.7599H2.12365C1.54207 23.7599 1.01178 23.5353 0.625892 23.1729L0.623402 23.1705C0.238008 22.8062 0 22.3073 0 21.7601V1.9998C0 1.44933 0.239004 0.948559 0.623402 0.587047C1.0073 0.225066 1.53859 0 2.12365 0ZM8.15452 18.5347C7.88216 18.5347 7.66158 18.3269 7.66158 18.0705C7.66158 17.814 7.88216 17.6063 8.15452 17.6063H12.9167L13.0705 18.0836C13.1213 18.2425 13.1975 18.3949 13.2966 18.5347H8.15452ZM5.03353 17.135C5.58224 17.135 6.02739 17.5537 6.02739 18.0705C6.02739 18.5872 5.58224 19.0059 5.03353 19.0059C4.48481 19.0059 4.04017 18.5872 4.04017 18.0705C4.04017 17.5537 4.48481 17.135 5.03353 17.135ZM8.15452 14.392C7.88216 14.392 7.66158 14.1838 7.66158 13.9274C7.66158 13.6709 7.88216 13.4632 8.15452 13.4632H13.9479C13.9419 13.7385 14.0124 14.0106 14.1525 14.2523L14.1809 14.2997C14.0868 14.3058 13.9922 14.3194 13.8981 14.3395L13.7861 14.3662C13.7577 14.3742 13.7303 14.3827 13.7024 14.392H8.15452ZM5.03353 12.9919C5.58224 12.9919 6.02739 13.4106 6.02739 13.9274C6.02739 14.4441 5.58224 14.8633 5.03353 14.8633C4.48481 14.8633 4.04017 14.4441 4.04017 13.9274C4.04017 13.4106 4.48481 12.9919 5.03353 12.9919ZM8.15452 9.87899C7.88216 9.87899 7.66158 9.6708 7.66158 9.41432C7.66158 9.15784 7.88216 8.95012 8.15452 8.95012H17.3955C17.6679 8.95012 17.8885 9.15784 17.8885 9.41432C17.8885 9.6708 17.6679 9.87899 17.3955 9.87899H8.15452ZM5.4468 8.47608C5.48436 8.43995 5.52915 8.4112 5.5786 8.3915C5.62804 8.3718 5.68115 8.36154 5.73483 8.36132C5.78852 8.36111 5.84172 8.37093 5.89134 8.39023C5.94096 8.40952 5.98602 8.43791 6.0239 8.47373C6.18473 8.62518 6.18473 8.86994 6.02639 9.02374L5.62108 9.41432L6.02639 9.8049C6.18473 9.95636 6.18274 10.1992 6.02191 10.3507C5.86108 10.5017 5.60315 10.4998 5.4468 10.3507L5.04647 9.96433L4.64365 10.3526C4.48481 10.504 4.2244 10.5064 4.06606 10.3549C3.90523 10.2035 3.90523 9.9587 4.06407 9.8049L4.46938 9.41432L4.06407 9.02327C3.90523 8.87229 3.90772 8.6294 4.06855 8.47795C4.22938 8.3265 4.4873 8.32885 4.64365 8.47795L5.04398 8.86432L5.4468 8.47608ZM8.15452 5.36548C7.88216 5.36548 7.66158 5.15776 7.66158 4.90128C7.66158 4.6448 7.88216 4.43708 8.15452 4.43708H17.3955C17.6679 4.43708 17.8885 4.6448 17.8885 4.90128C17.8885 5.15776 17.6679 5.36548 17.3955 5.36548H8.15452ZM3.93361 4.53227C4.12929 4.40848 4.39519 4.45724 4.52813 4.64339L4.74224 4.88393L5.49162 3.98836C5.64149 3.81674 5.91137 3.79142 6.09411 3.93303C6.27635 4.07416 6.30324 4.32877 6.15336 4.49991L5.04797 5.80201C5.01958 5.83624 4.98523 5.86672 4.94539 5.89345C4.74971 6.01676 4.48382 5.96847 4.35037 5.78232L3.8156 5.09259C3.68365 4.90691 3.73743 4.65652 3.93361 4.53227ZM19.6586 15.2904C19.7173 15.1676 19.7711 15.0527 19.8199 14.9477C20.3328 13.8486 20.3995 13.7056 22.1676 13.2175C22.3329 13.172 22.5067 13.2611 22.5555 13.4167C22.6038 13.5724 22.5092 13.7356 22.3439 13.7815C20.8551 14.1923 20.8018 14.3072 20.392 15.1849C20.3348 15.3068 20.272 15.4423 20.1968 15.5971C20.6629 15.9759 21.0284 16.6014 21.2166 17.3577H17.0993C17.2875 16.6014 17.6529 15.9759 18.119 15.5975C18.0528 15.4605 17.9878 15.3229 17.9238 15.1849C17.514 14.3072 17.4607 14.1923 15.9719 13.7815C15.9326 13.7707 15.8959 13.7526 15.864 13.7284C15.8321 13.7042 15.8055 13.6743 15.7858 13.6404C15.7662 13.6066 15.7538 13.5694 15.7494 13.531C15.7451 13.4926 15.7488 13.4538 15.7603 13.4167C15.7838 13.3419 15.8378 13.279 15.9105 13.2416C15.9832 13.2042 16.0687 13.1956 16.1482 13.2175C17.9158 13.7056 17.9826 13.8486 18.4959 14.9481C18.5447 15.0527 18.5985 15.1676 18.6573 15.2904C18.9859 15.1751 19.33 15.1746 19.6586 15.2904ZM19.9334 16.0678C20.1635 16.0678 20.3502 16.2432 20.3502 16.4603C20.3502 16.6764 20.1635 16.8523 19.9334 16.8523C19.7034 16.8523 19.5167 16.6764 19.5167 16.4603C19.5167 16.2432 19.7034 16.0678 19.9334 16.0678ZM18.3824 16.0678C18.6124 16.0678 18.7992 16.2432 18.7992 16.4603C18.7992 16.6764 18.6124 16.8523 18.3824 16.8523C18.1524 16.8523 17.9656 16.6764 17.9656 16.4603C17.9656 16.2432 18.1524 16.0678 18.3824 16.0678Z" fill="#5EBE90"/>
</g>
<defs>
<clipPath id="clip0_476_6920">
<rect width="24" height="24" fill="white"/>
</clipPath>
</defs>
</svg>
                </div>
               
                <div class="text-[20px] text-[#101828] w-[273px] md:w-auto mt-[50px] px-[10px] text-center font-[500]">
                Quality Assurance
                    <div class="text-[#667085] pb-[24px] font-[400] text-[16px]  w-auto">
                    Rigorous testing processes to ensure the reliability and performance of your software.
                    </div>

                </div>
            </div>

            

         </div> 

        <div class="mx-[50px]  flex md:flex-row flex-col  justify-center gap-[35px] ">
        <div   class="mainblock hidden md:flex md:h-auto h-[200px] flex-col gap-[30px] items-center border-[1px] rounded-[8px] ">
                <div class="iconnew" style="border-radius: 28px;border: 8px solid #EFF8F4;background: #D8F3E6;" >
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 20" fill="none">
  <g clip-path="url(#clip0_476_6911)">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.5918 7.15406C10.998 8.20487 13.252 7.07667 14.1387 8.90541C14.373 9.39008 14.4238 10.054 14.2129 10.5814C14.127 10.7932 14.002 10.9826 13.8301 11.1272C13.7539 11.1903 13.6699 11.2473 13.5762 11.2962C12.4199 11.8949 11.2129 11.0579 10.5742 10.0458C9.98633 9.11312 9.73047 7.95031 9.5918 7.15406ZM19.5332 0H1.41797C0.638672 0 0 0.66592 0 1.47846V17.318C0 18.1305 0.638672 18.7965 1.41797 18.7965H15.5508L14.3262 17.709H1.39062C1.28125 17.709 1.18555 17.6662 1.11328 17.5888C1.04102 17.5135 0.998047 17.4117 0.998047 17.2997V4.14011H0.992188H19.8965V10.1823L20.9512 11.0742V1.47846C20.9512 0.66592 20.3125 0 19.5332 0ZM2.76758 1.66175C2.38086 1.66175 2.06641 1.98961 2.06641 2.39283C2.06641 2.79605 2.38086 3.12188 2.76758 3.12188C3.1543 3.12188 3.46875 2.79401 3.46875 2.39283C3.46875 1.98961 3.1543 1.66175 2.76758 1.66175ZM7.51562 1.66175C7.12891 1.66175 6.81445 1.98961 6.81445 2.39283C6.81445 2.79605 7.12695 3.12188 7.51562 3.12188C7.90234 3.12188 8.2168 2.79401 8.2168 2.39283C8.2168 1.98961 7.90234 1.66175 7.51562 1.66175ZM5.14258 1.66175C4.75586 1.66175 4.44141 1.98961 4.44141 2.39283C4.44141 2.79605 4.75586 3.12188 5.14258 3.12188C5.5293 3.12188 5.84375 2.79401 5.84375 2.39283C5.8418 1.98961 5.5293 1.66175 5.14258 1.66175ZM16.7246 15.1797C17.5078 14.5281 18.1152 13.7766 18.5293 12.9152L23.5684 18.4564C23.9492 18.8311 24.1641 19.1508 23.8457 19.7251C23.6875 19.8941 23.5195 19.9857 23.3418 19.998C23.166 20.0102 22.9805 19.945 22.7871 19.7984L16.7246 15.1797ZM14.0664 11.9642C14.4062 11.7748 14.8711 11.3064 14.9824 10.7952L18.1367 12.5995C17.6816 13.5444 17.1016 14.3529 16.3066 14.9272C15.4766 13.7664 15.0117 13.0659 14.0664 11.9642Z" fill="#5EBE90"/>
  </g>
  <defs>
    <clipPath id="clip0_476_6911">
      <rect width="24" height="20" fill="white"/>
    </clipPath>
  </defs>
</svg>
                </div>
               
                <div class="text-[20px] text-[#101828] mt-[50px] px-[10px] text-center font-[500]">
                UI/UX Design
                    <div class="text-[#667085] pb-[24px] font-[400] text-[16px]  w-auto">
                    Intuitive and visually appealing designs that enhance user satisfaction.
                    </div>

                </div>
            </div>
            <div class="mainblock hidden md:flex flex-col md:h-auto h-[200px] gap-[30px] items-center border-[1px] rounded-[8px] ">
                <div class="iconnew" style="border-radius: 28px;border: 8px solid #EFF8F4;background: #D8F3E6;" >
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<g clip-path="url(#clip0_476_6920)">
<path fill-rule="evenodd" clip-rule="evenodd" d="M21.8878 18.4484C21.8983 18.6974 21.8893 20.1345 21.8614 20.3821L23.1007 20.9743C23.2322 21.0366 23.3178 21.151 23.3442 21.2776L23.872 23.4734C23.9278 23.7055 23.7729 23.9362 23.5255 23.9887C23.279 24.0413 23.034 23.895 22.9788 23.6629L22.4948 21.6528L21.6747 21.2603C21.2614 22.553 20.3029 23.4589 19.1866 23.4589C18.0642 23.4589 17.1012 22.5422 16.6919 21.2378L15.7957 21.6209L15.3844 23.6493C15.3366 23.8832 15.0966 24.037 14.8481 23.992C14.5992 23.947 14.4363 23.721 14.4837 23.487L14.9378 21.2472C14.9627 21.1107 15.0573 20.9879 15.2012 20.9269L16.5107 20.3666C16.4843 20.1228 16.4758 18.6913 16.4858 18.446L15.1036 17.9968C14.9582 17.9499 14.8546 17.8412 14.8138 17.7127L14.3064 16.133C14.2342 15.9042 14.3721 15.6637 14.6151 15.5957C14.8576 15.5272 15.113 15.6576 15.1852 15.8864L15.6239 17.2551L16.7313 17.6147L21.6488 17.6152L22.6626 17.2855L23.1012 15.9164C23.1739 15.688 23.4294 15.5577 23.6724 15.6261C23.7301 15.6423 23.7839 15.6691 23.8306 15.7049C23.8773 15.7406 23.9161 15.7847 23.9448 15.8346C23.9734 15.8846 23.9913 15.9393 23.9974 15.9957C24.0036 16.0521 23.9978 16.1091 23.9806 16.1635L23.4747 17.7436L23.4727 17.7432C23.4521 17.8088 23.4151 17.8688 23.3649 17.9182C23.3147 17.9677 23.2526 18.0051 23.1839 18.0273L21.8878 18.4484ZM2.12365 0H19.8946C20.4762 0 21.0065 0.225066 21.3924 0.587047L21.3949 0.58986C21.7802 0.953717 22.0183 1.45308 22.0183 1.9998V11.9402C21.9401 11.9505 21.8619 11.9669 21.7837 11.9885C21.353 12.1076 20.9965 12.2117 20.6983 12.312V1.9998C20.6983 1.79115 20.6086 1.60219 20.4642 1.46621L20.4617 1.4634C20.3173 1.32742 20.1162 1.24302 19.8946 1.24302H2.12365C1.90307 1.24302 1.70241 1.32836 1.55651 1.46574C1.41062 1.60313 1.32 1.79209 1.32 1.9998V21.7601C1.32 21.9688 1.40963 22.1582 1.55402 22.2942L1.55651 22.2965C1.70141 22.4325 1.90207 22.5174 2.12365 22.5174H13.2946L13.1467 23.2465C13.1114 23.42 13.1054 23.5925 13.1258 23.7599H2.12365C1.54207 23.7599 1.01178 23.5353 0.625892 23.1729L0.623402 23.1705C0.238008 22.8062 0 22.3073 0 21.7601V1.9998C0 1.44933 0.239004 0.948559 0.623402 0.587047C1.0073 0.225066 1.53859 0 2.12365 0ZM8.15452 18.5347C7.88216 18.5347 7.66158 18.3269 7.66158 18.0705C7.66158 17.814 7.88216 17.6063 8.15452 17.6063H12.9167L13.0705 18.0836C13.1213 18.2425 13.1975 18.3949 13.2966 18.5347H8.15452ZM5.03353 17.135C5.58224 17.135 6.02739 17.5537 6.02739 18.0705C6.02739 18.5872 5.58224 19.0059 5.03353 19.0059C4.48481 19.0059 4.04017 18.5872 4.04017 18.0705C4.04017 17.5537 4.48481 17.135 5.03353 17.135ZM8.15452 14.392C7.88216 14.392 7.66158 14.1838 7.66158 13.9274C7.66158 13.6709 7.88216 13.4632 8.15452 13.4632H13.9479C13.9419 13.7385 14.0124 14.0106 14.1525 14.2523L14.1809 14.2997C14.0868 14.3058 13.9922 14.3194 13.8981 14.3395L13.7861 14.3662C13.7577 14.3742 13.7303 14.3827 13.7024 14.392H8.15452ZM5.03353 12.9919C5.58224 12.9919 6.02739 13.4106 6.02739 13.9274C6.02739 14.4441 5.58224 14.8633 5.03353 14.8633C4.48481 14.8633 4.04017 14.4441 4.04017 13.9274C4.04017 13.4106 4.48481 12.9919 5.03353 12.9919ZM8.15452 9.87899C7.88216 9.87899 7.66158 9.6708 7.66158 9.41432C7.66158 9.15784 7.88216 8.95012 8.15452 8.95012H17.3955C17.6679 8.95012 17.8885 9.15784 17.8885 9.41432C17.8885 9.6708 17.6679 9.87899 17.3955 9.87899H8.15452ZM5.4468 8.47608C5.48436 8.43995 5.52915 8.4112 5.5786 8.3915C5.62804 8.3718 5.68115 8.36154 5.73483 8.36132C5.78852 8.36111 5.84172 8.37093 5.89134 8.39023C5.94096 8.40952 5.98602 8.43791 6.0239 8.47373C6.18473 8.62518 6.18473 8.86994 6.02639 9.02374L5.62108 9.41432L6.02639 9.8049C6.18473 9.95636 6.18274 10.1992 6.02191 10.3507C5.86108 10.5017 5.60315 10.4998 5.4468 10.3507L5.04647 9.96433L4.64365 10.3526C4.48481 10.504 4.2244 10.5064 4.06606 10.3549C3.90523 10.2035 3.90523 9.9587 4.06407 9.8049L4.46938 9.41432L4.06407 9.02327C3.90523 8.87229 3.90772 8.6294 4.06855 8.47795C4.22938 8.3265 4.4873 8.32885 4.64365 8.47795L5.04398 8.86432L5.4468 8.47608ZM8.15452 5.36548C7.88216 5.36548 7.66158 5.15776 7.66158 4.90128C7.66158 4.6448 7.88216 4.43708 8.15452 4.43708H17.3955C17.6679 4.43708 17.8885 4.6448 17.8885 4.90128C17.8885 5.15776 17.6679 5.36548 17.3955 5.36548H8.15452ZM3.93361 4.53227C4.12929 4.40848 4.39519 4.45724 4.52813 4.64339L4.74224 4.88393L5.49162 3.98836C5.64149 3.81674 5.91137 3.79142 6.09411 3.93303C6.27635 4.07416 6.30324 4.32877 6.15336 4.49991L5.04797 5.80201C5.01958 5.83624 4.98523 5.86672 4.94539 5.89345C4.74971 6.01676 4.48382 5.96847 4.35037 5.78232L3.8156 5.09259C3.68365 4.90691 3.73743 4.65652 3.93361 4.53227ZM19.6586 15.2904C19.7173 15.1676 19.7711 15.0527 19.8199 14.9477C20.3328 13.8486 20.3995 13.7056 22.1676 13.2175C22.3329 13.172 22.5067 13.2611 22.5555 13.4167C22.6038 13.5724 22.5092 13.7356 22.3439 13.7815C20.8551 14.1923 20.8018 14.3072 20.392 15.1849C20.3348 15.3068 20.272 15.4423 20.1968 15.5971C20.6629 15.9759 21.0284 16.6014 21.2166 17.3577H17.0993C17.2875 16.6014 17.6529 15.9759 18.119 15.5975C18.0528 15.4605 17.9878 15.3229 17.9238 15.1849C17.514 14.3072 17.4607 14.1923 15.9719 13.7815C15.9326 13.7707 15.8959 13.7526 15.864 13.7284C15.8321 13.7042 15.8055 13.6743 15.7858 13.6404C15.7662 13.6066 15.7538 13.5694 15.7494 13.531C15.7451 13.4926 15.7488 13.4538 15.7603 13.4167C15.7838 13.3419 15.8378 13.279 15.9105 13.2416C15.9832 13.2042 16.0687 13.1956 16.1482 13.2175C17.9158 13.7056 17.9826 13.8486 18.4959 14.9481C18.5447 15.0527 18.5985 15.1676 18.6573 15.2904C18.9859 15.1751 19.33 15.1746 19.6586 15.2904ZM19.9334 16.0678C20.1635 16.0678 20.3502 16.2432 20.3502 16.4603C20.3502 16.6764 20.1635 16.8523 19.9334 16.8523C19.7034 16.8523 19.5167 16.6764 19.5167 16.4603C19.5167 16.2432 19.7034 16.0678 19.9334 16.0678ZM18.3824 16.0678C18.6124 16.0678 18.7992 16.2432 18.7992 16.4603C18.7992 16.6764 18.6124 16.8523 18.3824 16.8523C18.1524 16.8523 17.9656 16.6764 17.9656 16.4603C17.9656 16.2432 18.1524 16.0678 18.3824 16.0678Z" fill="#5EBE90"/>
</g>
<defs>
<clipPath id="clip0_476_6920">
<rect width="24" height="24" fill="white"/>
</clipPath>
</defs>
</svg>
                </div>
               
                <div class="text-[20px] text-[#101828] mt-[50px] px-[10px] text-center font-[500]">
                Quality Assurance
                    <div class="text-[#667085] pb-[24px] font-[400] text-[16px]  w-auto">
                    Rigorous testing processes to ensure the reliability and performance of your software.
                    </div>

                </div>
            </div>


        </div>
    </div>
    <!-- services section end  -->

    <!-- Our team section  start  -->
    <!-- <div class="grid md:mx-[132px] mx-[48px] mb-[60px] ">
        <div class="flex flex-row rounded-[20px] ">
            <div style="flex:1">
                <div class="text-[52px]  font-[600] text-[#090914] w-[472px] ">
                    Our Teams
                    <div class="text-[18px] text-[#52525B] font-[400]">

                        Meet the Global Square team—a dynamic ensemble of dedicated professionals, collectively steering
                        innovation and excellence.
                    </div>
                </div>
            </div>
            <div>
                <img class="md:w-[326px] h-[336px]" src="images/binay.png" alt="CEO">
            </div>
            <div>
                <img class="md:w-[326px] rounded-tr-[20px] h-[336px]" src="images/asina.png" alt="QA">
            </div>
        </div>


        <div class="flex flex-row  ">
            <div style="flex:1 " class="text-[#74C392] flex flex-row items-end ">
                <div class="pb-[25px] flex flex-row">
                    <div>
                        <a href="./team.php">
                            See all

                        </a>

                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path
                                d="M10.0758 8.22692L17.5004 8.22692M17.5004 8.22692L17.5004 15.6515M17.5004 8.22692L7.9545 17.7729"
                                stroke="#74C392" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>
            <div>
                <img class="md:w-[326px] h-[336px]" src="images/saurab.png" alt="CEO">

            </div>
            <div>
                <img class="md:w-[326px] h-[336px]" src="images/rabin.png" alt="CEO">
            </div>
            <div>
                <img class="md:w-[326px] rounded-br-[20px] h-[336px]" src="images/janak.png" alt="CEO">
            </div>

        </div>

    </div> -->
    <!-- our team section end  -->
   <div  class="items-center justify-center flex md:mx-[132px] mx-[48px] mb-[60px]">
        <div  class="mb-[50px] md:h-[352px] md:w-full  rounded-[15px]">
            <div id="clippath" class="flex md:flex-row flex-col  items-center justify-between  px-[20px] py-[20px]">

                <div class="md:w-[618px] my-[40px]">
                    <div class="text-[#74C392] font-[700] md:text-[28px] text-[24px]">
                        Let’s Build Something Extraordinary
                    </div>
                    <div class="text-[#FAFAFA] md:text-[16px] text-[14px] text-justify">
                        Whether you're a startup with a groundbreaking idea or an established enterprise seeking to
                        enhance
                        your
                        digital presence, Global Square is here to be your technology partner. Let’s embark on a journey
                        of
                        digital
                        innovation together.
                        <br>
                        <br>
                        Lorem ipsum dolor sit amet consectetur. At id est sed tempus vitae. Vulputate scelerisque mauris
                        egestas
                        viverra aenean etiam. Maecenas neque amet sed.
                    </div>
                </div>
                <div style=" overflow:hidden; box-shadow: 2px 2px 2px 0px rgba(255, 255, 255, 0.08) inset;"
                    class="rounded-[16px] md:w-[360px] md:h-[276px] bg-[#1B1B1B] my-[30px]">
                    <div class="flex flex-col mt-[24px] justify-center pl-[18px]">
                        <div>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.4621 18.8721V13.1285C22.4619 12.8767 22.3954 12.6294 22.2694 12.4114C22.1434 12.1934 21.9623 12.0123 21.7442 11.8864L16.7185 9.01464C16.5003 8.88861 16.2527 8.82227 16.0006 8.82227C15.7485 8.82227 15.5009 8.88861 15.2827 9.01464L10.257 11.8864C10.0389 12.0123 9.85782 12.1934 9.7318 12.4114C9.60579 12.6294 9.53932 12.8767 9.53906 13.1285V18.8721C9.53932 19.1239 9.60579 19.3712 9.7318 19.5892C9.85782 19.8072 10.0389 19.9882 10.257 20.1141L15.2827 22.9859C15.5009 23.1119 15.7485 23.1783 16.0006 23.1783C16.2527 23.1783 16.5003 23.1119 16.7185 22.9859L21.7442 20.1141C21.9623 19.9882 22.1434 19.8072 22.2694 19.5892C22.3954 19.3712 22.4619 19.1239 22.4621 18.8721Z"
                                    stroke="#36E993" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9.72656 12.3828L15.9943 16.0085L22.2619 12.3828" stroke="#36E993"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16 23.2369V16" stroke="#36E993" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <circle opacity="0.4" cx="16" cy="16" r="16" fill="#5EBE90" />
                            </svg>
                        </div>
                        <div class="text-[18px] text-[#FFF]">
                            Contact us today to discuss your project and discover how we can turn your vision into
                            reality.
                            <br>
                            <br>
                            <p class="text-[12px]">

                                Email:
                                <span class="text-[#A1A1AA]">
                                    info@globalsquareit.com

                                </span>

                            </p>
                        </div>
                        <div class="flex flex-row justify-between items-center ">
                            <div style="width:fit-content"
                                class="rounded-[4px] flex flex-row  bg-[#74C392] px-[16px] py-[8px] text-[#111015] text-[12px] ">
                                Contact us
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                    fill="none">
                                    <path d="M5.25 12.75L12.75 5.25" stroke="#111015" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M5.25 5.25H12.75V12.75" stroke="#111015" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="146" height="126" viewBox="0 0 146 126" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M150.74 75.64C162.85 68.6302 170.998 55.5336 170.998 40.534C170.998 18.1477 152.85 0 130.464 0C113.385 0 98.7731 10.5626 92.8046 25.5117C85.371 16.8717 74.3571 11.4004 62.0653 11.4004C39.679 11.4004 21.5312 29.5481 21.5312 51.9344C21.5312 62.0135 25.21 71.2333 31.298 78.3245C13.3618 82.5044 0 98.5926 0 117.802C0 140.188 18.1477 158.336 40.534 158.336C55.0081 158.336 67.7102 150.749 74.8811 139.336H150.74V75.64Z"
                                        fill="url(#pattern0)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M150.74 75.64C162.85 68.6302 170.998 55.5336 170.998 40.534C170.998 18.1477 152.85 0 130.464 0C113.385 0 98.7731 10.5626 92.8046 25.5117C85.371 16.8717 74.3571 11.4004 62.0653 11.4004C39.679 11.4004 21.5312 29.5481 21.5312 51.9344C21.5312 62.0135 25.21 71.2333 31.298 78.3245C13.3618 82.5044 0 98.5926 0 117.802C0 140.188 18.1477 158.336 40.534 158.336C55.0081 158.336 67.7102 150.749 74.8811 139.336H150.74V75.64Z"
                                        fill="black" fill-opacity="0.21" />
                                    <defs>
                                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1"
                                            height="1">
                                            <use xlink:href="#image0_476_7013"
                                                transform="matrix(0.00328346 0 0 0.00354614 -0.597028 -0.149875)" />
                                        </pattern>
                                        <image id="image0_476_7013" width="480" height="320"
                                            xlink:href="data:image/jpeg;base64,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" />
                                    </defs>
                                </svg>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
         </div>
    </div>
    <!-- footer  -->
    <?php
    include("./footer.php")
        ?>
<script src="globaljs.js"></script>

</body>

</html>