<?php
require('includes/header.php');
?>

<div class="main-holder">
  <main class="main-content">
    <!-- title -->
    <div class="row pt-[53px] md:pt-[106px] lg:pt-[114px]">
      <div class="fullwidth-col">
        <div class="!max-w-[1200px] w-full m-auto">
          <h1 class="font-cirka text-[45px] md:text-[84px] lg:text-[150px] mb-0 text-center md:text-left">Atwater Blog</h1>
          <!-- desktop -->
          <div class="hidden md:flex gap-10">
            <a href="#" class="text-[7px] lg:text-s">Programs & grants</a>
            <a href="#" class="text-[7px] lg:text-s">Sellers guide</a>
            <a href="#" class="text-[7px] lg:text-s">Buyers guide</a>
            <a href="#" class="text-[7px] lg:text-s">Market Watch</a>
          </div>
          <!-- mobile -->
          <div class="w-full block md:hidden">
            <div class="w-full text-center">
              <details class="dropdown mb-[38px]">
                <summary class="flex gap-2 items-center">
                  <p class="text-primary mb-0 text-xxs md:text-xs">Programs & grants</p><i class="bg-icon-chevron-primary w-[6px] h-1 no-repeat bg-center">&nbsp;</i>
                </summary>
                <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                  <li><a>Programs & grants</a></li>
                  <li><a>Sellers guide</a></li>
                  <li><a>Buyers guide</a></li>
                  <li><a>Market Watch</a></li>
                </ul>
              </details>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- featured blog -->
    <div class="row pt-[47px] md:pt-[67px] lg:pt-[113px] pb-[56px] md:pb-[168px] lg:pb-[159px]">
      <div class="fullwidth-col">
        <div class="!max-w-[1200px] w-full m-auto">
          <div class="with-hover-animation min-h-[359px] relative">
            <img src="images/r-architecture-IZwmK (1).png" class="min-h-[359px]" />
            <div class="absolute top-0 left-0 z-[1] bg-primary w-[117px] md:w-[146px] lg:w-[204px] h-[39px] md:h-[49px] lg:h-[68px] text-center text-white text-xxs lg:text-s flex items-center justify-center">Latest</div>
            <div class="absolute bottom-0 left-0 right-0 px-[34px] py-[36px] bg-primary/75 text-white">
              <p class="text-[9px] md:text-[11px] lg:text-s mb-5">Programs & grants</p>
              <h1 class="tracking-normal max-w-[385px] lg:max-w-[640px] text-md md:text-[20px] lg:text-[30px] mb-[18px] lg:mb-[29px] font-cirka">This Home Maintenance Checklist Is the Key to Taking Care of Your Home Each Season</h1>
              <p class="text-[8px] md:text-[9px] lg:text-xxs mb-0">21 aprıl 2023 - 8 minutes read</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- latest news -->
    <div class="row pb-[56px] md:pb-[168px] lg:pb-[159px]">
      <div class="fullwidth-col">
        <div class="!max-w-[1200px] w-full m-auto !mb-[45px] md:mb-[65px] lg:mb-[113px]">
          <h1 class="font-cirka text-[45px] md:text-[70px] lg:text-[120px] mb-[37px] md:mb-[49px] lg:mb-[74px]">Latest News</h1>
          <div class="block lg:grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 articleSlider slider-with-dots">
            <div class="col-span-1 px-2.5 lg:px-0">
              <div class="with-hover-animation max-h-[231px] lg:max-h-[279px]">
                <img src="images/blogarticle-1.png" class="min-h-[201px]" />
              </div>
              <div class="pt-[27px] lg:pt-[45px]">
                <p class="text-[9px] md:text-[11px] lg:text-s mb-5">Programs & grants</p>
                <h1 class="text-md lg:text-[25px] mb-[27px] lg:mb-[51px] font-cirka">Valuing a House: <br />What Is It Really Worth?</h1>
                <p class="line-clamp-3 text-[11px] md:text-xs lg:text-md mb-[27px] lg:mb-[51px] !leading-[120%] max-w-[337px]">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                <p class="text-[8px] md:text-[9px] lg:text-xxs mb-[27px] lg:mb-9">21 aprıl 2023 - 8 minutes read</p>
                <a href="#" class="tracking-[2px] text-[11px] lg:text-s mb-0 block w-[75px] lg:w-[90px]">Read more</a>
              </div>
            </div>
            <div class="col-span-1 px-2.5 lg:px-0">
              <div class="with-hover-animation max-h-[231px] lg:max-h-[279px]">
                <img src="images/blogarticle-2.png" class="min-h-[201px]" />
              </div>
              <div class="pt-[27px] lg:pt-[45px]">
                <p class="text-[9px] md:text-[11px] lg:text-s mb-5">Programs & grants</p>
                <h1 class="text-md lg:text-[25px] mb-[27px] lg:mb-[51px] font-cirka">A Guide to First-Time Home <br />Buyer Programs</h1>
                <p class="line-clamp-3 text-[11px] md:text-xs lg:text-md mb-[27px] lg:mb-[51px] !leading-[120%] max-w-[337px]">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                <p class="text-[8px] md:text-[9px] lg:text-xxs mb-[27px] lg:mb-9">21 aprıl 2023 - 8 minutes read</p>
                <a href="#" class="tracking-[2px] text-[11px] lg:text-s mb-0 block w-[75px] lg:w-[90px]">Read more</a>
              </div>
            </div>
            <div class="col-span-1 px-2.5 lg:px-0">
              <div class="with-hover-animation max-h-[231px] lg:max-h-[279px]">
                <img src="images/blogarticle-3.png" class="min-h-[201px]" />
              </div>
              <div class="pt-[27px] lg:pt-[45px]">
                <p class="text-[9px] md:text-[11px] lg:text-s mb-5">Programs & grants</p>
                <h1 class="text-md lg:text-[25px] mb-[27px] lg:mb-[51px] font-cirka">Must have a written <br />agreement to purchase</h1>
                <p class="line-clamp-3 text-[11px] md:text-xs lg:text-md mb-[27px] lg:mb-[51px] !leading-[120%] max-w-[337px]">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                <p class="text-[8px] md:text-[9px] lg:text-xxs mb-[27px] lg:mb-9">21 aprıl 2023 - 8 minutes read</p>
                <a href="#" class="tracking-[2px] text-[11px] lg:text-s mb-0 block w-[75px] lg:w-[90px]">Read more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- looking for a viewing -->
    <div class="row py-[90px] lg:py-[115px]">
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
    <!-- news -->
    <div class="row pt-[90px] lg:pt-[115px] pb-[97px] md:pb-[168px] lg:pb-[235px]">
      <div class="fullwidth-col">
        <div class="!max-w-[1200px] w-full m-auto relative">
          <p class="rotate-[-90deg] mt-[-60px] lg:-mt-2.5 text-xxs md:text-s font-bold absolute w-[150px] tracking-[8px] md:tracking-[13px] xxl:tracking-[10px] left-[-70px] top-[70px] md:top-[48px] lg:top-[16px] xxl:top-[37px]">Sort by</p>
          <div class="md:ml-[29px] lg:ml-[65px] w-full justify-start gap-[45px] lg:gap-[47px] items-center max-w-[1106px] hidden md:flex mb-[6px] lg:mb-[21px]">
            <a href="#" class="text-xxs md:text-s">Alphabetıc</a>
            <a href="#" class="text-xxs md:text-s">Author</a>
            <a href="#" class="text-xxs md:text-s">Date</a>
            <a href="#" class="text-xxs md:text-s">Date</a>
          </div>
          <!-- mobile -->
          <div class="ml-[45px] w-full block md:hidden">
            <div class="w-full text-left">
              <details class="dropdown mb-[9px]">
                <summary class="flex gap-2 items-center">
                  <p class="text-primary mb-0 text-xxs md:text-xs">Programs & grants</p><i class="bg-icon-chevron-primary w-[6px] h-1 no-repeat bg-center">&nbsp;</i>
                </summary>
                <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                  <li><a>Programs & grants</a></li>
                  <li><a>Sellers guide</a></li>
                  <li><a>Buyers guide</a></li>
                  <li><a>Market Watch</a></li>
                </ul>
              </details>
            </div>
          </div>
          <div class="flex flex-col lg:flex-row gap-[19px] md:gap-6 lg:gap-[54px] items-start lg:items-end mb-[19px] md:mb-[51px] lg:mb-[97px]">
            <p class="ml-[45px] md:ml-[29px] lg:ml-[65px] text-[50px] md:text-[70px] xxl:text-[110px] w-full font-cirka leading-[70%] mb-0 lg:w-[460px] xxl:w-[765px] uppercase md:capitalize">All News</p>
            <div class="w-full justify-start gap-[45px] lg:gap-[34px] items-center max-w-[1106px] hidden md:flex">
              <a href="#" class="text-xxs md:text-s">Programs & grants</a>
              <a href="#" class="text-xxs md:text-s">Sellers guide</a>
              <a href="#" class="text-xxs md:text-s">Buyers guide</a>
              <a href="#" class="text-xxs md:text-s">Market Watch</a>
            </div>
          </div>
          <div class="ml-[45px] md:ml-[29px] lg:ml-[65px] w-full justify-start gap-[34px] items-center max-w-[1106px] flex md:hidden mb-[39px]">
            <a href="#" class="text-xxs md:text-s">Alphabetıc</a>
            <a href="#" class="text-xxs md:text-s">Author</a>
            <a href="#" class="text-xxs md:text-s">Date</a>
            <a href="#" class="text-xxs md:text-s">Date</a>
          </div>
          <!-- news -->
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-[78px] md:gap-y-[51px] lg:gap-y-[111px]  md:gap-x-10 lg:gap-x-5">
            <div class="col-span-1">
              <div class="with-hover-animation max-h-[231px] lg:max-h-[279px]">
                <img src="images/blogarticle-1.png" class="min-h-[201px]" />
              </div>
              <div class="pt-[27px] lg:pt-[45px]">
                <p class="text-[9px] md:text-[11px] lg:text-s mb-5">Programs & grants</p>
                <h1 class="text-md lg:text-[25px] mb-[27px] lg:mb-[51px] font-cirka">Valuing a House: <br />What Is It Really Worth?</h1>
                <p class="line-clamp-3 text-[11px] md:text-xs lg:text-md mb-[27px] lg:mb-[51px] !leading-[120%] max-w-[337px]">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                <p class="text-[8px] md:text-[9px] lg:text-xxs mb-[27px] lg:mb-9">21 aprıl 2023 - 8 minutes read</p>
                <a href="#" class="tracking-[2px] text-[11px] lg:text-s mb-0 block w-[75px] lg:w-[90px]">Read more</a>
              </div>
            </div>
            <div class="col-span-1">
              <div class="with-hover-animation max-h-[231px] lg:max-h-[279px]">
                <img src="images/blogarticle-2.png" class="min-h-[201px]" />
              </div>
              <div class="pt-[27px] lg:pt-[45px]">
                <p class="text-[9px] md:text-[11px] lg:text-s mb-5">Programs & grants</p>
                <h1 class="text-md lg:text-[25px] mb-[27px] lg:mb-[51px] font-cirka">A Guide to First-Time Home <br />Buyer Programs</h1>
                <p class="line-clamp-3 text-[11px] md:text-xs lg:text-md mb-[27px] lg:mb-[51px] !leading-[120%] max-w-[337px]">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                <p class="text-[8px] md:text-[9px] lg:text-xxs mb-[27px] lg:mb-9">21 aprıl 2023 - 8 minutes read</p>
                <a href="#" class="tracking-[2px] text-[11px] lg:text-s mb-0 block w-[75px] lg:w-[90px]">Read more</a>
              </div>
            </div>
            <div class="col-span-1">
              <div class="with-hover-animation max-h-[231px] lg:max-h-[279px]">
                <img src="images/blogarticle-3.png" class="min-h-[201px]" />
              </div>
              <div class="pt-[27px] lg:pt-[45px]">
                <p class="text-[9px] md:text-[11px] lg:text-s mb-5">Programs & grants</p>
                <h1 class="text-md lg:text-[25px] mb-[27px] lg:mb-[51px] font-cirka">Must have a written <br />agreement to purchase</h1>
                <p class="line-clamp-3 text-[11px] md:text-xs lg:text-md mb-[27px] lg:mb-[51px] !leading-[120%] max-w-[337px]">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                <p class="text-[8px] md:text-[9px] lg:text-xxs mb-[27px] lg:mb-9">21 aprıl 2023 - 8 minutes read</p>
                <a href="#" class="tracking-[2px] text-[11px] lg:text-s mb-0 block w-[75px] lg:w-[90px]">Read more</a>
              </div>
            </div>
            <div class="col-span-1">
              <div class="with-hover-animation max-h-[231px] lg:max-h-[279px]">
                <img src="images/blogarticle-1.png" class="min-h-[201px]" />
              </div>
              <div class="pt-[27px] lg:pt-[45px]">
                <p class="text-[9px] md:text-[11px] lg:text-s mb-5">Programs & grants</p>
                <h1 class="text-md lg:text-[25px] mb-[27px] lg:mb-[51px] font-cirka">Valuing a House: <br />What Is It Really Worth?</h1>
                <p class="line-clamp-3 text-[11px] md:text-xs lg:text-md mb-[27px] lg:mb-[51px] !leading-[120%] max-w-[337px]">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                <p class="text-[8px] md:text-[9px] lg:text-xxs mb-[27px] lg:mb-9">21 aprıl 2023 - 8 minutes read</p>
                <a href="#" class="tracking-[2px] text-[11px] lg:text-s mb-0 block w-[75px] lg:w-[90px]">Read more</a>
              </div>
            </div>
            <div class="col-span-1">
              <div class="with-hover-animation max-h-[231px] lg:max-h-[279px]">
                <img src="images/blogarticle-2.png" class="min-h-[201px]" />
              </div>
              <div class="pt-[27px] lg:pt-[45px]">
                <p class="text-[9px] md:text-[11px] lg:text-s mb-5">Programs & grants</p>
                <h1 class="text-md lg:text-[25px] mb-[27px] lg:mb-[51px] font-cirka">A Guide to First-Time Home <br />Buyer Programs</h1>
                <p class="line-clamp-3 text-[11px] md:text-xs lg:text-md mb-[27px] lg:mb-[51px] !leading-[120%] max-w-[337px]">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                <p class="text-[8px] md:text-[9px] lg:text-xxs mb-[27px] lg:mb-9">21 aprıl 2023 - 8 minutes read</p>
                <a href="#" class="tracking-[2px] text-[11px] lg:text-s mb-0 block w-[75px] lg:w-[90px]">Read more</a>
              </div>
            </div>
            <div class="block lg:hidden col-span-1">
              <div class="with-hover-animation max-h-[231px] lg:max-h-[279px]">
                <img src="images/blogarticle-2.png" class="min-h-[201px]" />
              </div>
              <div class="pt-[27px] lg:pt-[45px]">
                <p class="text-[9px] md:text-[11px] lg:text-s mb-5">Programs & grants</p>
                <h1 class="text-md lg:text-[25px] mb-[27px] lg:mb-[51px] font-cirka">A Guide to First-Time Home <br />Buyer Programs</h1>
                <p class="line-clamp-3 text-[11px] md:text-xs lg:text-md mb-[27px] lg:mb-[51px] !leading-[120%] max-w-[337px]">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                <p class="text-[8px] md:text-[9px] lg:text-xxs mb-[27px] lg:mb-9">21 aprıl 2023 - 8 minutes read</p>
                <a href="#" class="tracking-[2px] text-[11px] lg:text-s mb-0 block w-[75px] lg:w-[90px]">Read more</a>
              </div>
            </div>
            <div class="col-span-1 md:col-span-2 lg:col-span-1">
              <div class="pt-0 md:pt-[100px] lg:pt-0 flex w-full h-full justify-center lg:justify-start items-center lg:items-start pl-[94px]">
                <a href="#" class="flex flex-col max-w-[131px] lg:max-w-[161px] tracking-[2px] gap-[17px] lg:gap-[38px]">
                  <div class="max-w-[47px] lg:max-w-[81px]">
                    <img src="images/plus-primary.svg" class="w-full object-contain" loading="lazy" />
                  </div>
                  <p class="text-[11px] lg:text-s mb-0">View more posts</p>
                </a>
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