<?php
require('includes/header.php');
?>

<div class="main-holder">
  <main class="main-content">
    <div class="w-full min-h-[calc(100vh_-_59px)] md:min-h-[calc(100vh_-_104px)] xxl:min-h-[100vh] flex justify-center items-center">
      <div class="row py-10">
        <div class="fullwidth-col">
          <div class="m-auto flex items-center justify-center">
            <div class="w-full max-w-[815px] shadow-[0px_3px_15px_rgba(14,32,44,0.13_)] bg-[#f8f8f9] py-[49px] px-5">
              <h1 class="text-[45px] lg:text-[60px] font-cirka text-center mb-4">Filters</h1>
              <p class="text-xxs md:text-s lg:text-base mb-12 text-center tracking-[2px]">Price Range </p>
              <img src="images/filters.svg" alt="" class="m-auto" />
              <div class="max-w-[581px] m-auto flex justify-between gap-6 items-center pt-8">
                <input type="text" class="text-center *:m-auto max-w-[215px] w-full h-14 bg-[#ffffff] rounded-[5px] !border-0 !ring-0 !outline-0" placeholder="min" />
                <div class="h-1 w-[25px] bg-primary">&nbsp;</div>
                <input type="text" class="text-center *:m-auto max-w-[215px] w-full h-14 bg-[#ffffff] rounded-[5px] !border-0 !ring-0 !outline-0" placeholder="max" />
              </div>
              <p class="text-xxs md:text-s lg:text-base mb-11 text-center tracking-[2px] pt-[50px]">Price Range </p>
              <div class="max-w-[581px] m-auto grid grid-cols-2 gap-4">
                <div class="btnSolid w-full">Condo</div>
                <div class="btnSolid w-full">Townhome</div>
                <div class="btnSolid w-full">House</div>
                <div class="btnSolid w-full">Land</div>
              </div>
              <p class="text-xxs md:text-s lg:text-base mb-0 text-center tracking-[2px] pt-[50px]">Open House & Tour Info</p>
              <div class="max-w-[581px] m-auto flex justify-center items-center gap-4 pt-[49px] cbBlock">
                <div class="form-control">
                  <label class="label cursor-pointer items-center flex gap-6">
                    <input type="checkbox" class="checkbox" />
                    <span class="label-text text-[13px]">Open House </span>
                  </label>
                </div>
                <div class="form-control">
                  <label class="label cursor-pointer items-center flex gap-6">
                    <input type="checkbox" class="checkbox" />
                    <span class="label-text text-[13px]">3d tours</span>
                  </label>
                </div>
              </div>
              <div class="max-w-[581px] m-auto grid grid-cols-2 gap-4 pt-[68px]">
                <div class="btnHollow w-full">Clear</div>
                <div class="btnSolid w-full">See 2,014 Homes </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>


<?php
// require('includes/footer.php');
?>