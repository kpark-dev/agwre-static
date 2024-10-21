<?php
require('includes/header.php');
?>

<div class="main-holder">
  <main class="main-content">
    <!-- banner -->
    <div class="row pt-[11px] md:pt-[68px] lg:pt-[75px] pb-[50px] md:pb-[90px] lg:pb-[150px]">
      <div class="fullwidth-col">
        <div class="max-w-[1045px] m-auto">
          <h1 class="text-[45px] leading-[36px] md:text-[79px] md:leading-[63px] lg:text-[120px] lg:leading-[96px] mb-6 md:mb-[59px] lg:mb-[88px] z-[1] relative font-cirka">Explore Neighborhoods</h1>
          <div class="flex items-start justify-between gap-[44px] md:gap-[72px] lg:gap-[138px]">
            <div class="max-w-[321px] md:max-w-[272px] lg:max-w-[388px] w-full">
              <p class="hidden md:block text-[11px] md:text-xs lg:text-md leading-[22px] md:leading-[24px] lg:leading-[32px] mb-11 md:mb-[63px] lg:mb-[137px]">With detailed neighborhood descriptions including local secrets, schools in the area, and real-time updated local market data, you can find invaluable information about the community you want to live in.
              </p>
              <div class="flex items-center mb-[45px]">
                <input type="text" class="!border-0 !outline-0 !ring-0 bg-[#f8f8f9] rounded-[5px] w-[240px] md:w-[190px] lg:w-[286px] h-10 md:h-[37px] lg:h-[56px] p-4" />
                <button class="bg-primary text-white rounded-[5px] font-xxs tracking-[2px] md:w-[87px] w-[80px] lg:w-[96px] h-10 md:h-[37px] lg:h-[56px] p-4 hover:opacity-80">Find</button>
              </div>
              <a href="#" class="ml-auto md:ml-0 text-[10px] md:text-[11px] lg:text-base tracking-[2px]">Search neıghborhoods</a>
            </div>
            <div class="">
              <div class="with-hover-animation">
                <img src="images/r-architecture-irt6n.png" atl="" />
              </div>
            </div>
          </div>
          <!-- mobile only visible -->
          <div class="flex md:hidden items-start justify-between gap-[66px]">
            <div class="max-w-[163px] w-full -mt-2.5">
              <div class="with-hover-animation max-w-[139px]">
                <img src="images/about-2.png" atl="" />
              </div>
            </div>
            <div class="max-w-[119px] min-w-[119px]">
              <!-- mobile text -->
              <p class="pt-[70px] text-[11px] leading-[22px] block md:hidden opacity-75">We are a dedicated team of professionals passionate about helping individuals and businesses navigate the dynamic world of real estate.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- looking for a viewing -->
    <div class="row py-[90px] lg:py-[150px]">
      <div class="fullwidth-col">
        <div class="max-w-[1106px] m-auto">
          <div class="bg-primary max-w-[924px] w-full pb-[33px] md:pb-10 pt-[23px] md:pt-10 pr-[50px] md:pr-[55px] pl-[33px] md:pl-[55px]">
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
    </div>
    <!-- Find a neighborhood -->
    <div class="md:px-5 !px-0  row pt-[90px] pb-[100px] md:pb-[180px] lg:pb-[300px] md:pt-[150px]">
      <div class="fullwidth-col">
        <div class="w-full justify-end gap-[45px] lg:gap-[60px] items-center max-w-[1106px] m-auto hidden md:flex mb-8 lg:mb-14">
          <p class="lg:rotate-[-90deg] mt-[-60px] lg:-mt-2.5 text-xxs md:text-s font-bold absolute lg:relative">Sort by</p>
          <a href="#" class="text-xxs md:text-s">Alphabetıc</a>
          <a href="#" class="text-xxs md:text-s">Avg. Lıst prıce</a>
          <a href="#" class="text-xxs md:text-s">Avg. sold prıce</a>
        </div>
        <div class="block md:hidden">
          <p class="md:px-0 px-5 text-[45px] leading-[40px] lg:leading-[36px] font-cirka mb-10">Find a <br />neighborhood</p>
          <div class="w-full explore-neighborhood-slider slider-with-dots">
            <div class="slider-item">
              <div class="homeItemBlock">
                <img src="images/home-item-1.png" alt="home" loading="lazy" />
                <div class="homeNameOverlay absolute top-0 left-0 right-0 bottom-0 items-center text-center bg-primary/80 p-6 min-h-[136px] flex flex-col gap-[35px] justify-center">
                  <p class="mb-0 text-lightWhite text-[23px] font-cirka">Abbotsford</p>
                </div>
                <div class="contentHolder">
                  <div class="w-full gap-6 flex flex-col items-start justify-between h-full">
                    <div>
                      <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">106 listings</p>
                      <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. list price</p>
                      <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. sold price</p>
                    </div>
                    <div>
                      <p class="mb-0 text-lightWhite text-s lg:text-[28px] font-cirka">Abbotsford</p>
                      <details class="dropdown">
                        <summary class="w-[150px] text-right border-b border-solid border-white"><i class="bg-icon-chevron w-[6px] h-1 bg-no-repeat bg-center">&nbsp;</i></summary>
                        <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                          <li><a>Item 1</a></li>
                          <li><a>Item 2</a></li>
                        </ul>
                      </details>
                    </div>
                  </div>
                  <p class="text-lightWhite mb-0 text-xxs lg:text-xs rotate-[-90deg] absolute  tracking-[2px] inset-y-0 w-full text-center left-[84%]">Select a neighborhood
                  </p>
                </div>
              </div>
            </div>
            <div class="slider-item">
              <div class="homeItemBlock">
                <img src="images/home-item-1.png" alt="home" loading="lazy" />
                <div class="homeNameOverlay absolute top-0 left-0 right-0 bottom-0 items-center text-center bg-primary/80 p-6 min-h-[136px] flex flex-col gap-[35px] justify-center">
                  <p class="mb-0 text-lightWhite text-[23px] font-cirka">Abbotsford</p>
                </div>
                <div class="contentHolder">
                  <div class="w-full gap-6 flex flex-col items-start justify-between h-full">
                    <div>
                      <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">106 listings</p>
                      <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. list price</p>
                      <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. sold price</p>
                    </div>
                    <div>
                      <p class="mb-0 text-lightWhite text-s lg:text-[28px] font-cirka">Abbotsford</p>
                      <details class="dropdown">
                        <summary class="w-[150px] text-right border-b border-solid border-white"><i class="bg-icon-chevron w-[6px] h-1 bg-no-repeat bg-center">&nbsp;</i></summary>
                        <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                          <li><a>Item 1</a></li>
                          <li><a>Item 2</a></li>
                        </ul>
                      </details>
                    </div>
                  </div>
                  <p class="text-lightWhite mb-0 text-xxs lg:text-xs rotate-[-90deg] absolute  tracking-[2px] inset-y-0 w-full text-center left-[84%]">Select a neighborhood
                  </p>
                </div>
              </div>
            </div>
            <div class="slider-item">
              <div class="homeItemBlock">
                <img src="images/home-item-1.png" alt="home" loading="lazy" />
                <div class="homeNameOverlay absolute top-0 left-0 right-0 bottom-0 items-center text-center bg-primary/80 p-6 min-h-[136px] flex flex-col gap-[35px] justify-center">
                  <p class="mb-0 text-lightWhite text-[23px] font-cirka">Abbotsford</p>
                </div>
                <div class="contentHolder">
                  <div class="w-full gap-6 flex flex-col items-start justify-between h-full">
                    <div>
                      <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">106 listings</p>
                      <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. list price</p>
                      <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. sold price</p>
                    </div>
                    <div>
                      <p class="mb-0 text-lightWhite text-s lg:text-[28px] font-cirka">Abbotsford</p>
                      <details class="dropdown">
                        <summary class="w-[150px] text-right border-b border-solid border-white"><i class="bg-icon-chevron w-[6px] h-1 bg-no-repeat bg-center">&nbsp;</i></summary>
                        <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                          <li><a>Item 1</a></li>
                          <li><a>Item 2</a></li>
                        </ul>
                      </details>
                    </div>
                  </div>
                  <p class="text-lightWhite mb-0 text-xxs lg:text-xs rotate-[-90deg] absolute  tracking-[2px] inset-y-0 w-full text-center left-[84%]">Select a neighborhood
                  </p>
                </div>
              </div>
            </div>
            <div class="slider-item">
              <div class="homeItemBlock">
                <img src="images/home-item-1.png" alt="home" loading="lazy" />
                <div class="homeNameOverlay absolute top-0 left-0 right-0 bottom-0 items-center text-center bg-primary/80 p-6 min-h-[136px] flex flex-col gap-[35px] justify-center">
                  <p class="mb-0 text-lightWhite text-[23px] font-cirka">Abbotsford</p>
                </div>
                <div class="contentHolder">
                  <div class="w-full gap-6 flex flex-col items-start justify-between h-full">
                    <div>
                      <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">106 listings</p>
                      <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. list price</p>
                      <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. sold price</p>
                    </div>
                    <div>
                      <p class="mb-0 text-lightWhite text-s lg:text-[28px] font-cirka">Abbotsford</p>
                      <details class="dropdown">
                        <summary class="w-[150px] text-right border-b border-solid border-white"><i class="bg-icon-chevron w-[6px] h-1 bg-no-repeat bg-center">&nbsp;</i></summary>
                        <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                          <li><a>Item 1</a></li>
                          <li><a>Item 2</a></li>
                        </ul>
                      </details>
                    </div>
                  </div>
                  <p class="text-lightWhite mb-0 text-xxs lg:text-xs rotate-[-90deg] absolute  tracking-[2px] inset-y-0 w-full text-center left-[84%]">Select a neighborhood
                  </p>
                </div>
              </div>
            </div>
            <div class="slider-item">
              <div class="homeItemBlock">
                <img src="images/home-item-1.png" alt="home" loading="lazy" />
                <div class="homeNameOverlay absolute top-0 left-0 right-0 bottom-0 items-center text-center bg-primary/80 p-6 min-h-[136px] flex flex-col gap-[35px] justify-center">
                  <p class="mb-0 text-lightWhite text-s lg:text-[28px] font-cirka">Abbotsford</p>
                </div>
                <div class="contentHolder">
                  <div class="w-full gap-6 flex flex-col items-start justify-between h-full">
                    <div>
                      <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">106 listings</p>
                      <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. list price</p>
                      <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. sold price</p>
                    </div>
                    <div>
                      <p class="mb-0 text-lightWhite text-s lg:text-[28px] font-cirka">Abbotsford</p>
                      <details class="dropdown">
                        <summary class="w-[150px] text-right border-b border-solid border-white"><i class="bg-icon-chevron w-[6px] h-1 bg-no-repeat bg-center">&nbsp;</i></summary>
                        <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                          <li><a>Item 1</a></li>
                          <li><a>Item 2</a></li>
                        </ul>
                      </details>
                    </div>
                  </div>
                  <p class="text-lightWhite mb-0 text-xxs lg:text-xs rotate-[-90deg] absolute  tracking-[2px] inset-y-0 w-full text-center left-[84%]">Select a neighborhood
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-[60px] py-[70px] max-w-[200px] m-auto">
            <form class="flex flex-col justify-end w-full h-full">
              <p class="max-w-[134px] lg:max-w-[154px] mb-0 text-md lg:text-[33px] font-cirka">Search For <br />neighborhoods</p>
              <input type="text" class="!outline-none border-b-1 border-solid border-primary border-0 w-full" />
              <button class="ml-auto text-right text-[11px] lg:text-s pt-6 pr-2 tracking-[2px]">Fınd now</button>
            </form>
            </form>
          </div>
        </div>
        <div class="max-w-[1106px] m-auto hidden md:grid grid-cols-4 gap-3 lg:gap-5">
          <div class="col-span-2">
            <p class="max-w-[unset] md:max-w-[200px] lg:max-w-[352px] text-[50px] xxl:text-[90px] leading-[40px] xxl:leading-[72px] font-cirka mb-0">Find a <br />neighborhood</p>
          </div>
          <div class="col-span-1">

            <div class="homeItemBlock">
              <img src="images/home-item-1.png" alt="home" loading="lazy" />
              <div class="homeNameOverlay absolute top-0 left-0 right-0 bottom-0 items-center text-center bg-primary/80 p-6 min-h-[136px] flex flex-col gap-[35px] justify-center">
                <p class="mb-0 text-lightWhite text-s lg:text-[23px] font-cirka">Abbotsford</p>
              </div>
              <div class="contentHolder">
                <div class="w-full gap-6 flex flex-col items-start justify-between h-full">
                  <div>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">106 listings</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. list price</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. sold price</p>
                  </div>
                  <div>
                    <p class="mb-0 text-lightWhite text-s lg:text-[28px] font-cirka">Abbotsford</p>
                    <details class="dropdown">
                      <summary class="w-[150px] text-right border-b border-solid border-white"><i class="bg-icon-chevron w-[6px] h-1 bg-no-repeat bg-center">&nbsp;</i></summary>
                      <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                        <li><a>Item 1</a></li>
                        <li><a>Item 2</a></li>
                      </ul>
                    </details>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 text-xxs lg:text-xs rotate-[-90deg] absolute  tracking-[2px] inset-y-0 w-full text-center left-[88%]">Select a neighborhood
                </p>
              </div>
            </div>
          </div>
          <div class="col-span-1">

            <div class="homeItemBlock">
              <img src="images/home-item-1.png" alt="home" loading="lazy" />
              <div class="homeNameOverlay absolute top-0 left-0 right-0 bottom-0 items-center text-center bg-primary/80 p-6 min-h-[136px] flex flex-col gap-[35px] justify-center">
                <p class="mb-0 text-lightWhite text-s lg:text-[28px] font-cirka">Bowen Island</p>
              </div>
              <div class="contentHolder">
                <div class="w-full gap-6 flex flex-col items-start justify-between h-full">
                  <div>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">106 listings</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. list price</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. sold price</p>
                  </div>
                  <div>
                    <p class="mb-0 text-lightWhite text-s lg:text-[28px] font-cirka">Bowen Island</p>
                    <details class="dropdown">
                      <summary class="w-[150px] text-right border-b border-solid border-white"><i class="bg-icon-chevron w-[6px] h-1 bg-no-repeat bg-center">&nbsp;</i></summary>
                      <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                        <li><a>Item 1</a></li>
                        <li><a>Item 2</a></li>
                      </ul>
                    </details>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 text-xxs lg:text-xs rotate-[-90deg] absolute  tracking-[2px] inset-y-0 w-full text-center left-[88%]">Select a neighborhood
                </p>
              </div>
            </div>
          </div>
          <div class="col-span-1">

            <div class="homeItemBlock">
              <img src="images/home-item-1.png" alt="home" loading="lazy" />
              <div class="homeNameOverlay absolute top-0 left-0 right-0 bottom-0 items-center text-center bg-primary/80 p-6 min-h-[136px] flex flex-col gap-[35px] justify-center">
                <p class="mb-0 text-lightWhite text-s lg:text-[28px] font-cirka">Burnaby East</p>
              </div>
              <div class="contentHolder">
                <div class="w-full gap-6 flex flex-col items-start justify-between h-full">
                  <div>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">106 listings</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. list price</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. sold price</p>
                  </div>
                  <div>
                    <p class="mb-0 text-lightWhite text-s lg:text-[28px] font-cirka">Burnaby East</p>
                    <details class="dropdown">
                      <summary class="w-[150px] text-right border-b border-solid border-white"><i class="bg-icon-chevron w-[6px] h-1 bg-no-repeat bg-center">&nbsp;</i></summary>
                      <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                        <li><a>Item 1</a></li>
                        <li><a>Item 2</a></li>
                      </ul>
                    </details>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 text-xxs lg:text-xs rotate-[-90deg] absolute  tracking-[2px] inset-y-0 w-full text-center left-[88%]">Select a neighborhood
                </p>
              </div>
            </div>
          </div>
          <div class="col-span-1">
            <div class="homeItemBlock">
              <img src="images/home-item-1.png" alt="home" loading="lazy" />
              <div class="homeNameOverlay absolute top-0 left-0 right-0 bottom-0 items-center text-center bg-primary/80 p-6 min-h-[136px] flex flex-col gap-[35px] justify-center">
                <p class="mb-0 text-lightWhite text-s lg:text-[28px] font-cirka">Burnaby North</p>
              </div>
              <div class="contentHolder">
                <div class="w-full gap-6 flex flex-col items-start justify-between h-full">
                  <div>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">106 listings</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. list price</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. sold price</p>
                  </div>
                  <div>
                    <p class="mb-0 text-lightWhite text-s lg:text-[28px] font-cirka">Burnaby North</p>
                    <details class="dropdown">
                      <summary class="w-[150px] text-right border-b border-solid border-white"><i class="bg-icon-chevron w-[6px] h-1 bg-no-repeat bg-center">&nbsp;</i></summary>
                      <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                        <li><a>Item 1</a></li>
                        <li><a>Item 2</a></li>
                      </ul>
                    </details>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 text-xxs lg:text-xs rotate-[-90deg] absolute  tracking-[2px] inset-y-0 w-full text-center left-[88%]">Select a neighborhood
                </p>
              </div>
            </div>
          </div>
          <div class="col-span-1">
            <form class="flex flex-col justify-end w-full h-full">
              <p class="max-w-[134px] lg:max-w-[154px] mb-0 text-md lg:text-[33px] font-cirka">Search for Neighborhoods</p>
              <input type="text" class="!outline-none border-b-1 border-solid border-primary border-0 w-full" />
              <button class="ml-auto text-right text-[11px] lg:text-s pt-6 pr-2 tracking-[2px]">Fınd now</button>
            </form>
          </div>
          <div class="col-span-1">
            <div class="homeItemBlock">
              <img src="images/home-item-1.png" alt="home" loading="lazy" />
              <div class="homeNameOverlay absolute top-0 left-0 right-0 bottom-0 items-center text-center bg-primary/80 p-6 min-h-[136px] flex flex-col gap-[35px] justify-center">
                <p class="mb-0 text-lightWhite text-s lg:text-[28px] font-cirka">Chilliwack</p>
              </div>
              <div class="contentHolder">
                <div class="w-full gap-6 flex flex-col items-start justify-between h-full">
                  <div>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">106 listings</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. list price</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. sold price</p>
                  </div>
                  <div>
                    <p class="mb-0 text-lightWhite text-s lg:text-[28px] font-cirka">Chilliwack</p>
                    <details class="dropdown">
                      <summary class="w-[150px] text-right border-b border-solid border-white"><i class="bg-icon-chevron w-[6px] h-1 bg-no-repeat bg-center">&nbsp;</i></summary>
                      <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                        <li><a>Item 1</a></li>
                        <li><a>Item 2</a></li>
                      </ul>
                    </details>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 text-xxs lg:text-xs rotate-[-90deg] absolute  tracking-[2px] inset-y-0 w-full text-center left-[88%]">Select a neighborhood
                </p>
              </div>
            </div>
          </div>
          <div class="col-span-1">
            <div class="homeItemBlock">
              <img src="images/home-item-1.png" alt="home" loading="lazy" />
              <div class="homeNameOverlay absolute top-0 left-0 right-0 bottom-0 items-center text-center bg-primary/80 p-6 min-h-[136px] flex flex-col gap-[35px] justify-center">
                <p class="mb-0 text-lightWhite text-s lg:text-[28px] font-cirka">Burnaby East</p>
              </div>
              <div class="contentHolder">
                <div class="w-full gap-6 flex flex-col items-start justify-between h-full">
                  <div>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">106 listings</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. list price</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. sold price</p>
                  </div>
                  <div>
                    <p class="mb-0 text-lightWhite text-s lg:text-[28px] font-cirka">Burnaby East</p>
                    <details class="dropdown">
                      <summary class="w-[150px] text-right border-b border-solid border-white"><i class="bg-icon-chevron w-[6px] h-1 bg-no-repeat bg-center">&nbsp;</i></summary>
                      <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                        <li><a>Item 1</a></li>
                        <li><a>Item 2</a></li>
                      </ul>
                    </details>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 text-xxs lg:text-xs rotate-[-90deg] absolute  tracking-[2px] inset-y-0 w-full text-center left-[88%]">Select a neighborhood
                </p>
              </div>
            </div>
          </div>
          <div class="col-span-1">
            <div class="homeItemBlock">
              <img src="images/home-item-1.png" alt="home" loading="lazy" />
              <div class="homeNameOverlay absolute top-0 left-0 right-0 bottom-0 items-center text-center bg-primary/80 p-6 min-h-[136px] flex flex-col gap-[35px] justify-center">
                <p class="mb-0 text-lightWhite text-s lg:text-[28px] font-cirka">Burnaby North</p>
              </div>
              <div class="contentHolder">
                <div class="w-full gap-6 flex flex-col items-start justify-between h-full">
                  <div>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">106 listings</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. list price</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. sold price</p>
                  </div>
                  <div>
                    <p class="mb-0 text-lightWhite text-s lg:text-[28px] font-cirka">Burnaby North</p>
                    <details class="dropdown">
                      <summary class="w-[150px] text-right border-b border-solid border-white"><i class="bg-icon-chevron w-[6px] h-1 bg-no-repeat bg-center">&nbsp;</i></summary>
                      <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                        <li><a>Item 1</a></li>
                        <li><a>Item 2</a></li>
                      </ul>
                    </details>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 text-xxs lg:text-xs rotate-[-90deg] absolute  tracking-[2px] inset-y-0 w-full text-center left-[88%]">Select a neighborhood
                </p>
              </div>
            </div>
          </div>
          <div class="col-span-1">
            <div class="homeItemBlock">
              <img src="images/home-item-1.png" alt="home" loading="lazy" />
              <div class="homeNameOverlay absolute top-0 left-0 right-0 bottom-0 items-center text-center bg-primary/80 p-6 min-h-[136px] flex flex-col gap-[35px] justify-center">
                <p class="mb-0 text-lightWhite text-s lg:text-[28px] font-cirka">Burnaby South</p>
              </div>
              <div class="contentHolder">
                <div class="w-full gap-6 flex flex-col items-start justify-between h-full">
                  <div>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">106 listings</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. list price</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. sold price</p>
                  </div>
                  <div>
                    <p class="mb-0 text-lightWhite text-s lg:text-[28px] font-cirka">Burnaby South</p>
                    <details class="dropdown">
                      <summary class="w-[150px] text-right border-b border-solid border-white"><i class="bg-icon-chevron w-[6px] h-1 bg-no-repeat bg-center">&nbsp;</i></summary>
                      <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                        <li><a>Item 1</a></li>
                        <li><a>Item 2</a></li>
                      </ul>
                    </details>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 text-xxs lg:text-xs rotate-[-90deg] absolute  tracking-[2px] inset-y-0 w-full text-center left-[88%]">Select a neighborhood
                </p>
              </div>
            </div>
          </div>
          <div class="col-span-1">
            <div class="homeItemBlock">
              <img src="images/home-item-1.png" alt="home" loading="lazy" />
              <div class="homeNameOverlay absolute top-0 left-0 right-0 bottom-0 items-center text-center bg-primary/80 p-6 min-h-[136px] flex flex-col gap-[35px] justify-center">
                <p class="mb-0 text-lightWhite text-s lg:text-[28px] font-cirka">Bowen Island</p>
              </div>
              <div class="contentHolder">
                <div class="w-full gap-6 flex flex-col items-start justify-between h-full">
                  <div>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">106 listings</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. list price</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. sold price</p>
                  </div>
                  <div>
                    <p class="mb-0 text-lightWhite text-s lg:text-[28px] font-cirka">Bowen Island</p>
                    <details class="dropdown">
                      <summary class="w-[150px] text-right border-b border-solid border-white"><i class="bg-icon-chevron w-[6px] h-1 bg-no-repeat bg-center">&nbsp;</i></summary>
                      <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                        <li><a>Item 1</a></li>
                        <li><a>Item 2</a></li>
                      </ul>
                    </details>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 text-xxs lg:text-xs rotate-[-90deg] absolute  tracking-[2px] inset-y-0 w-full text-center left-[88%]">Select a neighborhood
                </p>
              </div>
            </div>
          </div>
          <div class="col-span-1">
            <div class="homeItemBlock">
              <img src="images/home-item-1.png" alt="home" loading="lazy" />
              <div class="homeNameOverlay absolute top-0 left-0 right-0 bottom-0 items-center text-center bg-primary/80 p-6 min-h-[136px] flex flex-col gap-[35px] justify-center">
                <p class="mb-0 text-lightWhite text-s lg:text-[28px] font-cirka">Burnaby East</p>
              </div>
              <div class="contentHolder">
                <div class="w-full gap-6 flex flex-col items-start justify-between h-full">
                  <div>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">106 listings</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. list price</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. sold price</p>
                  </div>
                  <div>
                    <p class="mb-0 text-lightWhite text-s lg:text-[28px] font-cirka">Burnaby East</p>
                    <details class="dropdown">
                      <summary class="w-[150px] text-right border-b border-solid border-white"><i class="bg-icon-chevron w-[6px] h-1 bg-no-repeat bg-center">&nbsp;</i></summary>
                      <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                        <li><a>Item 1</a></li>
                        <li><a>Item 2</a></li>
                      </ul>
                    </details>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 text-xxs lg:text-xs rotate-[-90deg] absolute  tracking-[2px] inset-y-0 w-full text-center left-[88%]">Select a neighborhood
                </p>
              </div>
            </div>
          </div>
          <div class="col-span-1">
            <div class="homeItemBlock">
              <img src="images/home-item-1.png" alt="home" loading="lazy" />
              <div class="homeNameOverlay absolute top-0 left-0 right-0 bottom-0 items-center text-center bg-primary/80 p-6 min-h-[136px] flex flex-col gap-[35px] justify-center">
                <p class="mb-0 text-lightWhite text-s lg:text-[28px] font-cirka">Burnaby North</p>
              </div>
              <div class="contentHolder">
                <div class="w-full gap-6 flex flex-col items-start justify-between h-full">
                  <div>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">106 listings</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. list price</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. sold price</p>
                  </div>
                  <div>
                    <p class="mb-0 text-lightWhite text-s lg:text-[28px] font-cirka">Burnaby North</p>
                    <details class="dropdown">
                      <summary class="w-[150px] text-right border-b border-solid border-white"><i class="bg-icon-chevron w-[6px] h-1 bg-no-repeat bg-center">&nbsp;</i></summary>
                      <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                        <li><a>Item 1</a></li>
                        <li><a>Item 2</a></li>
                      </ul>
                    </details>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 text-xxs lg:text-xs rotate-[-90deg] absolute  tracking-[2px] inset-y-0 w-full text-center left-[88%]">Select a neighborhood
                </p>
              </div>
            </div>
          </div>
          <div class="col-span-1">
            <div class="homeItemBlock">
              <img src="images/home-item-1.png" alt="home" loading="lazy" />
              <div class="homeNameOverlay absolute top-0 left-0 right-0 bottom-0 items-center text-center bg-primary/80 p-6 min-h-[136px] flex flex-col gap-[35px] justify-center">
                <p class="mb-0 text-lightWhite text-s lg:text-[28px] font-cirka">Burnaby South</p>
              </div>
              <div class="contentHolder">
                <div class="w-full gap-6 flex flex-col items-start justify-between h-full">
                  <div>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">106 listings</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. list price</p>
                    <p class="text-lightWhite mb-0 text-[9px] lg:text-xs">Avg. sold price</p>
                  </div>
                  <div>
                    <p class="mb-0 text-lightWhite text-s lg:text-[28px] font-cirka">Burnaby South</p>
                    <details class="dropdown">
                      <summary class="w-[150px] text-right border-b border-solid border-white"><i class="bg-icon-chevron w-[6px] h-1 bg-no-repeat bg-center">&nbsp;</i></summary>
                      <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                        <li><a>Item 1</a></li>
                        <li><a>Item 2</a></li>
                      </ul>
                    </details>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 text-xxs lg:text-xs rotate-[-90deg] absolute  tracking-[2px] inset-y-0 w-full text-center left-[88%]">Select a neighborhood
                </p>
              </div>
            </div>
          </div>
          <div class="col-spa-1">
            <div class="flex w-full h-full justify-end items-end">
              <a href="#" class="flex flex-col max-w-[111px] tracking-[2px] gap-[17px] lg:gap-[38px]">
                <div class="max-w-[47px] lg:max-w-[81px]">
                  <img src="images/plus-primary.svg" class="w-full object-contain" loading="lazy" />
                </div>
                <p class="text-[11px] lg:text-s mb-0">View more neıghborhoods</p>
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
    <!-- explore homes -->
    <div class=" row pt-[90px] pb-[100px] md:pb-[180px] lg:pb-[300px] md:pt-[150px]">
      <div class="fullwidth-col">
        <div class="w-full justify-end gap-[60px] items-center max-w-[1106px] m-auto hidden md:flex mb-8 lg:mb-14">
          <a href="#" class="text-xxs md:text-s uppercase">Hot deals</a>
          <a href="#" class="text-xxs md:text-s uppercase">Most viewed</a>
          <a href="#" class="text-xxs md:text-s uppercase">Latest homes</a>
        </div>
        <div class="block md:hidden">
          <p class="text-[45px] leading-[40px] lg:leading-[36px] font-cirka mb-10">Similar<br />
            Properties</p>
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
              <p class="max-w-[134px] lg:max-w-[154px] mb-0 text-md lg:text-[33px] font-cirka">Search for Homes</p>
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
            <p class="max-w-[unset] md:max-w-[200px] lg:max-w-[352px] text-[50px] lg:text-[90px] leading-[40px] lg:leading-[72px] font-cirka mb-0">Similar<br />
              Properties</p>
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
              <p class="max-w-[134px] lg:max-w-[154px] mb-0 text-md lg:text-[33px] font-cirka">Search for Homes</p>
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
        </div>
      </div>
    </div>
  </main>
</div>

<?php
require('includes/footer.php');
?>