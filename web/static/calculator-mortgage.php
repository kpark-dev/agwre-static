<?php
require('includes/header.php');
?>

<div class="main-holder">
  <main class="main-content">
    <!-- title -->
    <div class="w-full">
      <div class="row pt-[11px] md:pt-[68px] lg:pt-[75px] pb-[50px] md:pb-[90px] lg:pb-[150px]">
        <div class="fullwidth-col">
          <div class="max-w-[1315px] m-auto">
            <div class="w-full flex flex-col items-center lg:items-start gap-[38px] md:gap-[35px] lg:gap-[113px] mb-[60px] lg:mb-[94px] ">
              <h1 class="text-[30px] leading-[24px] md:text-[50px] md:leading-[40px] lg:text-[90px] lg:leading-[85px] mb-0 relative font-cirka">Mortgage Calculator</h1>
              <p class="block lg:hidden max-w-[361px] opacity-70 lg:max-w-[689px] mb-0 leading-[180%] text-[11px] md:text-xxs lg:text-md text-center lg:text-left">Estimate your mortgage payment, including the principal and interest, taxes, insurance, HOA, and PMI. Add your location for more accurate estimates.</p>
            </div>
            <div class="w-full hidden lg:flex flex-col md:flex-row gap-6 items-start justify-between">
              <div class="w-full max-w-[720px]">
                <p class="max-w-[361px] opacity-70 lg:max-w-[689px] mb-0 leading-[180%] text-[11px] md:text-xxs lg:text-md text-center lg:text-left">Estimate your mortgage payment, including the principal and interest, taxes, insurance, HOA, and PMI. Add your location for more accurate estimates.</p>
              </div>
              <div class="w-full max-w-[368px]">
                <p class="lg:max-w-[689px] mb-0 leading-[180%] text-base lg:text-[20px] text-center lg:text-left tracking-[2px]">30-year fixed, 24% Interest </p>
              </div>
            </div>
            <!-- form -->
            <div class="w-full flex flex-col lg:flex-row gap-[69px] md:gap-[100px] lg:mb-[113px] items-start justify-between">
              <div class="w-full  m-auto lg:m-0 max-w-[720px] lg:pt-[120px]">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 lg:gap-[50px] items-center lg:items-start justify-center lg:justify-start">
                  <div class="w-full max-w-[484px] lg:max-w-[unset] flex flex-col items-center lg:items-start mx-auto lg:mx-0">
                    <p class="max-w-[unset] lg:max-w-[335px] text-xxs lg:text-s tracking-[2px] text-center lg:text-left mb-2 lg:mb-4 uppercase uppercase">Locatıon </p>
                    <input type="text" class="max-w-[unset] lg:max-w-[335px] w-full h-14 bg-[#f8f8f9] rounded-[5px] !border-0 !ring-0 !outline-0">
                  </div>
                  <div class="w-full max-w-[484px] lg:max-w-[unset] flex flex-col items-center lg:items-start mx-auto lg:mx-0">
                    <p class="max-w-[unset] lg:max-w-[335px] text-xxs lg:text-s tracking-[2px] text-center lg:text-left mb-2 lg:mb-4 uppercase uppercase">Property Price </p>
                    <input type="text" class="max-w-[unset] lg:max-w-[335px] w-full h-14 bg-[#f8f8f9] rounded-[5px] !border-0 !ring-0 !outline-0">
                  </div>
                  <div class="w-full max-w-[484px] lg:max-w-[unset] flex flex-col items-center lg:items-start mx-auto lg:mx-0">
                    <p class="max-w-[unset] lg:max-w-[335px] text-xxs lg:text-s tracking-[2px] text-center lg:text-left mb-2 lg:mb-4 uppercase uppercase">Down Payment </p>
                    <input type="text" class="max-w-[unset] lg:max-w-[335px] w-full h-14 bg-[#f8f8f9] rounded-[5px] !border-0 !ring-0 !outline-0">
                  </div>
                  <div class="w-full max-w-[484px] lg:max-w-[unset] m-auto flex flex-col items-center lg:items-start fullwidthChosen">
                    <p class="max-w-[unset] lg:max-w-[367px] text-xxs lg:text-s tracking-[2px] text-center lg:text-left mb-2 lg:mb-4 uppercase uppercase">Loan Type</p>
                    <select class="w-full chosen-select" data-placeholder="Select Your Options">
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                  </div>
                  <div class="w-full max-w-[484px] lg:max-w-[unset] flex flex-col items-center lg:items-start mx-auto lg:mx-0">
                    <p class="max-w-[unset] lg:max-w-[335px] text-xxs lg:text-s tracking-[2px] text-center lg:text-left mb-2 lg:mb-4 uppercase uppercase">Interest rate</p>
                    <input type="text" class="max-w-[unset] lg:max-w-[335px] w-full h-14 bg-[#f8f8f9] rounded-[5px] !border-0 !ring-0 !outline-0">
                  </div>
                  <div class="hidden lg:block w-full max-w-[484px] lg:max-w-[unset]">
                    <div class="flex w-full h-full justify-center items-center">
                      <a href="#" class="flex flex-col max-w-[131px] lg:max-w-[161px] tracking-[2px] gap-[17px] lg:gap-[38px]">
                        <div class="max-w-[47px] lg:max-w-[81px]">
                          <img src="images/plus-primary.svg" class="w-full object-contain" loading="lazy" />
                        </div>
                        <p class="text-[11px] lg:text-s mb-0">Advanced optıons</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full  m-auto lg:m-0 max-w-[368px]">
                <p class="block lg:hidden lg:max-w-[689px] mb-0 leading-[180%] text-base lg:text-[20px] text-center lg:text-left tracking-[2px]">30-year fixed, 24% Interest </p>
                <div class="relative w-full">
                  <div class="w-auto absolute z-[1] left-[133px] md:left-[138px] lg:left-20 top-[94px] md:top-[106px] text-center">
                    <p class="mb-0 text-[25px] md:text-[34px] lg:text-[38px] font-semibold">$6,070</p>
                    <p class="mb-0 text-[7px] md:text-[9px] lg:text-xxs tracking-[2px]">Per month</p>
                  </div>
                  <div id="donutChart" class="h-[230px] md:h-[270px] w-full"></div>
                  <div class="flex flex-col gap-11 pt-[67px] lg:pt-[76px] items-center lg:items-start">
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
        </div>
      </div>
    </div>
    <!-- not the result -->
    <div class=" row py-[67px] md:py-[137px]">
      <div class="fullwidth-col">
        <div class="w-full max-w-[1007px] m-auto">
          <h2 class="text-center text-[40px] lg:text-[60px] mb-[55px] lg:mb-[85px] font-cirka">Not the result you expected to see?</h2>
          <a href="#" class="m-auto w-[316px] h-[58px] text-lightWhite bg-primary rounded-[5px] text-[11px] text-center block leading-[58px] tracking-[1px] hover:opacity-80 uppercase">Chat wıth us now</a>
        </div>
      </div>
    </div>
    <!-- calculators -->
    <div class="row py-[67px] md:py-[137px]">
      <div class="fullwidth-col">
        <div class="w-full max-w-[1007px] m-auto">
          <div class="block md:hidden overflow-hidden h-20">
            <img src="images/Atwater-11.svg" loading="lazy" alt="" class="rotate-[-90deg] w-20 max-h-[181px] m-auto -mt-10" />
          </div>
          <h2 class="pt-6 md:pt-0 font-cirka text-[45px] md:text-[60px] lg:text-[90px] text-center mb-0 md:mb-4">Other <br class="block md:hidden" />Calculators</h2>
          <p class="text-xs md:text-base opacity-40 md:opacity-100 mb-0 text-center">Calculate your expenses and risks</p>
          <div class="pt-[78px] md:pt-[97px] w-full flex flex-col md:flex-row gap-12 md:gap-[46px] items-center md:items-start">
            <div class="max-w-[321px] text-center md:text-right flex flex-col gap-12 md:gap-[67px]">
              <div class="w-full">
                <p class="text-xs md:text-[17px] lg:text-[26px] mb-[34px] uppercase">Mortgage Repayment</p>
                <p class="text-xxs md:text-xs lg:text-base mb-0 max-w-[285px] font-light opacity-70">Understand Loan Amortization and Monthly Payment Breakdowns.</p>
              </div>
              <div class="w-full">
                <p class="text-xs md:text-[17px] lg:text-[26px] mb-[34px] uppercase">Property Transfer Tax</p>
                <p class="text-xxs md:text-xs lg:text-base mb-0 max-w-[285px] font-light opacity-70">Estimate the amount of transfer tax you may be required to pay when buying or transferring a property.</p>
              </div>
            </div>
            <div class="flex flex-col gap-[90px] max-w-[285px]">
              <img src="images/Atwater-11.svg" loading="lazy" alt="" class="hidden m-auto md:block w-full max-w-[109px]" />
              <div class="w-full text-center">
                <p class="text-xs md:text-[17px] lg:text-[26px] mb-[34px] uppercase">Refinance</p>
                <p class="text-xxs md:text-xs lg:text-base mb-0 max-w-[285px] font-light opacity-70">Calculate Potential Interest Savings, Lower Monthly Payments, and Evaluate the Benefits of Refinancing.</p>
              </div>
            </div>
            <div class="max-w-[321px] text-center md:text-left flex flex-col gap-12 md:gap-[67px]">
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
    <!-- FAQ -->
    <div class="w-full">
      <div class="row pt-[11px] md:pt-[68px] lg:pt-[184px] pb-[130px] md:pb-[219px] lg:pb-[298px]">
        <div class="fullwidth-col">
          <div class="max-w-[1076px] m-auto">
            <div class="w-full flex flex-col items-center lg:items-end gap-[5px] lg:gap-[22px] mb-[66px] lg:mb-[105px]">
              <h1 class="text-[45px] leading-[36px] md:text-[50px] md:leading-[63px] lg:text-[90px] lg:leading-[96px] mb-0 relative font-cirka text-center md:text-left">Faq’s about calculators</h1>
              <p class="ml-auto lg:mr-0 mr-auto max-w-[401px] mb-0 leading-[180%] text-[11px] md:text-xxs lg:text-md lg:pr-[93px]">Calculate your expenses and risks
              </p>
            </div>
            <div class="w-full max-w-[493px] lg:max-w-[1021px] m-auto flex flex-col items-center gap-[15px] lg:gap-8">
              <div class="accordion-holder">
                <button class="accordion uppercase">q: What is the principal of a loan?</button>
                <div class="panel">
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                </div>
              </div>
              <div class="accordion-holder active">
                <button class="accordion active uppercase">How does a 15-year mortgage compare to a 30-year mortgage?</button>
                <div class="panel active" style="display: block;">
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                </div>
              </div>
              <div class="accordion-holder">
                <button class="accordion uppercase">q: How are mortgage payments calculated?</button>
                <div class="panel">
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                </div>
              </div>
              <div class="accordion-holder">
                <button class="accordion uppercase">q: How much are closing costs?</button>
                <div class="panel">
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                </div>
              </div>
              <div class="accordion-holder">
                <button class="accordion uppercase">q: How can you lower your mortgage payments?</button>
                <div class="panel">
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
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
    <!-- explore homes -->
    <div class="row pb-[130px] md:pb-[219px] lg:pb-[298px] pt-[130px] md:pt-[219px] lg:pt-[298px]">
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