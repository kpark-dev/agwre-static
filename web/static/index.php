<?php
require('includes/header.php');
?>

<div class="main-holder">
  <main class="main-content">
    <!-- banner -->
    <div class="row pt-[31px] md:pt-[68px] pb-[31px] md:pb-[101px] lg:pb-[78px]">
      <div class="fullwidth-col">
        <div class="w-full max-w-[375px] md:max-w-[768px] lg:max-w-[1109px] m-auto min-h-[277px] md:min-h-[624px] lg:min-h-[771px] relative">
          <img src="images/r-architecture-UypLI.png" alt="" class="max-w-[107px] md:max-w-[231px] lg:max-w-[unset] z-[-1] absolute top-[115px] md:top-[245px] lg:top-[309px]" />
          <img src="images/r-architecture-IZwmK.png" alt="" class="max-w-[118px] md:max-w-[254px] lg:max-w-[unset] z-[-1] absolute right-0 top-5 md:top-0" />
          <div class="w-full text-center md:pt-10">
            <p class="text-[67px] md:text-[114px] lg:text-[183px] font-cirka mb-0 leading-[77%]">Find the</p>
            <p class="text-[67px] md:text-[114px] lg:text-[183px] font-cirka mb-0 leading-[77%] relative left-[-35px]">right</p>
            <p class="text-[67px] md:text-[114px] lg:text-[183px] font-cirka mb-0 leading-[77%] relative left-[-50px] md:left-[-80px]">home</p>
            <p class="text-[67px] md:text-[114px] lg:text-[183px] font-cirka mb-0 leading-[77%] relative left-[15px] md:left-[70px] lg:left-[140px]">without</p>
            <p class="text-[67px] md:text-[114px] lg:text-[183px] font-cirka mb-0 leading-[77%]">hassle</p>
          </div>
          <div class="hidden md:block xxl:max-w-[395px] font-cirka xxl:text-[30px] xxl:absolute xxl:right-[-95px] xxl:bottom-[35px] leading-[30px] relative max-w-[unset] text-center xxl:text-left text-[22px] mt-[79px] bottom-[unset] left-0 right-0 xxl:left-[unset]">Looking for a personalized list of homes?</div>
          <p class="hidden md:block relative text-center  xxl:text-left mt-14  xxl:mt-0 right-0 bottom-[unset] text-[15px] tracking-[2px] mb-0 xxl:absolute  xxl:right-[50px] xxl:bottom-[-20px]">Connect wıth us</p>
        </div>
      </div>
    </div>
    <!-- form -->
    <div class="row pb-[76px] md:pb-[150px]">
      <div class="fullwidth-col">
        <div class="hidden m-auto max-w-[1109px] bg-primary shadow-[0px_3px_18px_rgba(0,0,0,0.5_)] rounded-[10px] md:flex flex-col gap-2 items-center justify-center px-[35px] py-[15px] lg:py-[35px]">
          <form class="w-full flex justify-between items-center">
            <input type="text" class="bg-white rounded-[5px] min-w-[200px] lg:min-w-[374px] h-10">
            <div>
              <p class="text-white text-xs md:text-s mb-0">Function</p>
              <details class="dropdown">
                <summary class="flex gap-2 items-center">
                  <p class="text-white mb-0">Residential</p><i class="bg-icon-chevron w-[6px] h-1 no-repeat bg-center">&nbsp;</i>
                </summary>
                <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                  <li><a>Item 1</a></li>
                  <li><a>Item 2</a></li>
                </ul>
              </details>
            </div>
            <div>
              <p class="text-white text-xs md:text-s mb-0">Property Type</p>
              <details class="dropdown">
                <summary class="flex gap-2 items-center">
                  <p class="text-white mb-0">Appartment</p><i class="bg-icon-chevron w-[6px] h-1 no-repeat bg-center">&nbsp;</i>
                </summary>
                <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                  <li><a>Item 1</a></li>
                  <li><a>Item 2</a></li>
                </ul>
              </details>
            </div>
            <div>
              <p class="text-white text-xs md:text-s mb-0">Beds</p>
              <details class="dropdown">
                <summary class="flex gap-2 items-center">
                  <p class="text-white mb-0">3</p><i class="bg-icon-chevron w-[6px] h-1 no-repeat bg-center">&nbsp;</i>
                </summary>
                <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                  <li><a>Item 1</a></li>
                  <li><a>Item 2</a></li>
                </ul>
              </details>
            </div>
            <div>
              <p class="text-white text-xs md:text-s mb-0">Baths</p>
              <details class="dropdown">
                <summary class="flex gap-2 items-center">
                  <p class="text-white mb-0">2</p><i class="bg-icon-chevron w-[6px] h-1 no-repeat bg-center">&nbsp;</i>
                </summary>
                <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                  <li><a>Item 1</a></li>
                  <li><a>Item 2</a></li>
                </ul>
              </details>
            </div>
            <button class="w-10 h-10 bg-white rounded-[5px] flex items-center justify-center"><img src="images/search.svg" loading="lazy" alt="search" /></button>
          </form>
        </div>
        <div class="block md:hidden m-auto px-[39px]">
          <form class="w-full">
            <div class="w-full flex justify-center items-center gap-3 flex-wrap">
              <div class="min-w-[114px] min-h-[90px] bg-[#f8f8f9] border-solid border border-[#707070] rounded-[10px] flex flex-col gap-2 items-center justify-center">
                <p class="text-xxs md:text-s mb-0">Type</p>
                <details class="dropdown">
                  <summary class="flex gap-2 items-center">
                    <p class="text-xs mb-0">Appartment</p><i class="bg-icon-chevron-primary w-[6px] h-1 no-repeat bg-center">&nbsp;</i>
                  </summary>
                  <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                    <li><a>Item 1</a></li>
                    <li><a>Item 2</a></li>
                  </ul>
                </details>
              </div>
              <div class="min-w-[114px] min-h-[90px] bg-[#f8f8f9] border-solid border border-[#707070] rounded-[10px] flex flex-col gap-2 items-center justify-center">
                <p class="text-xxs md:text-s mb-0">Function</p>
                <details class="dropdown">
                  <summary class="flex gap-2 items-center">
                    <p class="text-xs mb-0">Residential</p><i class="bg-icon-chevron-primary w-[6px] h-1 no-repeat bg-center">&nbsp;</i>
                  </summary>
                  <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                    <li><a>Item 1</a></li>
                    <li><a>Item 2</a></li>
                  </ul>
                </details>
              </div>
              <div class="min-w-[114px] min-h-[90px] bg-[#f8f8f9] border-solid border border-[#707070] rounded-[10px] flex flex-col gap-2 items-center justify-center">
                <p class="text-xxs md:text-s mb-0">Beds</p>
                <details class="dropdown">
                  <summary class="flex gap-2 items-center">
                    <p class="text-xs mb-0">3</p><i class="bg-icon-chevron-primary w-[6px] h-1 no-repeat bg-center">&nbsp;</i>
                  </summary>
                  <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                    <li><a>Item 1</a></li>
                    <li><a>Item 2</a></li>
                  </ul>
                </details>
              </div>
              <div class="min-w-[114px] min-h-[90px] bg-[#f8f8f9] border-solid border border-[#707070] rounded-[10px] flex flex-col gap-2 items-center justify-center">
                <p class="text-xxs md:text-s mb-0">Baths</p>
                <details class="dropdown">
                  <summary class="flex gap-2 items-center">
                    <p class="text-xs mb-0">2</p><i class="bg-icon-chevron-primary w-[6px] h-1 no-repeat bg-center">&nbsp;</i>
                  </summary>
                  <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                    <li><a>Item 1</a></li>
                    <li><a>Item 2</a></li>
                  </ul>
                </details>
              </div>
            </div>
            <input type="text" class="bg-white shadow-[0px_3px_12.5px_rgba(0,0,0,0.16_)] rounded-[5px] min-w-[200px] w-full border-[#707070] border-solid border mt-[15px] mb-[34px] lg:min-w-[374px] h-10 ">
            <button class="w-full h-[53px] bg-primary rounded-[5px] flex items-center justify-center">
              <p class="mb-0 text-lightWhite text-[11px] text-center">Search</p>
            </button>
          </form>
          <div class="font-cirka leading-[30px] relative max-w-[unset] text-center text-[20px] mt-[76px] left-0 right-0">Looking for a personalized list of homes?</div>
          <p class="relative text-center mt-[31px] right-0 bottom-[unset] text-[11px] tracking-[2px] mb-0">Connect wıth us</p>
        </div>
      </div>
    </div>
    <!-- market watch -->
    <div class="row py-[90px] md:py-[150px]">
      <div class="fullwidth-col">
        <div class="text-center pb-[57px] md:pb-[68px] lg:pb-[109px]">
          <img src="images/market.svg" class="m-auto max-w-[51px] md:max-w-[64px] lg:max-w-[103px]" alt="market watch" loading="lazy" />
          <p class="mb-0 pt-4 md:pt-3 lg:pt-2.5 text-[30px] md:text-[40px] lg:text-[90px]">Market Watch</p>
          <p class="mb-0 text-xs lg:text-base lg:tracking-[2px]">Get details of houses within your vicinity with market watch</p>
        </div>
        <div class="w-full flex items-center justify-center md:justify-between flex-wrap max-w-[1106px] m-auto gap-y-[39px] gap-x-[53px] md:gap-x-0 md:gap-y-0">
          <div class="flex flex-col gap-[15px] items-center justify-center order-1 md:order-1">
            <p class="mb-0 text-xxs lg:text-s leading-[2px] md:leading-normal">Average sale price</p>
            <p class="mb-0 text-[15px] lg:text-[26px]">$1.3M</p>
            <p class="mb-0 text-xxs lg:text-s leading-[2px] md:leading-normal flex items-center gap-2"><img src="images/icons/icon-chevron-primary.svg" /><span>-15% in past 30 days
              </span></p>
          </div>
          <div class="w-[1px] h-10 bg-primary hidden md:block order-2">&nbsp;</div>
          <div class="flex flex-col gap-[15px] items-center justify-center order-5 md:order-3">
            <p class="mb-0 text-xxs lg:text-s leading-[2px] md:leading-normal">Sales</p>
            <p class="mb-0 text-[15px] lg:text-[26px]">46</p>
            <p class="mb-0 text-xxs lg:text-s leading-[2px] md:leading-normal flex items-center gap-2"><img src="images/icons/icon-chevron-primary.svg" class="rotate-180" /><span>+2% in past 30 days
              </span></p>
          </div>
          <div class="w-[1px] h-10 bg-primary hidden md:block  order-4">&nbsp;</div>
          <div class="flex flex-col gap-[15px] items-center justify-center order-3 md:order-5">
            <p class="mb-0 text-xxs lg:text-s leading-[2px] md:leading-normal">Active listings</p>
            <p class="mb-0 text-[15px] lg:text-[26px]">210</p>
            <p class="mb-0 text-xxs lg:text-s leading-[2px] md:leading-normal">June 12, 2023</p>
          </div>
          <div class="w-[1px] h-10 bg-primary hidden md:block  order-6">&nbsp;</div>
          <div class="flex flex-col gap-[15px] items-center justify-center order-2 md:order-7">
            <p class="mb-0 text-xxs lg:text-s leading-[2px] md:leading-normal">Sales-to-Listing Ratio</p>
            <p class="mb-0 text-[15px] lg:text-[26px]">33%</p>
            <p class="mb-0 text-xxs lg:text-s leading-[2px] md:leading-normal">Seller’s Market</p>
          </div>
          <div class="w-[1px] h-10 bg-primary hidden md:block  order-8">&nbsp;</div>
          <div class="flex flex-col gap-[15px] items-center justify-center order-4 md:order-9">
            <p class="mb-0 text-xxs lg:text-s leading-[2px] md:leading-normal">Average Days on Market</p>
            <p class="mb-0 text-[15px] lg:text-[26px]">113</p>
            <p class="mb-0 text-xxs lg:text-s leading-[2px] md:leading-normal flex items-center gap-2"><img src="images/icons/icon-chevron-primary.svg" /><span>--34% in past 30 days
              </span></p>
          </div>
        </div>
      </div>
    </div>
    <!-- explore homes -->
    <div class="row py-[90px] md:py-[150px]">
      <div class="fullwidth-col">
        <div class="w-full justify-end gap-[60px] items-center max-w-[1106px] m-auto hidden md:flex mb-8 lg:mb-14">
          <a href="#" class="text-xxs md:text-s uppercase">Hot deals</a>
          <a href="#" class="text-xxs md:text-s uppercase">Most viewed</a>
          <a href="#" class="text-xxs md:text-s uppercase">Latest homes</a>
        </div>
        <div class="block md:hidden">
          <p class="text-[45px] leading-[40px] lg:leading-[36px] font-cirka mb-10">Explore homes near you</p>
          <div class="w-full explore-homes-slider slider-with-dots">
            <div class="slider-item">
              <div class="homeItemBlock">
                <img src="images/home-item-1.png" alt="home" loading="lazy" />
                <details class="dropdown !absolute left-0 top-0">
                  <summary class=" text-lightWhite text-[8px] py-[19px] px-6 shadow-[0px_3px_15px_#000000] bg-primary/80 rounded-[5px] flex gap-2 items-center"><span class="tracking-[2px]">Hot deals</span><i class="bg-icon-chevron w-[6px] h-1 no-repeat bg-center">&nbsp;</i></summary>
                  <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                    <li><a>Item 1</a></li>
                    <li><a>Item 2</a></li>
                  </ul>
                </details>
                <div class="contentBlock">
                  <p class="mb-0 text-lightWhite text-base">$1,038,000</p>
                  <div class="w-full gap-6 flex items-start justify-between">
                    <p class="text-lightWhite mb-0 text-md">331 Cactus Sands Ave North LV</p>
                    <div class="min-w-[32px]">
                      <p class="text-lightWhite mb-0 text-[9px]">3 Baths</p>
                      <p class="text-lightWhite mb-0 text-[9px]">2 Beds</p>
                      <p class="text-lightWhite mb-0 text-[9px]">200 sqft</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="slider-item">
              <div class="homeItemBlock">
                <img src="images/home-item-1.png" alt="home" loading="lazy" />
                <details class="dropdown !absolute left-0 top-0">
                  <summary class=" text-lightWhite text-[8px] py-[19px] px-6 shadow-[0px_3px_15px_#000000] bg-primary/80 rounded-[5px] flex gap-2 items-center"><span class="tracking-[2px]">Hot deals</span><i class="bg-icon-chevron w-[6px] h-1 no-repeat bg-center">&nbsp;</i></summary>
                  <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                    <li><a>Item 1</a></li>
                    <li><a>Item 2</a></li>
                  </ul>
                </details>
                <div class="contentBlock">
                  <p class="mb-0 text-lightWhite text-base">$1,038,000</p>
                  <div class="w-full gap-6 flex items-start justify-between">
                    <p class="text-lightWhite mb-0 text-md">331 Cactus Sands Ave North LV</p>
                    <div class="min-w-[32px]">
                      <p class="text-lightWhite mb-0 text-[9px]">3 Baths</p>
                      <p class="text-lightWhite mb-0 text-[9px]">2 Beds</p>
                      <p class="text-lightWhite mb-0 text-[9px]">200 sqft</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="slider-item">
              <div class="homeItemBlock">
                <img src="images/home-item-1.png" alt="home" loading="lazy" />
                <details class="dropdown !absolute left-0 top-0">
                  <summary class=" text-lightWhite text-[8px] py-[19px] px-6 shadow-[0px_3px_15px_#000000] bg-primary/80 rounded-[5px] flex gap-2 items-center"><span class="tracking-[2px]">Hot deals</span><i class="bg-icon-chevron w-[6px] h-1 no-repeat bg-center">&nbsp;</i></summary>
                  <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                    <li><a>Item 1</a></li>
                    <li><a>Item 2</a></li>
                  </ul>
                </details>
                <div class="contentBlock">
                  <p class="mb-0 text-lightWhite text-base">$1,038,000</p>
                  <div class="w-full gap-6 flex items-start justify-between">
                    <p class="text-lightWhite mb-0 text-md">331 Cactus Sands Ave North LV</p>
                    <div class="min-w-[32px]">
                      <p class="text-lightWhite mb-0 text-[9px]">3 Baths</p>
                      <p class="text-lightWhite mb-0 text-[9px]">2 Beds</p>
                      <p class="text-lightWhite mb-0 text-[9px]">200 sqft</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="slider-item">
              <div class="homeItemBlock">
                <img src="images/home-item-1.png" alt="home" loading="lazy" />
                <details class="dropdown !absolute left-0 top-0">
                  <summary class=" text-lightWhite text-[8px] py-[19px] px-6 shadow-[0px_3px_15px_#000000] bg-primary/80 rounded-[5px] flex gap-2 items-center"><span class="tracking-[2px]">Hot deals</span><i class="bg-icon-chevron w-[6px] h-1 no-repeat bg-center">&nbsp;</i></summary>
                  <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                    <li><a>Item 1</a></li>
                    <li><a>Item 2</a></li>
                  </ul>
                </details>
                <div class="contentBlock">
                  <p class="mb-0 text-lightWhite text-base">$1,038,000</p>
                  <div class="w-full gap-6 flex items-start justify-between">
                    <p class="text-lightWhite mb-0 text-md">331 Cactus Sands Ave North LV</p>
                    <div class="min-w-[32px]">
                      <p class="text-lightWhite mb-0 text-[9px]">3 Baths</p>
                      <p class="text-lightWhite mb-0 text-[9px]">2 Beds</p>
                      <p class="text-lightWhite mb-0 text-[9px]">200 sqft</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="py-[70px] max-w-[200px] m-auto">
            <form class="flex flex-col justify-end w-full h-full">
              <p class="max-w-[134px] lg:max-w-[154px] mb-0 text-md lg:text-[33px]">Search for Homes</p>
              <input type="text" class="!outline-none border-b-1 border-solid border-primary border-0 w-full" />
              <button class="ml-auto text-right text-[11px] lg:text-s pt-6 pr-2 tracking-[2px]">Fınd now</button>
            </form>
          </div>
          <div class="w-full">
            <a href="#" class="ml-auto w-[263px] h-[58px] text-lightWhite bg-primary rounded-[5px] text-[11px] text-center block leading-[58px] tracking-[1px] hover:opacity-80">Explore more homes</a>
          </div>
        </div>
        <div class="max-w-[1106px] m-auto hidden md:grid grid-cols-4 gap-3 lg:gap-5">
          <div class="col-span-2">
            <p class="max-w-[unset] md:max-w-[200px] lg:max-w-[352px] text-[50px] lg:text-[90px] leading-[40px] lg:leading-[72px] font-cirka mb-0">Explore homes near you</p>
          </div>
          <div class="col-span-1">
            <div class="homeItemBlock">
              <img src="images/home-item-1.png" alt="home" loading="lazy" />
              <div class="contentHolder">
                <div class="w-full gap-6 flex items-start justify-between">
                  <p class="mb-0 text-lightWhite text-[13px] lg:text-lg">$1,038,000</p>
                  <div>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">3 Baths</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">2 Beds</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">200 sqft</p>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 text-s lg:text-[26px] ">331 Cactus Sands Ave North LV</p>
              </div>
            </div>
          </div>
          <div class="col-span-1">
            <div class="homeItemBlock">
              <img src="images/home-item-2.png" alt="home" loading="lazy" />
              <div class="contentHolder">
                <div class="w-full gap-6 flex items-start justify-between">
                  <p class="mb-0 text-lightWhite text-[13px] lg:text-lg">$1,038,000</p>
                  <div>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">3 Baths</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">2 Beds</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">200 sqft</p>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 text-s lg:text-[26px] ">331 Cactus Sands Ave North LV</p>
              </div>
            </div>
          </div>
          <div class="col-span-1">
            <div class="homeItemBlock">
              <img src="images/home-item-3.png" alt="home" loading="lazy" />
              <div class="contentHolder">
                <div class="w-full gap-6 flex items-start justify-between">
                  <p class="mb-0 text-lightWhite text-[13px] lg:text-lg">$1,038,000</p>
                  <div>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">3 Baths</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">2 Beds</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">200 sqft</p>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 text-s lg:text-[26px] ">331 Cactus Sands Ave North LV</p>
              </div>
            </div>
          </div>
          <div class="col-span-1">
            <div class="homeItemBlock">
              <img src="images/home-item-4.png" alt="home" loading="lazy" />
              <div class="contentHolder">
                <div class="w-full gap-6 flex items-start justify-between">
                  <p class="mb-0 text-lightWhite text-[13px] lg:text-lg">$1,038,000</p>
                  <div>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">3 Baths</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">2 Beds</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">200 sqft</p>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 text-s lg:text-[26px] ">331 Cactus Sands Ave North LV</p>
              </div>
            </div>
          </div>
          <div class="col-span-1">
            <form class="flex flex-col justify-end w-full h-full">
              <p class="max-w-[134px] lg:max-w-[154px] mb-0 text-md lg:text-[33px]">Search for Homes</p>
              <input type="text" class="!outline-none border-b-1 border-solid border-primary border-0 w-full" />
              <button class="ml-auto text-right text-[11px] lg:text-s pt-6 pr-2 tracking-[2px]">Fınd now</button>
            </form>
          </div>
          <div class="col-span-1">
            <div class="homeItemBlock">
              <img src="images/home-item-1.png" alt="home" loading="lazy" />
              <div class="contentHolder">
                <div class="w-full gap-6 flex items-start justify-between">
                  <p class="mb-0 text-lightWhite text-[13px] lg:text-lg">$1,038,000</p>
                  <div>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">3 Baths</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">2 Beds</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">200 sqft</p>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 text-s lg:text-[26px] ">331 Cactus Sands Ave North LV</p>
              </div>
            </div>
          </div>
          <div class="col-span-1">
            <div class="homeItemBlock">
              <img src="images/home-item-5.png" alt="home" loading="lazy" />
              <div class="contentHolder">
                <div class="w-full gap-6 flex items-start justify-between">
                  <p class="mb-0 text-lightWhite text-[13px] lg:text-lg">$1,038,000</p>
                  <div>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">3 Baths</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">2 Beds</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">200 sqft</p>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 text-s lg:text-[26px] ">331 Cactus Sands Ave North LV</p>
              </div>
            </div>
          </div>
          <div class="col-span-1">
            <div class="homeItemBlock">
              <img src="images/home-item-6.png" alt="home" loading="lazy" />
              <div class="contentHolder">
                <div class="w-full gap-6 flex items-start justify-between">
                  <p class="mb-0 text-lightWhite text-[13px] lg:text-lg">$1,038,000</p>
                  <div>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">3 Baths</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">2 Beds</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">200 sqft</p>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 text-s lg:text-[26px] ">331 Cactus Sands Ave North LV</p>
              </div>
            </div>
          </div>
          <div class="col-span-1">
            <div class="homeItemBlock">
              <img src="images/home-item-7.png" alt="home" loading="lazy" />
              <div class="contentHolder">
                <div class="w-full gap-6 flex items-start justify-between">
                  <p class="mb-0 text-lightWhite text-[13px] lg:text-lg">$1,038,000</p>
                  <div>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">3 Baths</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">2 Beds</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">200 sqft</p>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 text-s lg:text-[26px] ">331 Cactus Sands Ave North LV</p>
              </div>
            </div>
          </div>
          <div class="col-spa-1">
            <div class="flex w-full h-full justify-end items-end">
              <a href="#" class="flex flex-col max-w-[131px] lg:max-w-[161px] tracking-[2px] gap-[17px] lg:gap-[38px]">
                <div class="max-w-[47px] lg:max-w-[81px]">
                  <img src="images/plus-primary.svg" class="w-full object-contain" loading="lazy" />
                </div>
                <p class="text-[11px] lg:text-s mb-0">View more homes</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Recently Sold homes -->
    <div class="row py-[90px] md:py-[150px]">
      <div class="fullwidth-col">
        <div class="block md:hidden">
          <p class="text-[45px] leading-[40px] lg:leading-[36px] font-cirka mb-10 max-w-[177px]">Recently Sold homes</p>
          <div class="w-full recent-homes-slider slider-with-dots">
            <div class="slider-item">
              <div class="homeItemBlock">
                <img src="images/home-1.png" alt="home" loading="lazy" class="!min-h-[320px]" />
                <div class="pt-[54px] max-w-[184px] m-auto relative">
                  <p class="mb-4 text-base">$1,038,000</p>
                  <p class="mb-3 text-md">331 Cactus Sands Ave North LV</p>
                  <div class="min-w-[40px] ml-auto text-right">
                    <p class="mb-0 text-[9px]">3 Baths</p>
                    <p class="mb-0 text-[9px]">2 Beds</p>
                    <p class="mb-0 text-[9px]">200 sqft</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="slider-item">
              <div class="homeItemBlock">
                <img src="images/home-1.png" alt="home" loading="lazy" class="!min-h-[320px]" />
                <div class="pt-[54px] max-w-[184px] m-auto relative">
                  <p class="mb-4 text-base">$1,038,000</p>
                  <p class="mb-3 text-md">331 Cactus Sands Ave North LV</p>
                  <div class="min-w-[40px] ml-auto text-right">
                    <p class="mb-0 text-[9px]">3 Baths</p>
                    <p class="mb-0 text-[9px]">2 Beds</p>
                    <p class="mb-0 text-[9px]">200 sqft</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="slider-item">
              <div class="homeItemBlock">
                <img src="images/home-1.png" alt="home" loading="lazy" class="!min-h-[320px]" />
                <div class="pt-[54px] max-w-[184px] m-auto relative">
                  <p class="mb-4 text-base">$1,038,000</p>
                  <p class="mb-3 text-md">331 Cactus Sands Ave North LV</p>
                  <div class="min-w-[40px] ml-auto text-right">
                    <p class="mb-0 text-[9px]">3 Baths</p>
                    <p class="mb-0 text-[9px]">2 Beds</p>
                    <p class="mb-0 text-[9px]">200 sqft</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="slider-item">
              <div class="homeItemBlock">
                <img src="images/home-1.png" alt="home" loading="lazy" class="!min-h-[320px]" />
                <div class="pt-[54px] max-w-[184px] m-auto relative">
                  <p class="mb-4 text-base">$1,038,000</p>
                  <p class="mb-3 text-md">331 Cactus Sands Ave North LV</p>
                  <div class="min-w-[40px] ml-auto text-right">
                    <p class="mb-0 text-[9px]">3 Baths</p>
                    <p class="mb-0 text-[9px]">2 Beds</p>
                    <p class="mb-0 text-[9px]">200 sqft</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="pt-[70px] pb-[30px] max-w-[200px] m-auto">
            <form class="flex flex-col justify-end w-full gap-[45px]">
              <p class="max-w-[127px] mb-0 text-[24px]">Questions? Speak with An advisor Right now</p>
              <button class="ml-auto text-right text-[11px] lg:text-s pt-6 pr-2 tracking-[2px]">Get started</button>
            </form>
          </div>
        </div>
        <div class="max-w-[1106px] m-auto hidden md:grid grid-cols-4 gap-3 lg:gap-5">
          <div class="col-span-1">
            <div class="homeItemBlock">
              <img src="images/home-1.png" alt="home" loading="lazy" />
              <div class="contentHolder">
                <div class="w-full gap-6 flex items-start justify-between">
                  <p class="mb-0 text-lightWhite text-[13px] lg:text-lg">$1,038,000</p>
                  <div>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">3 Baths</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">2 Beds</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">200 sqft</p>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 text-s lg:text-[26px] ">331 Cactus Sands Ave North LV</p>
              </div>
            </div>
          </div>
          <div class="col-span-1">
            <div class="homeItemBlock">
              <img src="images/home-2.png" alt="home" loading="lazy" />
              <div class="contentHolder">
                <div class="w-full gap-6 flex items-start justify-between">
                  <p class="mb-0 text-lightWhite text-[13px] lg:text-lg">$1,038,000</p>
                  <div>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">3 Baths</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">2 Beds</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">200 sqft</p>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 text-s lg:text-[26px] ">331 Cactus Sands Ave North LV</p>
              </div>
            </div>
          </div>
          <div class="col-span-2">
            <p class="max-w-[unset] md:max-w-[200px] lg:max-w-[352px] text-[50px] lg:text-[90px] leading-[40px] lg:leading-[72px] font-cirka mb-0 pl-[26px] lg:pl-[66px]">Recently Sold homes</p>
          </div>
          <div class="col-span-1">
            <div class="w-full flex flex-col justify-between h-full items-start">
              <p class="max-w-[96px] lg:max-w-[210px] mb-0 text-md lg:text-[40px]  leading-[17px] lg:leading-[30px] pt-[19px]">Questions? Speak with An advisor Right now</p>
              <button class="text-[11px] lg:text-s pt-6 pr-2 tracking-[2px]">Get started</button>
            </div>
          </div>
          <div class="col-span-1">
            <div class="homeItemBlock">
              <img src="images/home-3.png" alt="home" loading="lazy" />
              <div class="contentHolder">
                <div class="w-full gap-6 flex items-start justify-between">
                  <p class="mb-0 text-lightWhite text-[13px] lg:text-lg">$1,038,000</p>
                  <div>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">3 Baths</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">2 Beds</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">200 sqft</p>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 text-s lg:text-[26px] ">331 Cactus Sands Ave North LV</p>
              </div>
            </div>
          </div>
          <div class="col-span-1">
            <div class="homeItemBlock">
              <img src="images/home-4.png" alt="home" loading="lazy" />
              <div class="contentHolder">
                <div class="w-full gap-6 flex items-start justify-between">
                  <p class="mb-0 text-lightWhite text-[13px] lg:text-lg">$1,038,000</p>
                  <div>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">3 Baths</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">2 Beds</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">200 sqft</p>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 text-s lg:text-[26px] ">331 Cactus Sands Ave North LV</p>
              </div>
            </div>
          </div>
          <div class="col-span-1">
            <div class="homeItemBlock">
              <img src="images/home-5.png" alt="home" loading="lazy" />
              <div class="contentHolder">
                <div class="w-full gap-6 flex items-start justify-between">
                  <p class="mb-0 text-lightWhite text-[13px] lg:text-lg">$1,038,000</p>
                  <div>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">3 Baths</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">2 Beds</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">200 sqft</p>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 text-s lg:text-[26px] ">331 Cactus Sands Ave North LV</p>
              </div>
            </div>
          </div>
          <div class="col-span-1">
            <div class="homeItemBlock">
              <img src="images/home-7.png" alt="home" loading="lazy" />
              <div class="contentHolder">
                <div class="w-full gap-6 flex items-start justify-between">
                  <p class="mb-0 text-lightWhite text-[13px] lg:text-lg">$1,038,000</p>
                  <div>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">3 Baths</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">2 Beds</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">200 sqft</p>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 text-s lg:text-[26px] ">331 Cactus Sands Ave North LV</p>
              </div>
            </div>
          </div>
          <div class="col-span-1">
            <div class="homeItemBlock">
              <img src="images/home-6.png" alt="home" loading="lazy" />
              <div class="contentHolder">
                <div class="w-full gap-6 flex items-start justify-between">
                  <p class="mb-0 text-lightWhite text-[13px] lg:text-lg">$1,038,000</p>
                  <div>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">3 Baths</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">2 Beds</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">200 sqft</p>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 text-s lg:text-[26px] ">331 Cactus Sands Ave North LV</p>
              </div>
            </div>
          </div>
          <div class="col-span-1">
            <div class="homeItemBlock">
              <img src="images/home-1.png" alt="home" loading="lazy" />
              <div class="contentHolder">
                <div class="w-full gap-6 flex items-start justify-between">
                  <p class="mb-0 text-lightWhite text-[13px] lg:text-lg">$1,038,000</p>
                  <div>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">3 Baths</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">2 Beds</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">200 sqft</p>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 text-s lg:text-[26px] ">331 Cactus Sands Ave North LV</p>
              </div>
            </div>
          </div>
          <div class="col-spa-1">
            <div class="flex w-full h-full justify-end items-end">
              <a href="#" class="flex flex-col max-w-[85px] lg:max-w-[206px] tracking-[2px] gap-[17px] lg:gap-[38px]">
                <div class="max-w-[47px] lg:max-w-[81px]">
                  <img src="images/plus-primary.svg" class="w-full object-contain" loading="lazy" />
                </div>
                <p class="text-[11px] lg:text-s mb-0">View more sold homes</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- testimonials -->
    <div class="row py-[90px] md:py-[150px] !hidden md:!grid">
      <div class="fullwidth-col">
        <div class="max-w-[1106px] m-auto">
          <p class="text-[50px] lg:text-[90px] mb-0">Client success stories</p>
          <p class="text-[11px] lg:text-[17px] mb-[78px] lg:mb-[134px]">See why our clients love working with us</p>
          <div class="testimonial-slider slider-with-dots">
            <div class="slider-item">
              <div class="w-full flex gap-[71px] lg:gap-14 justify-start lg:justify-between">
                <div class="w-full max-w-[156px] lg:max-w-[192px]">
                  <p class="text-md lg:text-lead mb-0">Stephanie Jacobs</p>
                  <p class="text-xs lg:text-base opacity-50 pb-[37px] lg:pb-0">From Atwater Group</p>
                  <div class="with-hover-animation block lg:hidden w-full max-w-[156px] min-h-[176px] max-h-[176px]">
                    <img src="images/r-architecture-UypLI (1).png" class="max-w-[156px] min-h-[176px] max-h-[176px]" loading="lazy" alt="" />
                  </div>
                </div>
                <div class="w-full max-w-[458px]">
                  <p class="mb-0 text-s lg:text-md opacity-75">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet
                  </p>
                </div>
                <div class="with-hover-animation hidden lg:block w-full max-w-[429px]">
                  <img src="images/r-architecture-UypLI (1).png" loading="lazy" alt="" />
                </div>
              </div>
            </div>
            <div class="slider-item">
              <div class="w-full flex gap-[71px] lg:gap-14 justify-start lg:justify-between">
                <div class="w-full max-w-[156px] lg:max-w-[192px]">
                  <p class="text-md lg:text-lead mb-0">Stephanie Jacobs</p>
                  <p class="text-xs lg:text-base opacity-50 pb-[37px] lg:pb-0">From Atwater Group</p>
                  <div class="with-hover-animation block lg:hidden w-full max-w-[156px] min-h-[176px] max-h-[176px]">
                    <img src="images/r-architecture-UypLI (1).png" class="max-w-[156px] min-h-[176px] max-h-[176px]" loading="lazy" alt="" />
                  </div>
                </div>
                <div class="w-full max-w-[458px]">
                  <p class="mb-0 text-s lg:text-md opacity-75">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet
                  </p>
                </div>
                <div class="with-hover-animation hidden lg:block w-full max-w-[429px]">
                  <img src="images/r-architecture-UypLI (1).png" loading="lazy" alt="" />
                </div>
              </div>
            </div>
            <div class="slider-item">
              <div class="w-full flex gap-[71px] lg:gap-14 justify-start lg:justify-between">
                <div class="w-full max-w-[156px] lg:max-w-[192px]">
                  <p class="text-md lg:text-lead mb-0">Stephanie Jacobs</p>
                  <p class="text-xs lg:text-base opacity-50 pb-[37px] lg:pb-0">From Atwater Group</p>
                  <div class="with-hover-animation block lg:hidden w-full max-w-[156px] min-h-[176px] max-h-[176px]">
                    <img src="images/r-architecture-UypLI (1).png" class="max-w-[156px] min-h-[176px] max-h-[176px]" loading="lazy" alt="" />
                  </div>
                </div>
                <div class="w-full max-w-[458px]">
                  <p class="mb-0 text-s lg:text-md opacity-75">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet
                  </p>
                </div>
                <div class="with-hover-animation hidden lg:block w-full max-w-[429px]">
                  <img src="images/r-architecture-UypLI (1).png" loading="lazy" alt="" />
                </div>
              </div>
            </div>
            <div class="slider-item">
              <div class="w-full flex gap-[71px] lg:gap-14 justify-start lg:justify-between">
                <div class="w-full max-w-[156px] lg:max-w-[192px]">
                  <p class="text-md lg:text-lead mb-0">Stephanie Jacobs</p>
                  <p class="text-xs lg:text-base opacity-50 pb-[37px] lg:pb-0">From Atwater Group</p>
                  <div class="with-hover-animation block lg:hidden w-full max-w-[156px] min-h-[176px] max-h-[176px]">
                    <img src="images/r-architecture-UypLI (1).png" class="max-w-[156px] min-h-[176px] max-h-[176px]" loading="lazy" alt="" />
                  </div>
                </div>
                <div class="w-full max-w-[458px]">
                  <p class="mb-0 text-s lg:text-md opacity-75">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet
                  </p>
                </div>
                <div class="with-hover-animation hidden lg:block w-full max-w-[429px]">
                  <img src="images/r-architecture-UypLI (1).png" loading="lazy" alt="" />
                </div>
              </div>
            </div>
            <div class="slider-item">
              <div class="w-full flex gap-[71px] lg:gap-14 justify-start lg:justify-between">
                <div class="w-full max-w-[156px] lg:max-w-[192px]">
                  <p class="text-md lg:text-lead mb-0">Stephanie Jacobs</p>
                  <p class="text-xs lg:text-base opacity-50 pb-[37px] lg:pb-0">From Atwater Group</p>
                  <div class="with-hover-animation block lg:hidden w-full max-w-[156px] min-h-[176px] max-h-[176px]">
                    <img src="images/r-architecture-UypLI (1).png" class="max-w-[156px] min-h-[176px] max-h-[176px]" loading="lazy" alt="" />
                  </div>
                </div>
                <div class="w-full max-w-[458px]">
                  <p class="mb-0 text-s lg:text-md opacity-75">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet
                  </p>
                </div>
                <div class="with-hover-animation hidden lg:block w-full max-w-[429px]">
                  <img src="images/r-architecture-UypLI (1).png" loading="lazy" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- looking for a viewing -->
    <div class="row">
      <div class="fullwidth-col">
        <div class="m-auto bg-primary max-w-[924px] w-full pb-[33px] md:pb-10 pt-[23px] md:pt-10 pr-[50px] md:pr-[55px] pl-[33px] md:pl-[55px]">
          <h2 class="font-cirka text-[30px] md:text-[38px] lg:text-[52px] text-lightWhite mb-0 max-w-[148px] md:max-w-[unset]">Looking to book a viewing?</h2>
          <p class="ml-auto md:ml-0 pt-[115px] md:pt-[53px] lg:pt-[78px] text-lightWhite text-[11px] lg:text-s max-w-[205px] tracking-[2px] mb-[50px] md:mb-[130px] lg:mb-[184px] uppercase">Interested in receiving curated homes from an advisor?</p>
          <div class="text-right">
            <a href="#" class="text-right text-lightWhite text-[11px] lg:text-[15px] tracking-[2px]">
              Connect wıth us now
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- calculators -->
    <div class="row pt-[134px] md:pt-[267px] pb-[134px] md:pb-[300px]">
      <div class="fullwidth-col">
        <div class="w-full max-w-[1007px] m-auto">
          <div class="block md:hidden overflow-hidden h-20">
            <img src="images/Atwater-11.svg" loading="lazy" alt="" class="rotate-[-90deg] w-20 max-h-[181px] m-auto -mt-10" />
          </div>
          <h2 class="pt-6 md:pt-0 font-cirka text-[45px] md:text-[70px] lg:text-[120px] text-center mb-0 md:mb-4">Calculators</h2>
          <p class="text-xs md:text-base opacity-40 md:opacity-100 mb-0 text-center">Calculate your expenses and risks</p>
          <div class="pt-[78px] md:pt-[97px] w-full flex flex-col md:flex-row gap-12 md:gap-[46px] items-center md:items-start justify-between">
            <div class="max-w-[321px] text-center md:text-right flex flex-col gap-12 md:gap-[67px]">
              <div class="w-full">
                <p class="text-xs md:text-[17px] lg:text-[26px] mb-[34px] uppercase">Mortgage Repayment</p>
                <p class="text-xxs md:text-xs lg:text-base mb-0 max-w-[285px] font-light opacity-70">Understand Loan Amortization and Monthly Payment Breakdowns.</p>
              </div>
              <div class="w-full">
                <p class="text-xs md:text-[17px] lg:text-[26px] mb-[34px] uppercase">Property Transfer Tax</p>
                <p class="text-xxs md:text-xs lg:text-base mb-0 max-w-[285px] font-light opacity-70">Estimate the amount of transfer tax you may be required to pay when buying or transferring a property.</p>
              </div>
              <div class="w-full">
                <p class="text-xs md:text-[17px] lg:text-[26px] mb-[34px] uppercase">Refinance</p>
                <p class="text-xxs md:text-xs lg:text-base mb-0 max-w-[285px] font-light opacity-70">Calculate Potential Interest Savings, Lower Monthly Payments, and Evaluate the Benefits of Refinancing.</p>
              </div>
            </div>
            <div class="hidden md:block">
              <img src="images/Atwater-11.svg" loading="lazy" alt="" class="w-full max-w-[251px]" />
            </div>
            <div class="max-w-[321px] text-center md:text-left flex flex-col gap-12 md:gap-[67px]">
              <div class="w-full">
                <p class="text-xs md:text-[17px] lg:text-[26px] mb-[34px] uppercase">Mortgage Calculator</p>
                <p class="text-xxs md:text-xs lg:text-base mb-0 max-w-[285px] font-light opacity-70">Calculate Monthly Payments, Interest Rates, and Total Costs.</p>
              </div>
              <div class="w-full">
                <p class="text-xs md:text-[17px] lg:text-[26px] mb-[34px] uppercase">First-Time Home Buyer</p>
                <p class="text-xxs md:text-xs lg:text-base mb-0 max-w-[285px] font-light opacity-70">Determine the amount of money you need to save for a down payment when purchasing your first home.</p>
              </div>
              <div class="w-full">
                <p class="text-xs md:text-[17px] lg:text-[26px] mb-[34px] uppercase">Affordability</p>
                <p class="text-xxs md:text-xs lg:text-base mb-0 max-w-[285px] font-light opacity-70">Determine Your Budget, Estimate Monthly Costs, and Find Your Ideal Property.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>

<?php
require('includes/footer.php');
?>