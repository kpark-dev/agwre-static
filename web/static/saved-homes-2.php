<?php
require('includes/header.php');
?>

<div class="main-holder">
  <main class="main-content">
    <div class="w-full min-h-[calc(100vh_-_59px)] md:min-h-[calc(100vh_-_104px)] xxl:min-h-[100vh] flex justify-start items-start">
      <div class="row !mt-0 pb-20">
        <div class="fullwidth-col">
          <!-- title -->
          <div class="max-w-[1200px] w-full mx-auto mb-[30px] md:mb-[37px] lg:mb-[73px]">
            <div class="flex items-start md:items-end gap-2 lg:pt-[56px] flex-col md:flex-row">
              <h1 class="text-[36px] md:text-[70px] lg:text-[90px] font-cirka mb-0 leading-[70%]">Saved Homes</h1>
              <p class="mb-0 text-xxs md:text-[11px] lg:text-xs">Showıng all 8 homes</p>
            </div>
          </div>
          <!-- tablet filter -->
          <div class=" hidden md:block lg:hidden">
            <div class="max-w-[1200px] w-full mx-auto shadow-[0px_3px_18px_rgba(0,0,0,0.5_)] bg-primary mt-[47px] rounded-[10px] flex items-center justify-between gap-6 py-4 pl-[23px] pr-[18px] mb-[37px]">
              <input type="text" class="w-full h-[31px] max-w-[188px] border-[#707070] bg-white rounded-[5px] border border-solid !ring-0 !outline-0" />
              <div class="flex flex-col">
                <p class="mb-0 text-lightWhite text-xs">Status</p>
                <details class="dropdown">
                  <summary class="text-lightWhite text-xs flex gap-2 items-center"><span class="">FOR Sale</span></summary>
                  <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                    <li><a>Item</a></li>
                    <li><a>Item</a></li>
                  </ul>
                </details>
              </div>
              <div class="flex flex-col">
                <p class="mb-0 text-lightWhite text-xs">Type</p>
                <details class="dropdown">
                  <summary class="text-lightWhite text-xs flex gap-2 items-center"><span class="">Condos</span><i class="bg-icon-chevron w-[6px] h-1 no-repeat bg-center">&nbsp;</i></summary>
                  <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                    <li><a>Item</a></li>
                    <li><a>Item</a></li>
                  </ul>
                </details>
              </div>
              <div class="flex flex-col min-w-[47px]">
                <p class="mb-0 text-lightWhite text-xs">Price</p>
                <details class="dropdown">
                  <summary class="text-lightWhite text-xs flex gap-2 items-center"><span class="">1m-2m</span><i class="bg-icon-chevron w-[6px] h-1 no-repeat bg-center">&nbsp;</i></summary>
                  <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                    <li><a>Item</a></li>
                    <li><a>Item</a></li>
                  </ul>
                </details>
              </div>
              <div class="flex flex-col min-w-[74px]">
                <p class="mb-0 text-lightWhite text-xs">Beds & Baths</p>
                <details class="dropdown">
                  <summary class="text-lightWhite text-xs flex gap-2 items-center"><span class="">3 - 2 </span></summary>
                  <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                    <li><a>Item</a></li>
                    <li><a>Item</a></li>
                  </ul>
                </details>
              </div>
              <div class="flex flex-col">
                <p class="mb-0 text-lightWhite text-xs">Age</p>
                <details class="dropdown">
                  <summary class="text-lightWhite text-xs flex gap-2 items-center"><span class="">+10 </span></summary>
                  <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                    <li><a>Item</a></li>
                    <li><a>Item</a></li>
                  </ul>
                </details>
              </div>
              <button class="rounded-[10px] bg-white flex items-center justify-center w-[31px] h-[31px] min-w-[31px] min-h-[31px]"><img src="images/search.svg" /></button>
            </div>
            <div class="w-full flex justify-between items-center my-[37px]">
              <div class="flex items-center gap-5">
                <a href="#" class="btnSolid w-[113px] lg:w-[141px] !bg-[#b9c5d1] !border-[#b9c5d1] hover:!border-primary text-white hover:!text-white hover:!bg-primary !h-[38px]">Compare</a>
                <a href="#" class="btnSolid w-[113px] lg:w-[141px] !h-[38px]">Map View</a>
              </div>
              <div class="flex flex-col gap-3 items-end">
                <p class="text-xxs tracking-[3px] font-semibold mb-0">North Las Vegas (8 results)</p>
                <div class="flex gap-[30px] items-center">
                  <a href="#" class="tracking-[4px] text-xxs">All filters</a>
                  <a href="#" class="tracking-[4px] text-xxs">Save search </a>
                  <details class="dropdown">
                    <summary class="flex gap-2 items-center">
                      <p class="text-primary mb-0 text-xxs md:text-xs">Sort by </p><i class="bg-icon-chevron-primary w-[6px] h-1 no-repeat bg-center">&nbsp;</i>
                    </summary>
                    <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                      <li><a>Option</a></li>
                      <li><a>Option</a></li>
                      <li><a>Option</a></li>
                      <li><a>Option</a></li>
                    </ul>
                  </details>
                </div>
              </div>
            </div>
          </div>
          <!-- desktop and mobile filter -->
          <div class="max-w-[1200px] w-full mx-auto flex md:hidden lg:flex justify-between flex-col md:flex-row gap-6 items-start md:items-center mb-6 md:mb-[34px]">
            <div class="w-full md:w-auto overflow-y-auto">
              <div class="flex items-start gap-[26px] lg:gap-10 h-[41px] border border-solid border-[#0e202c] rounded-[5px] overflow-y-auto md:h-auto md:border-0 px-3.5 py-[13px] md:px-0 md:py-0">
                <p class="text-xxs lg:text-xs mb-0 tracking-[2px]">Type</p>
                <p class="text-xxs lg:text-xs mb-0 tracking-[2px] text-nowrap">Date added </p>
                <p class="text-xxs lg:text-xs mb-0 tracking-[2px]">Price</p>
                <p class="text-xxs lg:text-xs mb-0 tracking-[2px]">Status</p>
                <p class="text-xxs lg:text-xs mb-0 tracking-[2px]">Beds</p>
                <p class="text-xxs lg:text-xs mb-0 tracking-[2px] text-nowrap">Home sıze </p>
                <p class="text-xxs lg:text-xs mb-0 tracking-[2px] text-nowrap">Lot sıze </p>
              </div>
            </div>
            <div class="flex flex-row-reverse md:flex-col lg:flex-row items-center md:items-end lg:items-center gap-[26px] md:gap-[37px] lg:gap-[51px] md:top-[-50px] lg:top-[unset] relative mb-0 md:mb-[-40px] lg:mb-[0]">
              <p class="text-xxs lg:text-xs mb-0 tracking-[2px]">Remove all</p>
              <a href="#" class="btnSolid w-[113px] lg:w-[141px] !bg-[#b9c5d1] !border-[#b9c5d1] hover:!border-primary text-white hover:!text-white hover:!bg-primary">Compare</a>
            </div>
            <div class="w-full flex md:hidden items-end justify-end mt-[-60px]">
              <details class="dropdown mb-[38px]">
                <summary class="flex gap-2 items-center">
                  <p class="text-primary mb-0 text-xxs md:text-xs">Sort by </p><i class="bg-icon-chevron-primary w-[6px] h-1 no-repeat bg-center">&nbsp;</i>
                </summary>
                <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                  <li><a>Option</a></li>
                  <li><a>Option</a></li>
                  <li><a>Option</a></li>
                  <li><a>Option</a></li>
                </ul>
              </details>
            </div>
          </div>
          <!-- results -->
          <div class="max-w-[1200px] w-full mx-auto grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-x-5 gap-y-[27px] md:gap-y-[37px]">
            <div class="homesItemBlock">
              <div class="imageBlock">
                <div class="with-hover-animation">
                  <img src="images/blogarticle-2.png" alt="" loading="lazy" />
                </div>
                <div class="absolute top-0 right-0 left w-full flex items-center">
                  <div class="cbBlock px-4 py-[9px] bg-white w-[calc(100%_-_108px)] lg:w-[calc(100%_-_129px)]">
                    <div class="form-control">
                      <label class="label cursor-pointer !justify-center items-center flex gap-3 z-[1]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#ffffff] !border-[#0e202c] rounded-none" />
                        <span class="label-text !text-xxs tracking-[2px]">Compare</span>
                      </label>
                    </div>
                  </div>
                  <div class="cbBlock px-3 lg:px-4 py-[9px] bg-primary min-w-[45%] md:min-w-[unset] lg:min-w-[129px]">
                    <div class="form-control">
                      <label class="label cursor-pointer items-center flex gap-3 z-[1] m-auto max-w-[90px]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#b9c5d1] !border-0 rounded-none" />
                        <span class="label-text !text-xxs !text-[#f8f8f9] tracking-[2px]">For sale </span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="contentBlock">
                <div class="w-full gap-6 flex items-start justify-between mb-[37px] lg:mb-[47px]">
                  <p class="mb-0 text-lightWhite !text-lead md:!text-[17px] lg:!text-lg font-semibold">$1,038,000</p>
                  <div class="min-w-[32px]">
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">3 Baths</p>
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">2 Beds</p>
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">200 sqft</p>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 !text-lg md:!text-md lg:!text-[26px] font-cirka !leading-[80%]">331 Cactus Sands Ave North LV</p>
              </div>
            </div>
            <div class="homesItemBlock">
              <div class="imageBlock">
                <div class="with-hover-animation">
                  <img src="images/blogarticle-2.png" alt="" loading="lazy" />
                </div>
                <div class="absolute top-0 right-0 left w-full flex items-center">
                  <div class="cbBlock px-4 py-[9px] bg-white w-[calc(100%_-_108px)] lg:w-[calc(100%_-_129px)]">
                    <div class="form-control">
                      <label class="label cursor-pointer !justify-center items-center flex gap-3 z-[1]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#ffffff] !border-[#0e202c] rounded-none" />
                        <span class="label-text !text-xxs tracking-[2px]">Compare</span>
                      </label>
                    </div>
                  </div>
                  <div class="cbBlock px-3 lg:px-4 py-[9px] bg-primary min-w-[45%] md:min-w-[unset] lg:min-w-[129px]">
                    <div class="form-control">
                      <label class="label cursor-pointer items-center flex gap-3 z-[1] m-auto max-w-[90px]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#b9c5d1] !border-0 rounded-none" />
                        <span class="label-text !text-xxs !text-[#f8f8f9] tracking-[2px]">For sale </span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="contentBlock">
                <div class="w-full gap-6 flex items-start justify-between mb-[37px] lg:mb-[47px]">
                  <p class="mb-0 text-lightWhite !text-lead md:!text-[17px] lg:!text-lg font-semibold">$1,038,000</p>
                  <div class="min-w-[32px]">
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">3 Baths</p>
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">2 Beds</p>
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">200 sqft</p>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 !text-lg md:!text-md lg:!text-[26px] font-cirka !leading-[80%]">331 Cactus Sands Ave North LV</p>
              </div>
            </div>
            <div class="homesItemBlock">
              <div class="imageBlock">
                <div class="with-hover-animation">
                  <img src="images/blogarticle-2.png" alt="" loading="lazy" />
                </div>
                <div class="absolute top-0 right-0 left w-full flex items-center">
                  <div class="cbBlock px-4 py-[9px] bg-white w-[calc(100%_-_108px)] lg:w-[calc(100%_-_129px)]">
                    <div class="form-control">
                      <label class="label cursor-pointer !justify-center items-center flex gap-3 z-[1]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#ffffff] !border-[#0e202c] rounded-none" />
                        <span class="label-text !text-xxs tracking-[2px]">Compare</span>
                      </label>
                    </div>
                  </div>
                  <div class="cbBlock px-3 lg:px-4 py-[9px] bg-primary min-w-[45%] md:min-w-[unset] lg:min-w-[129px]">
                    <div class="form-control">
                      <label class="label cursor-pointer items-center flex gap-3 z-[1] m-auto max-w-[90px]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#b9c5d1] !border-0 rounded-none" />
                        <span class="label-text !text-xxs !text-[#f8f8f9] tracking-[2px]">For sale </span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="contentBlock">
                <div class="w-full gap-6 flex items-start justify-between mb-[37px] lg:mb-[47px]">
                  <p class="mb-0 text-lightWhite !text-lead md:!text-[17px] lg:!text-lg font-semibold">$1,038,000</p>
                  <div class="min-w-[32px]">
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">3 Baths</p>
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">2 Beds</p>
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">200 sqft</p>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 !text-lg md:!text-md lg:!text-[26px] font-cirka !leading-[80%]">331 Cactus Sands Ave North LV</p>
              </div>
            </div>
            <div class="homesItemBlock">
              <div class="imageBlock">
                <div class="with-hover-animation">
                  <img src="images/blogarticle-2.png" alt="" loading="lazy" />
                </div>
                <div class="absolute top-0 right-0 left w-full flex items-center">
                  <div class="cbBlock px-4 py-[9px] bg-white w-[calc(100%_-_108px)] lg:w-[calc(100%_-_129px)]">
                    <div class="form-control">
                      <label class="label cursor-pointer !justify-center items-center flex gap-3 z-[1]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#ffffff] !border-[#0e202c] rounded-none" />
                        <span class="label-text !text-xxs tracking-[2px]">Compare</span>
                      </label>
                    </div>
                  </div>
                  <div class="cbBlock px-3 lg:px-4 py-[9px] bg-primary min-w-[45%] md:min-w-[unset] lg:min-w-[129px]">
                    <div class="form-control">
                      <label class="label cursor-pointer items-center flex gap-3 z-[1] m-auto max-w-[90px]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#b9c5d1] !border-0 rounded-none" />
                        <span class="label-text !text-xxs !text-[#f8f8f9] tracking-[2px]">For sale </span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="contentBlock">
                <div class="w-full gap-6 flex items-start justify-between mb-[37px] lg:mb-[47px]">
                  <p class="mb-0 text-lightWhite !text-lead md:!text-[17px] lg:!text-lg font-semibold">$1,038,000</p>
                  <div class="min-w-[32px]">
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">3 Baths</p>
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">2 Beds</p>
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">200 sqft</p>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 !text-lg md:!text-md lg:!text-[26px] font-cirka !leading-[80%]">331 Cactus Sands Ave North LV</p>
              </div>
            </div>
            <div class="homesItemBlock">
              <div class="imageBlock">
                <div class="with-hover-animation">
                  <img src="images/blogarticle-2.png" alt="" loading="lazy" />
                </div>
                <div class="absolute top-0 right-0 left w-full flex items-center">
                  <div class="cbBlock px-4 py-[9px] bg-white w-[calc(100%_-_108px)] lg:w-[calc(100%_-_129px)]">
                    <div class="form-control">
                      <label class="label cursor-pointer !justify-center items-center flex gap-3 z-[1]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#ffffff] !border-[#0e202c] rounded-none" />
                        <span class="label-text !text-xxs tracking-[2px]">Compare</span>
                      </label>
                    </div>
                  </div>
                  <div class="cbBlock px-3 lg:px-4 py-[9px] bg-primary min-w-[45%] md:min-w-[unset] lg:min-w-[129px]">
                    <div class="form-control">
                      <label class="label cursor-pointer items-center flex gap-3 z-[1] m-auto max-w-[90px]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#b9c5d1] !border-0 rounded-none" />
                        <span class="label-text !text-xxs !text-[#f8f8f9] tracking-[2px]">For sale </span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="contentBlock">
                <div class="w-full gap-6 flex items-start justify-between mb-[37px] lg:mb-[47px]">
                  <p class="mb-0 text-lightWhite !text-lead md:!text-[17px] lg:!text-lg font-semibold">$1,038,000</p>
                  <div class="min-w-[32px]">
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">3 Baths</p>
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">2 Beds</p>
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">200 sqft</p>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 !text-lg md:!text-md lg:!text-[26px] font-cirka !leading-[80%]">331 Cactus Sands Ave North LV</p>
              </div>
            </div>
            <div class="homesItemBlock">
              <div class="imageBlock">
                <div class="with-hover-animation">
                  <img src="images/blogarticle-2.png" alt="" loading="lazy" />
                </div>
                <div class="absolute top-0 right-0 left w-full flex items-center">
                  <div class="cbBlock px-4 py-[9px] bg-white w-[calc(100%_-_108px)] lg:w-[calc(100%_-_129px)]">
                    <div class="form-control">
                      <label class="label cursor-pointer !justify-center items-center flex gap-3 z-[1]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#ffffff] !border-[#0e202c] rounded-none" />
                        <span class="label-text !text-xxs tracking-[2px]">Compare</span>
                      </label>
                    </div>
                  </div>
                  <div class="cbBlock px-3 lg:px-4 py-[9px] bg-primary min-w-[45%] md:min-w-[unset] lg:min-w-[129px]">
                    <div class="form-control">
                      <label class="label cursor-pointer items-center flex gap-3 z-[1] m-auto max-w-[90px]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#b9c5d1] !border-0 rounded-none" />
                        <span class="label-text !text-xxs !text-[#f8f8f9] tracking-[2px]">For sale </span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="contentBlock">
                <div class="w-full gap-6 flex items-start justify-between mb-[37px] lg:mb-[47px]">
                  <p class="mb-0 text-lightWhite !text-lead md:!text-[17px] lg:!text-lg font-semibold">$1,038,000</p>
                  <div class="min-w-[32px]">
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">3 Baths</p>
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">2 Beds</p>
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">200 sqft</p>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 !text-lg md:!text-md lg:!text-[26px] font-cirka !leading-[80%]">331 Cactus Sands Ave North LV</p>
              </div>
            </div>
            <div class="homesItemBlock">
              <div class="imageBlock">
                <div class="with-hover-animation">
                  <img src="images/blogarticle-2.png" alt="" loading="lazy" />
                </div>
                <div class="absolute top-0 right-0 left w-full flex items-center">
                  <div class="cbBlock px-4 py-[9px] bg-white w-[calc(100%_-_108px)] lg:w-[calc(100%_-_129px)]">
                    <div class="form-control">
                      <label class="label cursor-pointer !justify-center items-center flex gap-3 z-[1]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#ffffff] !border-[#0e202c] rounded-none" />
                        <span class="label-text !text-xxs tracking-[2px]">Compare</span>
                      </label>
                    </div>
                  </div>
                  <div class="cbBlock px-3 lg:px-4 py-[9px] bg-primary min-w-[45%] md:min-w-[unset] lg:min-w-[129px]">
                    <div class="form-control">
                      <label class="label cursor-pointer items-center flex gap-3 z-[1] m-auto max-w-[90px]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#b9c5d1] !border-0 rounded-none" />
                        <span class="label-text !text-xxs !text-[#f8f8f9] tracking-[2px]">For sale </span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="contentBlock">
                <div class="w-full gap-6 flex items-start justify-between mb-[37px] lg:mb-[47px]">
                  <p class="mb-0 text-lightWhite !text-lead md:!text-[17px] lg:!text-lg font-semibold">$1,038,000</p>
                  <div class="min-w-[32px]">
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">3 Baths</p>
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">2 Beds</p>
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">200 sqft</p>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 !text-lg md:!text-md lg:!text-[26px] font-cirka !leading-[80%]">331 Cactus Sands Ave North LV</p>
              </div>
            </div>
            <div class="homesItemBlock">
              <div class="imageBlock">
                <div class="with-hover-animation">
                  <img src="images/blogarticle-2.png" alt="" loading="lazy" />
                </div>
                <div class="absolute top-0 right-0 left w-full flex items-center">
                  <div class="cbBlock px-4 py-[9px] bg-white w-[calc(100%_-_108px)] lg:w-[calc(100%_-_129px)]">
                    <div class="form-control">
                      <label class="label cursor-pointer !justify-center items-center flex gap-3 z-[1]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#ffffff] !border-[#0e202c] rounded-none" />
                        <span class="label-text !text-xxs tracking-[2px]">Compare</span>
                      </label>
                    </div>
                  </div>
                  <div class="cbBlock px-3 lg:px-4 py-[9px] bg-primary min-w-[45%] md:min-w-[unset] lg:min-w-[129px]">
                    <div class="form-control">
                      <label class="label cursor-pointer items-center flex gap-3 z-[1] m-auto max-w-[90px]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#b9c5d1] !border-0 rounded-none" />
                        <span class="label-text !text-xxs !text-[#f8f8f9] tracking-[2px]">For sale </span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="contentBlock">
                <div class="w-full gap-6 flex items-start justify-between mb-[37px] lg:mb-[47px]">
                  <p class="mb-0 text-lightWhite !text-lead md:!text-[17px] lg:!text-lg font-semibold">$1,038,000</p>
                  <div class="min-w-[32px]">
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">3 Baths</p>
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">2 Beds</p>
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">200 sqft</p>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 !text-lg md:!text-md lg:!text-[26px] font-cirka !leading-[80%]">331 Cactus Sands Ave North LV</p>
              </div>
            </div>
            <div class="homesItemBlock">
              <div class="imageBlock">
                <div class="with-hover-animation">
                  <img src="images/blogarticle-2.png" alt="" loading="lazy" />
                </div>
                <div class="absolute top-0 right-0 left w-full flex items-center">
                  <div class="cbBlock px-4 py-[9px] bg-white w-[calc(100%_-_108px)] lg:w-[calc(100%_-_129px)]">
                    <div class="form-control">
                      <label class="label cursor-pointer !justify-center items-center flex gap-3 z-[1]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#ffffff] !border-[#0e202c] rounded-none" />
                        <span class="label-text !text-xxs tracking-[2px]">Compare</span>
                      </label>
                    </div>
                  </div>
                  <div class="cbBlock px-3 lg:px-4 py-[9px] bg-primary min-w-[45%] md:min-w-[unset] lg:min-w-[129px]">
                    <div class="form-control">
                      <label class="label cursor-pointer items-center flex gap-3 z-[1] m-auto max-w-[90px]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#b9c5d1] !border-0 rounded-none" />
                        <span class="label-text !text-xxs !text-[#f8f8f9] tracking-[2px]">For sale </span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="contentBlock">
                <div class="w-full gap-6 flex items-start justify-between mb-[37px] lg:mb-[47px]">
                  <p class="mb-0 text-lightWhite !text-lead md:!text-[17px] lg:!text-lg font-semibold">$1,038,000</p>
                  <div class="min-w-[32px]">
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">3 Baths</p>
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">2 Beds</p>
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">200 sqft</p>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 !text-lg md:!text-md lg:!text-[26px] font-cirka !leading-[80%]">331 Cactus Sands Ave North LV</p>
              </div>
            </div>
            <div class="homesItemBlock">
              <div class="imageBlock">
                <div class="with-hover-animation">
                  <img src="images/blogarticle-2.png" alt="" loading="lazy" />
                </div>
                <div class="absolute top-0 right-0 left w-full flex items-center">
                  <div class="cbBlock px-4 py-[9px] bg-white w-[calc(100%_-_108px)] lg:w-[calc(100%_-_129px)]">
                    <div class="form-control">
                      <label class="label cursor-pointer !justify-center items-center flex gap-3 z-[1]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#ffffff] !border-[#0e202c] rounded-none" />
                        <span class="label-text !text-xxs tracking-[2px]">Compare</span>
                      </label>
                    </div>
                  </div>
                  <div class="cbBlock px-3 lg:px-4 py-[9px] bg-primary min-w-[45%] md:min-w-[unset] lg:min-w-[129px]">
                    <div class="form-control">
                      <label class="label cursor-pointer items-center flex gap-3 z-[1] m-auto max-w-[90px]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#b9c5d1] !border-0 rounded-none" />
                        <span class="label-text !text-xxs !text-[#f8f8f9] tracking-[2px]">For sale </span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="contentBlock">
                <div class="w-full gap-6 flex items-start justify-between mb-[37px] lg:mb-[47px]">
                  <p class="mb-0 text-lightWhite !text-lead md:!text-[17px] lg:!text-lg font-semibold">$1,038,000</p>
                  <div class="min-w-[32px]">
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">3 Baths</p>
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">2 Beds</p>
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">200 sqft</p>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 !text-lg md:!text-md lg:!text-[26px] font-cirka !leading-[80%]">331 Cactus Sands Ave North LV</p>
              </div>
            </div>
            <div class="homesItemBlock">
              <div class="imageBlock">
                <div class="with-hover-animation">
                  <img src="images/blogarticle-2.png" alt="" loading="lazy" />
                </div>
                <div class="absolute top-0 right-0 left w-full flex items-center">
                  <div class="cbBlock px-4 py-[9px] bg-white w-[calc(100%_-_108px)] lg:w-[calc(100%_-_129px)]">
                    <div class="form-control">
                      <label class="label cursor-pointer !justify-center items-center flex gap-3 z-[1]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#ffffff] !border-[#0e202c] rounded-none" />
                        <span class="label-text !text-xxs tracking-[2px]">Compare</span>
                      </label>
                    </div>
                  </div>
                  <div class="cbBlock px-3 lg:px-4 py-[9px] bg-primary min-w-[45%] md:min-w-[unset] lg:min-w-[129px]">
                    <div class="form-control">
                      <label class="label cursor-pointer items-center flex gap-3 z-[1] m-auto max-w-[90px]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#b9c5d1] !border-0 rounded-none" />
                        <span class="label-text !text-xxs !text-[#f8f8f9] tracking-[2px]">For sale </span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="contentBlock">
                <div class="w-full gap-6 flex items-start justify-between mb-[37px] lg:mb-[47px]">
                  <p class="mb-0 text-lightWhite !text-lead md:!text-[17px] lg:!text-lg font-semibold">$1,038,000</p>
                  <div class="min-w-[32px]">
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">3 Baths</p>
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">2 Beds</p>
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">200 sqft</p>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 !text-lg md:!text-md lg:!text-[26px] font-cirka !leading-[80%]">331 Cactus Sands Ave North LV</p>
              </div>
            </div>
            <div class="homesItemBlock">
              <div class="imageBlock">
                <div class="with-hover-animation">
                  <img src="images/blogarticle-2.png" alt="" loading="lazy" />
                </div>
                <div class="absolute top-0 right-0 left w-full flex items-center">
                  <div class="cbBlock px-4 py-[9px] bg-white w-[calc(100%_-_108px)] lg:w-[calc(100%_-_129px)]">
                    <div class="form-control">
                      <label class="label cursor-pointer !justify-center items-center flex gap-3 z-[1]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#ffffff] !border-[#0e202c] rounded-none" />
                        <span class="label-text !text-xxs tracking-[2px]">Compare</span>
                      </label>
                    </div>
                  </div>
                  <div class="cbBlock px-3 lg:px-4 py-[9px] bg-primary min-w-[45%] md:min-w-[unset] lg:min-w-[129px]">
                    <div class="form-control">
                      <label class="label cursor-pointer items-center flex gap-3 z-[1] m-auto max-w-[90px]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#b9c5d1] !border-0 rounded-none" />
                        <span class="label-text !text-xxs !text-[#f8f8f9] tracking-[2px]">For sale </span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="contentBlock">
                <div class="w-full gap-6 flex items-start justify-between mb-[37px] lg:mb-[47px]">
                  <p class="mb-0 text-lightWhite !text-lead md:!text-[17px] lg:!text-lg font-semibold">$1,038,000</p>
                  <div class="min-w-[32px]">
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">3 Baths</p>
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">2 Beds</p>
                    <p class="text-lightWhite mb-0 !text-xxs lg:!text-xs !leading-[100%]">200 sqft</p>
                  </div>
                </div>
                <p class="text-lightWhite mb-0 !text-lg md:!text-md lg:!text-[26px] font-cirka !leading-[80%]">331 Cactus Sands Ave North LV</p>
              </div>
            </div>
          </div>
        </div>
  </main>
</div>


<?php
// require('includes/footer.php');
?>