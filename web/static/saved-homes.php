<?php
require('includes/header.php');
?>

<div class="main-holder">
  <main class="main-content">
    <div class="w-full min-h-[calc(100vh_-_59px)] md:min-h-[calc(100vh_-_104px)] xxl:min-h-[100vh] flex justify-start items-start">
      <div class="row !mt-0">
        <div class="fullwidth-col">
          <!-- title -->
          <div class="max-w-[1200px] w-full mx-auto mb-[30px] md:mb-[37px] lg:mb-[73px]">
            <div class="flex items-start md:items-end gap-2 pt-[45px] lg:pt-[56px] flex-col md:flex-row">
              <h1 class="text-[36px] md:text-[70px] lg:text-[90px] font-cirka mb-0 leading-[70%]">Saved Homes</h1>
              <p class="mb-0 text-xxs md:text-[11px] lg:text-xs">Showıng all 8 homes</p>
            </div>
          </div>
          <!-- filter -->
          <div class="max-w-[1200px] w-full mx-auto flex justify-between flex-col md:flex-row gap-6 items-start md:items-center mb-6 md:mb-[34px]">
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
              <a href="#" class="btnSolid w-[113px] lg:w-[141px]">Compare</a>
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
                <div class="absolute top-0 right-0 px-4 py-[9px] bg-primary">
                  <div class="cbBlock">
                    <div class="form-control">
                      <label class="label cursor-pointer items-center flex gap-3 z-[1]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#b9c5d1] !border-0 rounded-none" />
                        <span class="label-text text-xxs !text-[#f8f8f9]">For sale </span>
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
                <div class="absolute top-0 right-0 px-4 py-[9px] bg-primary">
                  <div class="cbBlock">
                    <div class="form-control">
                      <label class="label cursor-pointer items-center flex gap-3 z-[1]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#b9c5d1] !border-0 rounded-none" />
                        <span class="label-text text-xxs !text-[#f8f8f9]">For sale </span>
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
                <div class="absolute top-0 right-0 px-4 py-[9px] bg-primary">
                  <div class="cbBlock">
                    <div class="form-control">
                      <label class="label cursor-pointer items-center flex gap-3 z-[1]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#b9c5d1] !border-0 rounded-none" />
                        <span class="label-text text-xxs !text-[#f8f8f9]">For sale </span>
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
                <div class="absolute top-0 right-0 px-4 py-[9px] bg-primary">
                  <div class="cbBlock">
                    <div class="form-control">
                      <label class="label cursor-pointer items-center flex gap-3 z-[1]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#b9c5d1] !border-0 rounded-none" />
                        <span class="label-text text-xxs !text-[#f8f8f9]">For sale </span>
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
                <div class="absolute top-0 right-0 px-4 py-[9px] bg-primary">
                  <div class="cbBlock">
                    <div class="form-control">
                      <label class="label cursor-pointer items-center flex gap-3 z-[1]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#b9c5d1] !border-0 rounded-none" />
                        <span class="label-text text-xxs !text-[#f8f8f9]">For sale </span>
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
                <div class="absolute top-0 right-0 px-4 py-[9px] bg-primary">
                  <div class="cbBlock">
                    <div class="form-control">
                      <label class="label cursor-pointer items-center flex gap-3 z-[1]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#b9c5d1] !border-0 rounded-none" />
                        <span class="label-text text-xxs !text-[#f8f8f9]">For sale </span>
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
                <div class="absolute top-0 right-0 px-4 py-[9px] bg-primary">
                  <div class="cbBlock">
                    <div class="form-control">
                      <label class="label cursor-pointer items-center flex gap-3 z-[1]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#b9c5d1] !border-0 rounded-none" />
                        <span class="label-text text-xxs !text-[#f8f8f9]">For sale </span>
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
                <div class="absolute top-0 right-0 px-4 py-[9px] bg-primary">
                  <div class="cbBlock">
                    <div class="form-control">
                      <label class="label cursor-pointer items-center flex gap-3 z-[1]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#b9c5d1] !border-0 rounded-none" />
                        <span class="label-text text-xxs !text-[#f8f8f9]">For sale </span>
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
                <div class="absolute top-0 right-0 px-4 py-[9px] bg-primary">
                  <div class="cbBlock">
                    <div class="form-control">
                      <label class="label cursor-pointer items-center flex gap-3 z-[1]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#b9c5d1] !border-0 rounded-none" />
                        <span class="label-text text-xxs !text-[#f8f8f9]">For sale </span>
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
                <div class="absolute top-0 right-0 px-4 py-[9px] bg-primary">
                  <div class="cbBlock">
                    <div class="form-control">
                      <label class="label cursor-pointer items-center flex gap-3 z-[1]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#b9c5d1] !border-0 rounded-none" />
                        <span class="label-text text-xxs !text-[#f8f8f9]">For sale </span>
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
                <div class="absolute top-0 right-0 px-4 py-[9px] bg-primary">
                  <div class="cbBlock">
                    <div class="form-control">
                      <label class="label cursor-pointer items-center flex gap-3 z-[1]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#b9c5d1] !border-0 rounded-none" />
                        <span class="label-text text-xxs !text-[#f8f8f9]">For sale </span>
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
                <div class="absolute top-0 right-0 px-4 py-[9px] bg-primary">
                  <div class="cbBlock">
                    <div class="form-control">
                      <label class="label cursor-pointer items-center flex gap-3 z-[1]">
                        <input type="checkbox" class="checkbox w-[9px] h-[9px] bg-[#b9c5d1] !border-0 rounded-none" />
                        <span class="label-text text-xxs !text-[#f8f8f9]">For sale </span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="contentBlock">
                <div class="w-full gap-6 flex items-start justify-between mb-[37px] lg:mb-[47px]">
                  <p class="mb-0 text-lightWhite text-lead md:text-[17px] lg:1text-lg font-semibold">$1,038,000</p>
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