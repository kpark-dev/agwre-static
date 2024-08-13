<?php
require('includes/header.php');
?>

<div class="main-holder">
  <main class="main-content">
    <!-- calculator -->
    <div class="row pt-[90px] md:pt-[130px]">
      <div class="fullwidth-col">
        <div class="max-w-[1106px] m-auto">
          <p class="text-[30px] md:text-[50px] lg:text-[70px] font-cirka leading-[100%] text-center mb-[92px] md:mb-[102px] lg:mb-[130px]">Mortgage <br />Payment Calculator </p>
          <div class="w-full grid grid-cols-1 md:grid-cols-4 gap-5 md:gap-6 lg:gap-10">
            <div class="w-full flex flex-col items-center md:items-start">
              <p class="text-xxs lg:text-s tracking-[2px] text-center lg:text-left mb-2 lg:mb-4">DownPayment</p>
              <input type="text" class="max-w-[320px] lg:max-w-[444px] w-full h-14 bg-[#f8f8f9] rounded-[5px] !border-0 !ring-0 !outline-0">
            </div>
            <div class="w-full flex flex-col items-center md:items-start">
              <p class="text-xxs lg:text-s tracking-[2px] text-center lg:text-left mb-2 lg:mb-4">%DownPayment</p>
              <input type="text" class="max-w-[320px] lg:max-w-[444px] w-full h-14 bg-[#f8f8f9] rounded-[5px] !border-0 !ring-0 !outline-0">
            </div>
            <div class="w-full max-w-[320px] lg:max-w-[unset] m-auto flex flex-col items-center md:items-start fullwidthChosen">
              <p class="max-w-[unset] lg:max-w-[367px] text-xxs lg:text-s tracking-[2px] text-center lg:text-left mb-2 lg:mb-4">Loan Type</p>
              <select class="w-full chosen-select" data-placeholder="Select Your Options">
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
            </div>
            <div class="w-full flex flex-col items-center md:items-start">
              <p class="text-xxs lg:text-s tracking-[2px] text-center lg:text-left mb-2 lg:mb-4">Interest rate</p>
              <input type="text" class="max-w-[320px] lg:max-w-[444px] w-full h-14 bg-[#f8f8f9] rounded-[5px] !border-0 !ring-0 !outline-0">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- chart -->
    <div class="row py-[90px] md:py-[130px]">
      <div class="fullwidth-col">
        <div class="max-w-[626px] m-auto">
          <div class="relative w-full m-auto max-w-[250px] md:max-w-[unset]">
            <div class="w-auto absolute z-[1] left-[90px] md:left-[88px] lg:left-[43px] top-[134px] md:top-[145px] lg:top-[122px] text-center m-auto max-w-[250px] md:max-w-[unset]">
              <p class="mb-0 text-[25px] md:text-[34px] lg:text-[38px] font-semibold">$6,070</p>
              <p class="mb-0 text-[7px] md:text-[9px] lg:text-xxs tracking-[2px]">Per month</p>
            </div>
            <div class="flex flex-col md:flex-row justify-center items-center gap-[74px] md:gap-[96px] m-auto max-w-[250px] md:max-w-[unset]">
              <div id="donutChart" class="h-[230px] md:h-[270px] w-full"></div>
              <div class="flex flex-col gap-11 items-center md:items-start w-full">
                <div class="flex gap-[17px] items-center mb-0">
                  <div class="w-[15px] h-[15px] bg-[#b9c5d1]">&nbsp;</div>
                  <p class="text-xxs md:text-xs mb-0">Prıncıpal and ınterest</p>
                  <p class="text-mb md:text-lg mb-0 ml-[15px] font-semibold">$5,000</p>
                </div>
                <div class="flex gap-[17px] items-center mb-0">
                  <div class="w-[15px] h-[15px] bg-[#0E202C]">&nbsp;</div>
                  <p class="text-xxs md:text-xs mb-0">Property tax</p>
                  <p class="text-mb md:text-lg mb-0 ml-[15px] font-semibold">$450</p>
                </div>
                <div class="flex gap-[17px] items-center mb-0">
                  <div class="w-[15px] h-[15px] bg-[#0e202c66]">&nbsp;</div>
                  <p class="text-xxs md:text-xs mb-0">Home Insurance</p>
                  <p class="text-mb md:text-lg mb-0 ml-[15px] font-semibold">$400</p>
                </div>
                <div class="flex gap-[17px] items-center mb-0">
                  <div class="w-[15px] h-[15px] bg-[#9FA6A9]">&nbsp;</div>
                  <p class="text-xxs md:text-xs mb-0">Strata fees </p>
                  <p class="text-mb md:text-lg mb-0 ml-[15px] font-semibold">$400</p>
                </div>
              </div>
            </div>
            <div class="m-auto block lg:hidden w-full max-w-[484px] lg:max-w-[unset] pt-[73px] md:pt-[100px]">
              <div class="flex w-full h-full justify-center items-center">
                <a href="#" class="flex flex-col max-w-[131px] lg:max-w-[161px] tracking-[2px] gap-[17px] lg:gap-[38px] items-center">
                  <div class="max-w-[47px] lg:max-w-[81px]">
                    <img src="images/plus-primary.svg" class="w-full object-contain" loading="lazy" />
                  </div>
                  <p class="text-[11px] lg:text-s mb-0">Advanced optıons</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- insights -->
    <div class="row py-[90px] md:py-[130px]">
      <div class="fullwidth-col">
        <div class="max-w-[1106px] m-auto pb-[64px] lg:pb-[101px] flex flex-col md:flex-row items-center md:items-end gap-[5px] lg:gap-[78px] justify-center md:justify-start"> <img src="images/market.svg" class="m-auto max-w-[51px] md:max-w-[64px] lg:max-w-[103px] block md:hidden" alt="market watch" loading="lazy" />
          <p class="mb-0 text-[30px] md:text-[40px] lg:text-[60px] font-cirka leading-[80%]">Insights</p>
          <p class="mb-0 text-xxs lg:text-lg max-w-[100px] lg:max-w-[unset]">Talk to advisor</p>
        </div>
        <div class="w-full flex items-center justify-center md:justify-between flex-wrap max-w-[1106px] m-auto gap-y-[39px] gap-x-[53px] md:gap-x-0 md:gap-y-0">
          <div class="flex flex-col gap-[15px] items-center justify-center order-1 md:order-1 max-w-[140px] text-center">
            <p class="mb-0 text-xxs lg:text-s tracking-[2px] md:leading-normal">This home is one of </p>
            <p class="mb-0 text-[15px] lg:text-[26px]">123</p>
            <p class="mb-0 text-xxs lg:text-s tracking-[2px] md:leading-normal flex items-center gap-2"><span>properties for sale in Riley Park
              </span></p>
          </div>
          <div class="w-[1px] h-10 bg-primary hidden md:block order-2">&nbsp;</div>
          <div class="flex flex-col gap-[15px] items-center justify-center order-5 md:order-3 max-w-[140px] text-center">
            <p class="mb-0 text-xxs lg:text-s tracking-[2px] md:leading-normal">Market time </p>
            <p class="mb-0 text-[15px] lg:text-[26px]">35</p>
            <p class="mb-0 text-xxs lg:text-s tracking-[2px] md:leading-normal flex items-center gap-2"><span>The median days for the properties in this area on the market

              </span></p>
          </div>
          <div class="w-[1px] h-10 bg-primary hidden md:block  order-4">&nbsp;</div>
          <div class="flex flex-col gap-[15px] items-center justify-center order-3 md:order-5 max-w-[140px] text-center">
            <p class="mb-0 text-xxs lg:text-s tracking-[2px] md:leading-normal">This home list price is </p>
            <p class="mb-0 text-[15px] lg:text-[26px]">16% </p>
            <p class="mb-0 text-xxs lg:text-s tracking-[2px] md:leading-normal">below the Riley Park median </p>
          </div>
          <div class="w-[1px] h-10 bg-primary hidden md:block  order-6">&nbsp;</div>
          <div class="flex flex-col gap-[15px] items-center justify-center order-2 md:order-7 max-w-[140px] text-center">
            <p class="mb-0 text-xxs lg:text-s tracking-[2px] md:leading-normal">This home is </p>
            <p class="mb-0 text-[15px] lg:text-[26px]">$860</p>
            <p class="mb-0 text-xxs lg:text-s tracking-[2px] md:leading-normal">per square foot, which is 30% below the median </p>
          </div>
        </div>
      </div>
    </div>
    <!-- property details -->
    <div class="row pt-[90px] md:pt-[130px]">
      <div class="fullwidth-col">
        <div class="max-w-[1106px] m-auto">
          <p class="text-[36px] md:text-[70px] lg:text-[90px] font-cirka leading-[100%] mb-[52px] md:mb-[82px] lg:mb-[133px]">Property Details</p>
          <div class="w-full grid lg:hidden grid-cols-2 gap-10 lg:gap-[109px] mb-[88px] lg:mb-[137px]">
            <div class="flex flex-col gap-[23px] lg:gap-[21px]">
              <div class="flex gap-4 md:gap-9 lg:gap-[30px] items-end">
                <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">Status</p>
                <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0">Active</p>
              </div>
              <div class="flex gap-4 md:gap-9 lg:gap-[30px] items-end">
                <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">Stories</p>
                <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0">2</p>
              </div>
              <div class="flex gap-4 md:gap-9 lg:gap-[30px] items-end">
                <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">Strata fees</p>
                <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0">$2200</p>
              </div>
              <div class="flex gap-4 md:gap-9 lg:gap-[30px] items-end">
                <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">No of floors </p>
                <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0">4</p>
              </div>
              <div class="flex gap-4 md:gap-9 lg:gap-[30px] items-end">
                <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">Property Type </p>
                <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0">Residential </p>
              </div>
              <div class="flex gap-4 md:gap-9 lg:gap-[30px] items-end">
                <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">Property Sub Type </p>
                <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0">Condo</p>
              </div>
              <div class="flex gap-4 md:gap-9 lg:gap-[30px] items-end">
                <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0"></p>
                <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0"></p>
              </div>
            </div>
            <div class="flex flex-col gap-[23px] lg:gap-[21px]">
              <div class="flex gap-4 md:gap-9 lg:gap-[30px] items-end">
                <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">Days on market </p>
                <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0">12</p>
              </div>
              <div class="flex gap-4 md:gap-9 lg:gap-[30px] items-end">
                <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">Property tax </p>
                <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0">12.1% </p>
              </div>
              <div class="flex gap-4 md:gap-9 lg:gap-[30px] items-end">
                <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">Water Supply </p>
                <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0">Public </p>
              </div>
              <div class="flex gap-4 md:gap-9 lg:gap-[30px] items-end">
                <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">Water Supply </p>
                <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0">Public </p>
              </div>
              <div class="flex gap-4 md:gap-9 lg:gap-[30px] items-end">
                <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">Sold Date </p>
                <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0">26, May 2023 </p>
              </div>
              <div class="flex gap-4 md:gap-9 lg:gap-[30px] items-end">
                <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">Sold Price </p>
                <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0">$150,000 </p>
              </div>
            </div>
          </div>
          <div class="w-full flex flex-col md:flex-row gap-10 md:gap-[63px] lg:gap-[116px]">
            <div class="max-w-[270px] lg:max-w-[358px] w-full h-full"><img src="images/r-architecture-P_0tn (2).png" class="lg:min-h-[710px] w-full h-full object-cover" /></div>
            <div class="w-full">
              <div class="w-full flex flex-col mb-[84px] lg:mb-[175px]">
                <div class="w-full hidden lg:grid grid-cols-2 gap-[73px] lg:gap-[109px] mb-[88px] lg:mb-[137px]">
                  <div class="flex flex-col gap-[23px] lg:gap-[21px]">
                    <div class="flex gap-4 md:gap-9 lg:gap-[30px] items-end">
                      <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">Status</p>
                      <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0">Active</p>
                    </div>
                    <div class="flex gap-4 md:gap-9 lg:gap-[30px] items-end">
                      <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">Stories</p>
                      <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0">2</p>
                    </div>
                    <div class="flex gap-4 md:gap-9 lg:gap-[30px] items-end">
                      <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">Strata fees</p>
                      <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0">$2200</p>
                    </div>
                    <div class="flex gap-4 md:gap-9 lg:gap-[30px] items-end">
                      <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">No of floors </p>
                      <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0">4</p>
                    </div>
                    <div class="flex gap-4 md:gap-9 lg:gap-[30px] items-end">
                      <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">Property Type </p>
                      <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0">Residential </p>
                    </div>
                    <div class="flex gap-4 md:gap-9 lg:gap-[30px] items-end">
                      <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">Property Sub Type </p>
                      <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0">Condo</p>
                    </div>
                    <div class="flex gap-4 md:gap-9 lg:gap-[30px] items-end">
                      <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0"></p>
                      <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0"></p>
                    </div>
                  </div>
                  <div class="flex flex-col gap-[23px] lg:gap-[21px]">
                    <div class="flex gap-4 md:gap-9 lg:gap-[30px] items-end">
                      <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">Days on market </p>
                      <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0">12</p>
                    </div>
                    <div class="flex gap-4 md:gap-9 lg:gap-[30px] items-end">
                      <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">Property tax </p>
                      <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0">12.1% </p>
                    </div>
                    <div class="flex gap-4 md:gap-9 lg:gap-[30px] items-end">
                      <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">Water Supply </p>
                      <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0">Public </p>
                    </div>
                    <div class="flex gap-4 md:gap-9 lg:gap-[30px] items-end">
                      <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">Water Supply </p>
                      <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0">Public </p>
                    </div>
                    <div class="flex gap-4 md:gap-9 lg:gap-[30px] items-end">
                      <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">Sold Date </p>
                      <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0">26, May 2023 </p>
                    </div>
                    <div class="flex gap-4 md:gap-9 lg:gap-[30px] items-end">
                      <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">Sold Price </p>
                      <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0">$150,000 </p>
                    </div>
                  </div>
                </div>
                <div class="w-full">
                  <p class="text-lead md:text-[30px] lg:text-[45px] mb-14 lg:mb-[87px] font-cirka">Additional Property Details</p>
                  <p class="text-xxs md:text-[11px] lg:text-xs mb-[29px] md:mb-[23px] lg:mb-[21px]">ByLaw Restrictions</p>
                  <p class="text-s md:text-base lg:text-lg mb-[27px] md:mb-[23px] lg:mb-[46px] font-semibold">Rentals allowed, Age restrictions, Pets allowed</p>
                  <p class="text-xxs md:text-[11px] lg:text-xs mb-[29px] md:mb-[23px] lg:mb-[21px]">Short Term Rental Allowed?</p>
                  <p class="text-s md:text-base lg:text-lg mb-0 font-semibold">No</p>
                </div>
              </div>
            </div>
          </div>
          <!-- transaction -->
          <div class="w-full flex flex-col md:flex-row gap-[112px] lg:gap-[216px] items-start  mb-[84px] lg:mb-[175px]">
            <div class="w-full max-w-[454px]">
              <p class="text-lead md:text-[30px] lg:text-[45px] mb-[53px] lg:mb-[83px] font-cirka">Transaction History </p>
              <div class="flex flex-col md:flex-row gap-[42px] lg:gap-[69px]">
                <div class="flex flex-row md:flex-col gap-4 md:gap-9 lg:gap-[30px] items-start lg:items-end">
                  <p class="text-xxs md:text-[11px] lg:text-xs mb-0">Sold date </p>
                  <p class="md:min-w-[130px] text-[15px] md:text-base lg:text-lg mb-0">March 02, 2021 </p>
                </div>
                <div class="flex flex-row md:flex-col gap-4 md:gap-9 lg:gap-[30px] items-start lg:items-end">
                  <p class="text-xxs md:text-[11px] lg:text-xs mb-0">Price</p>
                  <p class="text-[15px] md:text-base lg:text-lg mb-0">$1,950,000 </p>
                </div>
                <div class="flex flex-row md:flex-col gap-4 md:gap-9 lg:gap-[30px] items-start lg:items-end">
                  <p class="text-xxs md:text-[11px] lg:text-xs mb-0">Source </p>
                  <p class="text-[15px] md:text-base lg:text-lg mb-0">REBGV </p>
                </div>
              </div>
            </div>
            <div class="w-full max-w-[324px]">
              <p class="text-lead md:text-[30px] lg:text-[45px] mb-[53px] lg:mb-[83px] font-cirka">Parking/Storage </p>
              <div class="flex flex-col gap-[23px] lg:gap-[21px]">
                <div class="flex gap-4 md:gap-9 lg:gap-[30px] items-start lg:items-end">
                  <p class="text-xxs md:text-[11px] lg:text-xs mb-0">Parking Type </p>
                  <p class="text-[15px] md:text-base lg:text-lg mb-0">Active</p>
                </div>
                <div class="flex gap-4 md:gap-9 lg:gap-[30px] items-start lg:items-end">
                  <p class="text-xxs md:text-[11px] lg:text-xs mb-0">Storage Space </p>
                  <p class="text-[15px] md:text-base lg:text-lg mb-0">2</p>
                </div>
                <div class="flex gap-4 md:gap-9 lg:gap-[30px] items-start lg:items-end">
                  <p class="text-xxs md:text-[11px] lg:text-xs mb-0">Number of Parking </p>
                  <p class="text-[15px] md:text-base lg:text-lg mb-0">$2200 </p>
                </div>
              </div>
            </div>
          </div>
          <!-- tax history -->
          <div class="w-full flex gap-10 md:gap-20 lg:gap-[172px] items-start mb-[84px] lg:mb-[175px]">
            <div class="w-full max-w-[501px]">
              <p class="text-lead md:text-[30px] lg:text-[45px] mb-[53px] lg:mb-[83px] font-cirka">Tax History</p>
              <div class="flex flex-col md:flex-row gap-[42px] lg:gap-[69px] mb-10 lg:mb-[49px]">
                <div class="flex flex-row md:flex-col gap-4 md:gap-9 lg:gap-[30px] items-end">
                  <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">Year </p>
                  <p class="md:min-w-[130px] text-[15px] md:text-base lg:text-lg mb-0">2022</p>
                </div>
                <div class="flex flex-row md:flex-col gap-4 md:gap-9 lg:gap-[30px] items-end">
                  <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">Property Taxes</p>
                  <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0">$13,492 </p>
                </div>
                <div class="flex flex-row md:flex-col gap-4 md:gap-9 lg:gap-[30px] items-end">
                  <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">Tax Assessment </p>
                  <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0">$1,147,231 </p>
                </div>
              </div>
              <div class="flex flex-col md:flex-row gap-[42px] lg:gap-[69px]">
                <div class="flex flex-row md:flex-col gap-4 md:gap-9 lg:gap-[30px] items-end">
                  <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">Year </p>
                  <p class="md:min-w-[130px] text-[15px] md:text-base lg:text-lg mb-0">2022</p>
                </div>
                <div class="flex flex-row md:flex-col gap-4 md:gap-9 lg:gap-[30px] items-end">
                  <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">Property Taxes</p>
                  <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0">$13,492 </p>
                </div>
                <div class="flex flex-row md:flex-col gap-4 md:gap-9 lg:gap-[30px] items-end">
                  <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0">Tax Assessment </p>
                  <p class="md:min-w-[119px] text-[15px] md:text-base lg:text-lg mb-0">$1,147,231 </p>
                </div>
              </div>
            </div>
            <div class="w-full max-w-[220px]">
              <img src="images/r-architecture-FpuhD.png" class="lg:min-h-[415px] w-full h-full object-cover" />
            </div>
          </div>
          <!-- Parking/Storage -->
          <div class="w-full mb-[84px] lg:mb-[175px]">
            <p class="text-lead md:text-[30px] lg:text-[45px] mb-[63px] lg:mb-[47px] font-cirka">Parking/Storage </p>
            <div class="flex flex-col lg:flex-row w-full gap-[97px] lg:gap-10 xxl:gap-[123px] items-start lg:items-end">
              <div class="w-full flex flex-col gap-[11px] lg:gap-4">
                <div class="w-full flex items-end gap-4 lg:gap-5 flex-wrap">
                  <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0 pr-10 min-w-[115px]">Interior Features</p>
                  <div class="optionItem tracking-[2px] px-6 xxl:px-10 ">Air Conditioning </div>
                  <div class="optionItem tracking-[2px] px-6 xxl:px-10">Dishwasher </div>
                  <div class="optionItem tracking-[2px] px-6 xxl:px-10">Hot tub </div>
                </div>
                <div class="w-full flex items-end gap-4 lg:gap-5 flex-wrap">
                  <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0 pr-10 min-w-[115px]">Utilities</p>
                  <div class="optionItem tracking-[2px] px-6 xxl:px-10 ">Forced air </div>
                  <div class="optionItem tracking-[2px] px-6 xxl:px-10 active">Heat Pump </div>
                  <div class="optionItem tracking-[2px] px-6 xxl:px-10">Radiant </div>
                </div>
                <div class="w-full flex items-end gap-4 lg:gap-5 flex-wrap">
                  <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0 pr-10 min-w-[115px]">Exterior Features </p>
                  <div class="optionItem tracking-[2px] px-6 xxl:px-10 ">Concierge </div>
                  <div class="optionItem tracking-[2px] px-6 xxl:px-10">Exercise Centre </div>
                  <div class="optionItem tracking-[2px] px-6 xxl:px-10">Outdoor Pool </div>
                </div>
                <div class="w-full flex items-end gap-4 lg:gap-5 flex-wrap">
                  <p class="min-w-[66px] md:min-w-[119px] text-xxs md:text-[11px] lg:text-xs mb-0 pr-10 min-w-[115px]">Site Influences </p>
                  <div class="optionItem tracking-[2px] px-6 xxl:px-10">Central Location </div>
                  <div class="optionItem tracking-[2px] px-6 xxl:px-10">Gated Complex </div>
                  <div class="optionItem tracking-[2px] px-6 xxl:px-10">Shopping Nearby </div>
                </div>
              </div>
              <div class="w-full max-w-[115px] lg:max-w-[157px]">
                <div class="flex w-full h-full justify-end items-end">
                  <a href="#" class="flex flex-col max-w-[161px] tracking-[2px] gap-[17px] lg:gap-[38px]">
                    <div class="max-w-[47px] lg:max-w-[81px]">
                      <img src="images/plus-primary.svg" class="w-full object-contain" loading="lazy" />
                    </div>
                    <p class="text-[11px] lg:text-s mb-0">View less details</p>
                  </a>
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
          <p class="ml-auto md:ml-0 pt-[115px] md:pt-[53px] lg:pt-[78px] text-lightWhite text-[11px] lg:text-s max-w-[183px] tracking-[2px] mb-[50px] md:mb-[130px] lg:mb-[184px]">Interested in receiving curated homes from an advisor?</p>
          <div class="text-right">
            <a href="#" class="text-right text-lightWhite text-[11px] lg:text-[15px] tracking-[2px]">
              Connect wıth us now
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- locations -->
    <div class="row pt-[180px] md:pt-[300px] pb-[90px] md:pb-[130px] md:!px-10 !px-0">
      <div class="fullwidth-col">
        <div class="m-auto max-w-[1200px]">
          <p class="text-[45px] md:text-[70px] lg:text-[150px] mb-[19px] lg:mb-[46px] font-cirka text-center">Location</p>
          <div class="hidden lg:flex gap-10 justify-between mb-[55px] md:mb-[44px]">
            <a href="#" class="text-[7px] lg:text-s">Commute</a>
            <a href="#" class="text-[7px] lg:text-s">Restaurants</a>
            <a href="#" class="text-[7px] lg:text-s">Schools</a>
            <a href="#" class="text-[7px] lg:text-s">Supermarkets</a>
            <a href="#" class="text-[7px] lg:text-s">Bus stops </a>
            <a href="#" class="text-[7px] lg:text-s">Hospitals </a>
            <a href="#" class="text-[7px] lg:text-s">Churches </a>
            <a href="#" class="text-[7px] lg:text-s">Parks </a>
          </div>
          <div class="block lg:hidden text-center">
            <details class="dropdown mb-[55px] md:mb-[44px]">
              <summary class="flex gap-2 items-center">
                <p class="text-primary mb-0 text-xxs md:text-xs">Commute</p><i class="bg-icon-chevron-primary w-[6px] h-1 no-repeat bg-center">&nbsp;</i>
              </summary>
              <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                <li><a>Commute</a></li>
                <li><a>Restaurants</a></li>
                <li><a>Schools</a></li>
                <li><a>Supermarkets</a></li>
                <li><a>Bus stops </a></li>
                <li><a>Hospitals </a></li>
                <li><a>Churches </a></li>
                <li><a>Parks </a></li>
              </ul>
            </details>
          </div>
          <div class="w-full">
            <iframe class="border-0 w-full h-full min-h-[289px] md:min-h-[339px] lg:min-h-[592px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2822.7806761080233!2d-93.29138368446431!3d44.96844997909819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b32b6ee2c87c91%3A0xc20dff2748d2bd92!2sWalker+Art+Center!5e0!3m2!1sen!2sus!4v1514524647889" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
    <!-- neighborhood watch -->
    <div class="row pt-[90px] md:pt-[130px]">
      <div class="fullwidth-col relative">
        <div class="mb-[38px] md:mb-0 max-w-[unset] md:max-w-[625px] lg:max-w-[709px] m-auto text-[30px] md:text-[95px] lg:text-[120px] font-cirka leading-[80%]">Neighborhood <br />Guide</div>
        <div class="justify-center flex flex-col md:flex-row gap-[45px] md:gap-[103px] lg:gap-[130px] items-center max-w-[918px] m-auto">
          <div class="w-full min-w-[291px] md:max-w-[291px] lg:max-w-[366px]"><img src="images/r-architecture-JvQ0Q.png" class="max-h-[356px]" /></div>
          <div class="max-w-[380px]">
            <p class="text-[11px] md:text-s lg:text-md mb-8 leading-[180%]">Abbotsford West is part of Abbotsford and is 61.6 km from Downtown Vancouver and 62.2 km from the Vancouver International Airport. There are 16 schools in Abbotsford West including W J Mouat Secondary, Rick Hansen Secondary, and Eugene Reimer Middle School.</p>
            <p class="text-[11px] md:text-s lg:text-md mb-0 leading-[180%]">There are currently 210 homes for sale in Abbotsford West made up of condos, townhomes and houses with an average list price of $961,598. An average Condo in Abbotsford West has 2 bedrooms, is 1,039 SF and lists for $453,956. Condo prices range from $284,900 - $749,000.</p>
          </div>
        </div>
        <div class="absolute left-[83px] top-[3px] md:relative md:top-[unset] md:left-[unset] flex flex-col md:flex-row gap-0 items-center max-w-[184px] md:max-w-[918px] m-auto md:pt-[73px] lg:pt-[100px]">
          <div class="w-full min-w-[291px] max-w-[184px] md:max-w-[291px] lg:max-w-[366px]">&nbsp;</div>
          <p class="text-xxs md:text-[23px] lg:text-[30px] mb-0 font-cirka max-w-[560px]">307 Villas Maribel St is in the Abbotsford West Neighbourhood</p>
        </div>
      </div>
    </div>
    <!-- market watch -->
    <div class="row py-[90px] md:py-[130px]">
      <div class="fullwidth-col">
        <div class="pb-[64px] lg:pb-[101px] flex items-end gap-[5px] lg:gap-[23px] justify-center">
          <p class="mb-0 text-[30px] md:text-[40px] lg:text-[60px] font-cirka leading-[80%]">Market <br />Statistics </p>
          <p class="mb-0 text-xxs lg:text-lg max-w-[100px] lg:max-w-[unset]">Based on Abbotsford West Neighbourhood </p>
        </div>
        <div class="w-full flex items-center justify-center md:justify-between flex-wrap max-w-[1106px] m-auto gap-y-[39px] gap-x-[53px] md:gap-x-0 md:gap-y-0">
          <div class="flex flex-col gap-[15px] items-center justify-center order-1 md:order-1">
            <p class="mb-0 text-xxs lg:text-s tracking-[2px] md:leading-normal">Average sale price</p>
            <p class="mb-0 text-[15px] lg:text-[26px]">$1.3M</p>
            <p class="mb-0 text-xxs lg:text-s tracking-[2px] md:leading-normal flex items-center gap-2"><img src="images/icons/icon-chevron-primary.svg" /><span>-15% in past 30 days
              </span></p>
          </div>
          <div class="w-[1px] h-10 bg-primary hidden md:block order-2">&nbsp;</div>
          <div class="flex flex-col gap-[15px] items-center justify-center order-5 md:order-3">
            <p class="mb-0 text-xxs lg:text-s tracking-[2px] md:leading-normal">Sales</p>
            <p class="mb-0 text-[15px] lg:text-[26px]">46</p>
            <p class="mb-0 text-xxs lg:text-s tracking-[2px] md:leading-normal flex items-center gap-2"><img src="images/icons/icon-chevron-primary.svg" class="rotate-180" /><span>+2% in past 30 days
              </span></p>
          </div>
          <div class="w-[1px] h-10 bg-primary hidden md:block  order-4">&nbsp;</div>
          <div class="flex flex-col gap-[15px] items-center justify-center order-3 md:order-5">
            <p class="mb-0 text-xxs lg:text-s tracking-[2px] md:leading-normal">Active listings</p>
            <p class="mb-0 text-[15px] lg:text-[26px]">210</p>
            <p class="mb-0 text-xxs lg:text-s tracking-[2px] md:leading-normal">June 12, 2023</p>
          </div>
          <div class="w-[1px] h-10 bg-primary hidden md:block  order-6">&nbsp;</div>
          <div class="flex flex-col gap-[15px] items-center justify-center order-2 md:order-7">
            <p class="mb-0 text-xxs lg:text-s tracking-[2px] md:leading-normal">Sales-to-Listing Ratio</p>
            <p class="mb-0 text-[15px] lg:text-[26px]">33%</p>
            <p class="mb-0 text-xxs lg:text-s tracking-[2px] md:leading-normal">Seller’s Market</p>
          </div>
          <div class="w-[1px] h-10 bg-primary hidden md:block  order-8">&nbsp;</div>
          <div class="flex flex-col gap-[15px] items-center justify-center order-4 md:order-9">
            <p class="mb-0 text-xxs lg:text-s tracking-[2px] md:leading-normal">Average Days on Market</p>
            <p class="mb-0 text-[15px] lg:text-[26px]">113</p>
            <p class="mb-0 text-xxs lg:text-s tracking-[2px] md:leading-normal flex items-center gap-2"><img src="images/icons/icon-chevron-primary.svg" /><span>--34% in past 30 days
              </span></p>
          </div>
        </div>
      </div>
    </div>
    <!-- calculators -->
    <div class="row py-[90px] md:py-[130px]">
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
                <p class="text-xs md:text-[17px] lg:text-[26px] mb-[34px]">Mortgage Repayment</p>
                <p class="text-xxs md:text-xs lg:text-base mb-0 max-w-[285px] font-light opacity-70">Understand Loan Amortization and Monthly Payment Breakdowns.</p>
              </div>
              <div class="w-full">
                <p class="text-xs md:text-[17px] lg:text-[26px] mb-[34px]">Property Transfer Tax</p>
                <p class="text-xxs md:text-xs lg:text-base mb-0 max-w-[285px] font-light opacity-70">Estimate the amount of transfer tax you may be required to pay when buying or transferring a property.</p>
              </div>
              <div class="w-full">
                <p class="text-xs md:text-[17px] lg:text-[26px] mb-[34px]">Refinance</p>
                <p class="text-xxs md:text-xs lg:text-base mb-0 max-w-[285px] font-light opacity-70">Calculate Potential Interest Savings, Lower Monthly Payments, and Evaluate the Benefits of Refinancing.</p>
              </div>
            </div>
            <div class="hidden md:block">
              <img src="images/Atwater-11.svg" loading="lazy" alt="" class="w-full max-w-[251px]" />
            </div>
            <div class="max-w-[321px] text-center md:text-left flex flex-col gap-12 md:gap-[67px]">
              <div class="w-full">
                <p class="text-xs md:text-[17px] lg:text-[26px] mb-[34px]">Mortgage Calculator</p>
                <p class="text-xxs md:text-xs lg:text-base mb-0 max-w-[285px] font-light opacity-70">Calculate Monthly Payments, Interest Rates, and Total Costs.</p>
              </div>
              <div class="w-full">
                <p class="text-xs md:text-[17px] lg:text-[26px] mb-[34px]">First-Time Home Buyer</p>
                <p class="text-xxs md:text-xs lg:text-base mb-0 max-w-[285px] font-light opacity-70">Determine the amount of money you need to save for a down payment when purchasing your first home.</p>
              </div>
              <div class="w-full">
                <p class="text-xs md:text-[17px] lg:text-[26px] mb-[34px]">Affordability</p>
                <p class="text-xxs md:text-xs lg:text-base mb-0 max-w-[285px] font-light opacity-70">Determine Your Budget, Estimate Monthly Costs, and Find Your Ideal Property.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- explore homes -->
    <div class="row pt-[90px] md:pt-[130px] pb-[130px] md:pb-[219px] lg:pb-[298px]">
      <div class="fullwidth-col">
        <div class="w-full justify-end gap-[60px] items-center max-w-[1106px] m-auto hidden md:flex mb-8 lg:mb-14">
          <a href="#" class="text-xxs md:text-s">Hot deals</a>
          <a href="#" class="text-xxs md:text-s">Most viewed</a>
          <a href="#" class="text-xxs md:text-s">Latest homes</a>
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