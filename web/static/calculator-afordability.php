<?php
require('includes/header.php');
?>

<div class="main-holder">
  <main class="main-content">
    <!-- title -->
    <div class="w-full">
      <div class="row pt-[58px] md:pt-[73px] lg:pt-[108px] pb-[50px] md:pb-[90px] lg:pb-[150px]">
        <div class="fullwidth-col">
          <div class="max-w-[1315px] m-auto">
            <div class="w-full flex flex-col lg:flex-row items-center lg:items-start gap-[38px] md:gap-[35px] lg:gap-[86px] mb-[60px] md:mb-[43px] lg:mb-[94px] ">
              <h1 class="text-[30px] leading-[24px] md:text-[50px] md:leading-[40px] lg:text-[90px] lg:leading-[85px] mb-0 relative font-cirka max-w-[495px]">Affordability Calculator </h1>
              <p class="max-w-[361px] opacity-70 lg:max-w-[689px] mb-0 leading-[180%] text-[11px] md:text-xxs lg:text-md text-center lg:text-left">A home affordability calculator is a great place to start your home buying journey. This tool calculates how much home you can reasonably afford based on a lender’s qualification for pre-approval.</p>
            </div>
            <!-- form -->
            <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-[85px] md:gap-[73px] items-center lg:items-start justify-between">
              <div class="mx-auto lg:mx-0 w-full max-w-[468px] lg:max-w-[444px]">
                <div class="w-full max-w-[468px] lg:max-w-[444px] m-auto">
                  <div class="w-full flex flex-col items-center lg:items-start pb-5 lg:pb-[33px]">
                    <p class="text-xxs lg:text-s tracking-[2px] text-center lg:text-left mb-2 lg:mb-4">What’s your annual salary/wages?</p>
                    <input type="text" class="max-w-[unset] lg:max-w-[335px] w-full h-14 bg-[#f8f8f9] rounded-[5px] !border-0 !ring-0 !outline-0">
                  </div> 
                  <div class="w-full flex flex-col items-center lg:items-start pb-5 lg:pb-[33px]">
                    <p class="text-xxs lg:text-s tracking-[2px] text-center lg:text-left mb-2 lg:mb-4">What’s the second applicant’s annual salary/wages? </p>
                    <input type="text" class="max-w-[unset] lg:max-w-[444px] w-full h-14 bg-[#f8f8f9] rounded-[5px] !border-0 !ring-0 !outline-0">
                  </div>
                  <div class="w-full max-w-[444px] flex flex-col items-center lg:items-start pb-5 lg:pb-[33px]">
                    <p class="text-xxs lg:text-s tracking-[2px] text-center lg:text-left mb-2 lg:mb-4">Down Payment </p>
                    <input type="text" class="max-w-[unset] lg:max-w-[335px] w-full h-14 bg-[#f8f8f9] rounded-[5px] !border-0 !ring-0 !outline-0">
                  </div>
                  <div class="w-full max-w-[444px] flex flex-col items-center lg:items-start pb-5 lg:pb-[33px]">
                    <p class="text-xxs lg:text-s tracking-[2px] text-center lg:text-left mb-2 lg:mb-4">Total other ıncomes </p>
                    <input type="text" class="max-w-[unset] lg:max-w-[335px] w-full h-14 bg-[#f8f8f9] rounded-[5px] !border-0 !ring-0 !outline-0">
                  </div>
                  <div class="w-full max-w-[444px] flex flex-col items-center lg:items-start pb-5 lg:pb-[33px]">
                    <p class="text-xxs lg:text-s tracking-[2px] text-center lg:text-left mb-2 lg:mb-4">Total personal and vehicle loan repayments </p>
                    <input type="text" class="max-w-[unset] lg:max-w-[371px] w-full h-14 bg-[#f8f8f9] rounded-[5px] !border-0 !ring-0 !outline-0">
                  </div>
                  <div class="w-full max-w-[444px] flex flex-col items-center lg:items-start pb-5 lg:pb-[33px]">
                    <p class="text-xxs lg:text-s tracking-[2px] text-center lg:text-left mb-2 lg:mb-4">Total credit card limits </p>
                    <input type="text" class="max-w-[unset] lg:max-w-[371px] w-full h-14 bg-[#f8f8f9] rounded-[5px] !border-0 !ring-0 !outline-0">
                  </div>
                </div>
              </div>
              <!-- mobile -->
              <div class="w-full grid lg:hidden grid-cols-1 lg:grid-cols-2 gap-[0]  items-center lg:items-start justify-between">
                <div class="mx-auto lg:mx-0 w-full max-w-[468px] lg:max-w-[496px]">
                  <div class="w-full max-w-[496px] flex flex-col items-center lg:items-start pb-6 md:pb-[73px] lg:pb-[74px]">
                    <p class="max-w-[496px] text-xxs lg:text-s tracking-[2px] text-center lg:text-left mb-2 lg:mb-4">Do you have another source of income?</p>
                    <div class="w-full grid grid-cols-2 gap-[14px] lg:gap-5">
                      <div class="optionItem2 col-span-1 active md:tracking-[2px]">Yes</div>
                      <div class="optionItem2 col-span-1 md:tracking-[2px]">No</div>
                    </div>
                  </div>
                  <div class="w-full max-w-[496px] flex flex-col items-center lg:items-start pb-6 md:pb-[73px] lg:pb-[0]">
                    <p class="max-w-[496px] text-xxs lg:text-s tracking-[2px] text-center lg:text-left mb-2 lg:mb-4">Do you have any credit cards?</p>
                    <div class="w-full grid grid-cols-2 gap-[14px] lg:gap-5">
                      <div class="optionItem2 col-span-1 active md:tracking-[2px]">Yes</div>
                      <div class="optionItem2 col-span-1 md:tracking-[2px]">No</div>
                    </div>
                  </div>
                </div>
                <div class="mx-auto lg:mx-0 w-full max-w-[468px] lg:max-w-[unset]">
                  <div class="w-full max-w-[598px] flex flex-col items-center lg:items-start pb-6 md:pb-[73px] lg:pb-[74px]">
                    <p class="max-w-[598px] text-xxs lg:text-s tracking-[2px] text-center lg:text-left mb-2 lg:mb-4">How many of you are buying the property? </p>
                    <div class="w-full grid grid-cols-2 gap-[14px] lg:gap-5">
                      <div class="optionItem2 col-span-1 active md:tracking-[2px] lg:min-w-[289px]">I’m buying with someone </div>
                      <div class="optionItem2 col-span-1 md:tracking-[2px] lg:max-w-[238px]">Just Me </div>
                    </div>
                  </div>
                  <div class="w-full max-w-[496px] flex flex-col items-center lg:items-start pb-6 md:pb-[73px] lg:pb-[0]">
                    <p class="max-w-[496px] text-xxs lg:text-s tracking-[2px] text-center lg:text-left mb-2 lg:mb-4">Do you have any personal or vehicle loans? </p>
                    <div class="w-full grid grid-cols-2 gap-[14px] lg:gap-5">
                      <div class="optionItem2 col-span-1 active md:tracking-[2px]">Yes</div>
                      <div class="optionItem2 col-span-1 md:tracking-[2px]">No</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt-0 m-auto lg:ml-auto w-full lg:max-w-[682px]">
                <div class="flex justify-between md:justify-start items-start w-full md:gap-[202px]  lg:gap-[148px] mb-[50px] md:mb-[105px]">
                  <p class=" mb-0 text-[24px] md:text-[32px] lg:text-[40px] tracking-[2px] font-semibold">Aggressıve </p>
                  <div class="text-right md:text-left lg:text-center">
                    <p class="mb-0 text-[25px] md:text-[34px] lg:text-[38px] font-semibold">$6,070</p>
                    <p class="mb-0 text-[7px] md:text-[9px] lg:text-xxs tracking-[2px]">Per month</p>
                  </div>
                </div>
                <div class="w-full rangeSliderBlock mb-28 md:mb-[140px]">
                  <div class="slider-range-holder relative">
                    <div class="slider-wrapper">
                      <div id="slider-affordability-range"></div>
                      <p class="absolute -bottom-10 left-0 text-xxs lg:text-xs tracking-[2px] mb-0">Affordable</p>
                      <p class="absolute -bottom-10 right-0 text-xxs lg:text-xs tracking-[2px] mb-0">Aggressive</p>
                    </div>
                  </div>
                </div>
                <div class="flex w-full justify-between items-start flex-col md:flex-row gap-10">
                  <div class="max-w-[252px]">
                    <div class="flex flex-col gap-10 lg:gap-[50px]">
                      <div class="flex gap-[37px] items-center">
                        <p class="text-[10px] lg:text-xxs mb-0">Monthly payment </p>
                        <p class="text-[22px] lg:text-[26px] mb-0 font-semibold">$1865 </p>
                      </div>
                      <div class="flex gap-[37px] items-center">
                        <p class="text-[10px] lg:text-xxs mb-0">Down payment </p>
                        <p class="text-[22px] lg:text-[26px] mb-0 font-semibold">20%
                        </p>
                      </div>
                      <div class="flex gap-[37px] items-center">
                        <a href="#" class="no-underline text-[10px] lg:text-xxs mb-0 tracking-[2px]">Reset to default </a>
                        <p class="text-[22px] lg:text-[26px] mb-0 font-semibold">&nbsp;</p>
                      </div>
                    </div>
                  </div>
                  <div class="max-w-[255px]">
                    <p class="text-[11px] lg:text-xxs mb-8 tracking-[2.5px] leading-[180%]">Lenders are unlikely <br />to preapprove you for this home<br /> price.</p>
                    <p class="text-[11px] lg:text-xxs mb-8 tracking-[2.5px] leading-[180%]">Your current debt-to-income ratio <br />is 44%, exceeding the limit of 43%. </p>
                    <p class="text-[11px] lg:text-xxs mb-8 tracking-[2.5px] leading-[180%]">To improve your chances of pre-approval, consider paying down debts, increasing your down payment, or building up your credit score.</p>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- desktop -->
            <div class="mt-[146px] w-full hidden lg:grid grid-cols-1 lg:grid-cols-2 gap-[85px] md:gap-[73px] items-center lg:items-start justify-between">
              <div class="mx-auto lg:mx-0 w-full max-w-[468px] lg:max-w-[496px]">
                <div class="w-full max-w-[496px] flex flex-col items-center lg:items-start pb-6 md:pb-[73px] lg:pb-[74px]">
                  <p class="max-w-[496px] text-xxs lg:text-s tracking-[2px] text-center lg:text-left mb-2 lg:mb-4">Do you have another source of income?</p>
                  <div class="w-full grid grid-cols-2 gap-[14px] lg:gap-5">
                    <div class="optionItem2 col-span-1 active md:tracking-[2px]">Yes</div>
                    <div class="optionItem2 col-span-1 md:tracking-[2px]">No</div>
                  </div>
                </div>
                <div class="w-full max-w-[496px] flex flex-col items-center lg:items-start pb-6 md:pb-[73px] lg:pb-[0]">
                  <p class="max-w-[496px] text-xxs lg:text-s tracking-[2px] text-center lg:text-left mb-2 lg:mb-4">Do you have any credit cards?</p>
                  <div class="w-full grid grid-cols-2 gap-[14px] lg:gap-5">
                    <div class="optionItem2 col-span-1 active md:tracking-[2px]">Yes</div>
                    <div class="optionItem2 col-span-1 md:tracking-[2px]">No</div>
                  </div>
                </div>
              </div>
              <div class="mx-auto lg:mx-0 w-full max-w-[468px] lg:max-w-[unset]">
                <div class="w-full max-w-[598px] flex flex-col items-center lg:items-start pb-6 md:pb-[73px] lg:pb-[74px]">
                  <p class="max-w-[598px] text-xxs lg:text-s tracking-[2px] text-center lg:text-left mb-2 lg:mb-4">How many of you are buying the property? </p>
                  <div class="w-full grid grid-cols-2 gap-[14px] lg:gap-5">
                    <div class="optionItem2 col-span-1 active md:tracking-[2px] xxl:min-w-[289px]">I’m buying with someone </div>
                    <div class="optionItem2 col-span-1 md:tracking-[2px] lg:max-w-[238px]">Just Me </div>
                  </div>
                </div>
                <div class="w-full max-w-[496px] flex flex-col items-center lg:items-start pb-6 md:pb-[73px] lg:pb-[0]">
                  <p class="max-w-[496px] text-xxs lg:text-s tracking-[2px] text-center lg:text-left mb-2 lg:mb-4">Do you have any personal or vehicle loans? </p>
                  <div class="w-full grid grid-cols-2 gap-[14px] lg:gap-5">
                    <div class="optionItem2 col-span-1 active md:tracking-[2px]">Yes</div>
                    <div class="optionItem2 col-span-1 md:tracking-[2px]">No</div>
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
          <a href="#" class="m-auto w-[316px] h-[58px] text-lightWhite bg-primary rounded-[5px] text-[11px] text-center block leading-[58px] tracking-[1px] hover:opacity-80">Chat wıth us now</a>
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
                <p class="text-xs md:text-[17px] lg:text-[26px] mb-[34px]">Mortgage Repayment</p>
                <p class="text-xxs md:text-xs lg:text-base mb-0 max-w-[285px] font-light opacity-70">Understand Loan Amortization and Monthly Payment Breakdowns.</p>
              </div>
              <div class="w-full">
                <p class="text-xs md:text-[17px] lg:text-[26px] mb-[34px]">Property Transfer Tax</p>
                <p class="text-xxs md:text-xs lg:text-base mb-0 max-w-[285px] font-light opacity-70">Estimate the amount of transfer tax you may be required to pay when buying or transferring a property.</p>
              </div>
            </div>
            <div class="flex flex-col gap-[90px] max-w-[285px]">
              <img src="images/Atwater-11.svg" loading="lazy" alt="" class="hidden m-auto md:block w-full max-w-[109px]" />
              <div class="w-full text-center">
                <p class="text-xs md:text-[17px] lg:text-[26px] mb-[34px]">Refinance</p>
                <p class="text-xxs md:text-xs lg:text-base mb-0 max-w-[285px] font-light opacity-70">Calculate Potential Interest Savings, Lower Monthly Payments, and Evaluate the Benefits of Refinancing.</p>
              </div>
            </div>
            <div class="max-w-[321px] text-center md:text-left flex flex-col gap-12 md:gap-[67px]">
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
                <button class="accordion">q: What is the principal of a loan?</button>
                <div class="panel">
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                </div>
              </div>
              <div class="accordion-holder active">
                <button class="accordion active">How does a 15-year mortgage compare to a 30-year mortgage?</button>
                <div class="panel active" style="display: block;">
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                </div>
              </div>
              <div class="accordion-holder">
                <button class="accordion">q: How are mortgage payments calculated?</button>
                <div class="panel">
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                </div>
              </div>
              <div class="accordion-holder">
                <button class="accordion">q: How much are closing costs?</button>
                <div class="panel">
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                </div>
              </div>
              <div class="accordion-holder">
                <button class="accordion">q: How can you lower your mortgage payments?</button>
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
          <p class="ml-auto md:ml-0 pt-[115px] md:pt-[53px] lg:pt-[78px] text-lightWhite text-[11px] lg:text-s max-w-[183px] tracking-[2px] mb-[50px] md:mb-[130px] lg:mb-[184px]">Interested in receiving curated homes from an advisor?</p>
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