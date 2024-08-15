<?php
require('includes/header.php');
?>

<div class="main-holder">
  <main class="main-content">
    <div class="w-full min-h-[calc(100vh_-_59px)] md:min-h-[calc(100vh_-_104px)] xxl:min-h-[100vh] flex justify-start items-start">
      <div class="row !mt-0 pb-0">
        <div class="fullwidth-col">
          <!-- desktop filter -->
          <div class="max-w-[1200px] w-full mx-auto hidden lg:block mt-[28px] md:mt-[0] xxl:mt-[68px]">
            <div class="max-w-[1200px] w-full mx-auto shadow-[0px_3px_18px_rgba(0,0,0,0.5_)] bg-primary rounded-[10px] flex items-center justify-between gap-6 py-4 lg:py-[35px] pl-[23px] lg:pl-10 pr-[18px] lg:pr-10 mb-[37px]">
              <input type="text" class="w-full h-[31px] lg:h-10 max-w-[188px] lg:max-w-[328px] border-[#707070] bg-white rounded-[5px] border border-solid !ring-0 !outline-0" />
              <div class="flex flex-col">
                <p class="mb-0 text-lightWhite text-xs lg:text-base">Status</p>
                <details class="dropdown">
                  <summary class="text-lightWhite text-xs lg:text-base flex gap-2 items-center"><span class="">FOR Sale</span></summary>
                  <ul class="menu dropdown-content bg-base-100 rounded-box z-[11] w-52 p-2 shadow">
                    <li><a>Item</a></li>
                    <li><a>Item</a></li>
                  </ul>
                </details>
              </div>
              <div class="flex flex-col">
                <p class="mb-0 text-lightWhite text-xs lg:text-base">Type</p>
                <details class="dropdown">
                  <summary class="text-lightWhite text-xs lg:text-base flex gap-2 items-center"><span class="">Condos</span><i class="bg-icon-chevron w-[6px] h-1 no-repeat bg-center">&nbsp;</i></summary>
                  <ul class="menu dropdown-content bg-base-100 rounded-box z-[11] w-52 p-2 shadow">
                    <li><a>Item</a></li>
                    <li><a>Item</a></li>
                  </ul>
                </details>
              </div>
              <div class="flex flex-col min-w-[47px]">
                <p class="mb-0 text-lightWhite text-xs lg:text-base">Price</p>
                <details class="dropdown">
                  <summary class="text-lightWhite text-xs lg:text-base flex gap-2 items-center"><span class="">1m-2m</span><i class="bg-icon-chevron w-[6px] h-1 no-repeat bg-center">&nbsp;</i></summary>
                  <ul class="menu dropdown-content bg-base-100 rounded-box z-[11] w-52 p-2 shadow">
                    <li><a>Item</a></li>
                    <li><a>Item</a></li>
                  </ul>
                </details>
              </div>
              <div class="flex flex-col min-w-[74px]">
                <p class="mb-0 text-lightWhite text-xs lg:text-base">Beds & Baths</p>
                <details class="dropdown">
                  <summary class="text-lightWhite text-xs lg:text-base flex gap-2 items-center"><span class="">3 - 2 </span></summary>
                  <ul class="menu dropdown-content bg-base-100 rounded-box z-[11] w-52 p-2 shadow">
                    <li><a>Item</a></li>
                    <li><a>Item</a></li>
                  </ul>
                </details>
              </div>
              <div class="flex flex-col">
                <p class="mb-0 text-lightWhite text-xs lg:text-base">Age</p>
                <details class="dropdown">
                  <summary class="text-lightWhite text-xs lg:text-base flex gap-2 items-center"><span class="">+10 </span></summary>
                  <ul class="menu dropdown-content bg-base-100 rounded-box z-[11] w-52 p-2 shadow">
                    <li><a>Item</a></li>
                    <li><a>Item</a></li>
                  </ul>
                </details>
              </div>
              <button class="rounded-[10px] bg-white flex items-center justify-center w-[31px] h-[31px] min-w-[31px] min-h-[31px] lg:w-10 lg:h-10 lg:min-w-10 lg:min-h-10"><img src="images/search.svg" /></button>
            </div>
            <div class="w-full flex justify-between items-center mt-[37px] mb-[47px]">
              <p class="text-xxs tracking-[3px] font-semibold mb-0">North Las Vegas (8 results)</p>
              <div class="flex gap-[50px] items-center">
                <a href="#" class="tracking-[3px] text-xxs">All filters</a>
                <a href="#" class="tracking-[3px] text-xxs">Save search </a>
                <details class="dropdown">
                  <summary class="flex gap-2 items-center">
                    <p class="text-primary mb-0 text-xxs md:text-xs">List view </p><i class="bg-icon-chevron-primary w-[6px] h-1 no-repeat bg-center">&nbsp;</i>
                  </summary>
                  <ul class="menu dropdown-content bg-base-100 rounded-box z-[11] w-52 p-2 shadow">
                    <li><a>Option</a></li>
                    <li><a>Option</a></li>
                    <li><a>Option</a></li>
                    <li><a>Option</a></li>
                  </ul>
                </details>
              </div>
              <div class="flex items-center gap-10">
                <a href="#" class="btnSolid w-[113px] lg:w-[141px] !h-[49px]">Compare</a>
                <details class="dropdown">
                  <summary class="flex gap-2 items-center">
                    <p class="text-primary mb-0 text-xxs md:text-xs">Sort by </p><i class="bg-icon-chevron-primary w-[6px] h-1 no-repeat bg-center">&nbsp;</i>
                  </summary>
                  <ul class="menu dropdown-content bg-base-100 rounded-box z-[11] w-52 p-2 shadow">
                    <li><a>Option</a></li>
                    <li><a>Option</a></li>
                    <li><a>Option</a></li>
                    <li><a>Option</a></li>
                  </ul>
                </details>
              </div>
            </div>
          </div>
          <!-- tablet filter -->
          <div class="max-w-[1200px] w-full mx-auto hidden md:block lg:hidden mt-0">
            <div class="max-w-[1200px] w-full mx-auto shadow-[0px_3px_18px_rgba(0,0,0,0.5_)] bg-primary rounded-[10px] flex items-center justify-between gap-6 py-4 lg:py-[35px] pl-[23px] lg:pl-10 pr-[18px] lg:pr-10 mb-[37px]">
              <input type="text" class="w-full h-[31px] lg:h-10 max-w-[188px] lg:max-w-[328px] border-[#707070] bg-white rounded-[5px] border border-solid !ring-0 !outline-0" />
              <div class="flex flex-col">
                <p class="mb-0 text-lightWhite text-xs lg:text-base">Status</p>
                <details class="dropdown">
                  <summary class="text-lightWhite text-xs lg:text-base flex gap-2 items-center"><span class="">FOR Sale</span></summary>
                  <ul class="menu dropdown-content bg-base-100 rounded-box z-[11] w-52 p-2 shadow">
                    <li><a>Item</a></li>
                    <li><a>Item</a></li>
                  </ul>
                </details>
              </div>
              <div class="flex flex-col">
                <p class="mb-0 text-lightWhite text-xs lg:text-base">Type</p>
                <details class="dropdown">
                  <summary class="text-lightWhite text-xs lg:text-base flex gap-2 items-center"><span class="">Condos</span><i class="bg-icon-chevron w-[6px] h-1 no-repeat bg-center">&nbsp;</i></summary>
                  <ul class="menu dropdown-content bg-base-100 rounded-box z-[11] w-52 p-2 shadow">
                    <li><a>Item</a></li>
                    <li><a>Item</a></li>
                  </ul>
                </details>
              </div>
              <div class="flex flex-col min-w-[47px]">
                <p class="mb-0 text-lightWhite text-xs lg:text-base">Price</p>
                <details class="dropdown">
                  <summary class="text-lightWhite text-xs lg:text-base flex gap-2 items-center"><span class="">1m-2m</span><i class="bg-icon-chevron w-[6px] h-1 no-repeat bg-center">&nbsp;</i></summary>
                  <ul class="menu dropdown-content bg-base-100 rounded-box z-[11] w-52 p-2 shadow">
                    <li><a>Item</a></li>
                    <li><a>Item</a></li>
                  </ul>
                </details>
              </div>
              <div class="flex flex-col min-w-[74px]">
                <p class="mb-0 text-lightWhite text-xs lg:text-base">Beds & Baths</p>
                <details class="dropdown">
                  <summary class="text-lightWhite text-xs lg:text-base flex gap-2 items-center"><span class="">3 - 2 </span></summary>
                  <ul class="menu dropdown-content bg-base-100 rounded-box z-[11] w-52 p-2 shadow">
                    <li><a>Item</a></li>
                    <li><a>Item</a></li>
                  </ul>
                </details>
              </div>
              <div class="flex flex-col">
                <p class="mb-0 text-lightWhite text-xs lg:text-base">Age</p>
                <details class="dropdown">
                  <summary class="text-lightWhite text-xs lg:text-base flex gap-2 items-center"><span class="">+10 </span></summary>
                  <ul class="menu dropdown-content bg-base-100 rounded-box z-[11] w-52 p-2 shadow">
                    <li><a>Item</a></li>
                    <li><a>Item</a></li>
                  </ul>
                </details>
              </div>
              <button class="rounded-[10px] bg-white flex items-center justify-center w-[31px] h-[31px] min-w-[31px] min-h-[31px] lg:w-10 lg:h-10 lg:min-w-10 lg:min-h-10"><img src="images/search.svg" /></button>
            </div>
            <div class="w-full flex justify-between items-center my-[37px]">
              <div class="flex items-center gap-5">
                <a href="#" class="btnSolid w-[113px] lg:w-[141px] !h-[38px]">Compare</a>
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
                    <ul class="menu dropdown-content bg-base-100 rounded-box z-[11] w-52 p-2 shadow">
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
          <!-- mobile filter -->
          <div class="max-w-[1200px] w-full mx-auto flex md:hidden justify-between flex-col md:flex-row gap-0 items-start md:items-center mb-0">
            <input type="text" class="w-full h-11 max-w-[328px] border-[#707070] bg-lightWhite rounded-[5px] !border-0 !ring-0 !outline-0 shadow-[0px_3px_18px_rgba(0,0,0,0.5_)]" />
            <div class="w-full flex gap-[50px] items-center justify-between mt-6 mb-[26px]">
              <p class="text-xxs tracking-[3px] font-semibold mb-0">North Las Vegas (8 results)</p>
              <details class="dropdown">
                <summary class="flex gap-2 items-center">
                  <p class="text-primary mb-0 text-xxs md:text-xs">Sort by</p><i class="bg-icon-chevron-primary w-[6px] h-1 no-repeat bg-center">&nbsp;</i>
                </summary>
                <ul class="menu dropdown-content bg-base-100 rounded-box z-[11] w-52 p-2 shadow">
                  <li><a>Option</a></li>
                  <li><a>Option</a></li>
                  <li><a>Option</a></li>
                  <li><a>Option</a></li>
                </ul>
              </details>
            </div>
            <div class="w-[calc(100%_+_40px)] mx-[-20px] overflow-y-auto bg-primary">
              <div class="max-w-[1200px] mx-auto shadow-[0px_3px_18px_rgba(0,0,0,0.5_)] bg-primary flex flex-nowrap items-center justify-between gap-6 py-4 pl-10 pr-[18px] lg:pr-10">
                <div class="flex flex-col min-w-[64px]">
                  <p class="mb-0 text-lightWhite text-xs lg:text-base">Status</p>
                  <details class="dropdown">
                    <summary class="text-lightWhite text-xs lg:text-base flex gap-2 items-center"><span class="">FOR Sale</span></summary>
                    <ul class="menu dropdown-content bg-base-100 rounded-box z-[11] w-52 p-2 shadow">
                      <li><a>Item</a></li>
                      <li><a>Item</a></li>
                    </ul>
                  </details>
                </div>
                <div class="flex flex-col">
                  <p class="mb-0 text-lightWhite text-xs lg:text-base">Type</p>
                  <details class="dropdown">
                    <summary class="text-lightWhite text-xs lg:text-base flex gap-2 items-center"><span class="">Condos</span><i class="bg-icon-chevron w-[6px] h-1 no-repeat bg-center">&nbsp;</i></summary>
                    <ul class="menu dropdown-content bg-base-100 rounded-box z-[11] w-52 p-2 shadow">
                      <li><a>Item</a></li>
                      <li><a>Item</a></li>
                    </ul>
                  </details>
                </div>
                <div class="flex flex-col min-w-[54px]">
                  <p class="mb-0 text-lightWhite text-xs lg:text-base">Price</p>
                  <details class="dropdown">
                    <summary class="text-lightWhite text-xs lg:text-base flex gap-2 items-center"><span class="">1m-2m</span><i class="bg-icon-chevron w-[6px] h-1 no-repeat bg-center">&nbsp;</i></summary>
                    <ul class="menu dropdown-content bg-base-100 rounded-box z-[11] w-52 p-2 shadow">
                      <li><a>Item</a></li>
                      <li><a>Item</a></li>
                    </ul>
                  </details>
                </div>
                <div class="flex flex-col min-w-[74px]">
                  <p class="mb-0 text-lightWhite text-xs lg:text-base">Beds & Baths</p>
                  <details class="dropdown">
                    <summary class="text-lightWhite text-xs lg:text-base flex gap-2 items-center"><span class="">3 - 2 </span></summary>
                    <ul class="menu dropdown-content bg-base-100 rounded-box z-[11] w-52 p-2 shadow">
                      <li><a>Item</a></li>
                      <li><a>Item</a></li>
                    </ul>
                  </details>
                </div>
                <div class="flex flex-col">
                  <p class="mb-0 text-lightWhite text-xs lg:text-base">Age</p>
                  <details class="dropdown">
                    <summary class="text-lightWhite text-xs lg:text-base flex gap-2 items-center"><span class="">+10 </span></summary>
                    <ul class="menu dropdown-content bg-base-100 rounded-box z-[11] w-52 p-2 shadow">
                      <li><a>Item</a></li>
                      <li><a>Item</a></li>
                    </ul>
                  </details>
                </div>
                <button class="rounded-[10px] bg-white flex items-center justify-center w-[31px] h-[31px] min-w-[31px] min-h-[31px] lg:w-10 lg:h-10 lg:min-w-10 lg:min-h-10"><img src="images/search.svg" /></button>
              </div>
            </div>
            <div class="w-full flex gap-[50px] items-center justify-between mt-8 mb-[34px]">
              <a href="#" class="tracking-[3px] text-[11px]">All filters</a>
              <a href="#" class="tracking-[3px] text-[11px]">Save search </a>
              <a href="#" class="tracking-[3px] text-[11px]">Compare </a>
            </div>
          </div>
          <!-- map -->
          <div class="max-w-[1200px] w-[calc(100%_+_40px)] mx-[-20px] md:w-full md:mx-auto">
            <div id="map" class="w-full h-full min-h-[calc(100vh_-_312px)] md:min-h-[calc(100vh_-_325px)] lg:min-h-[calc(100vh_-_355px)]"></div>
          </div>
        </div>
  </main>
</div>


<script>
  function initMap() {
    var myLatLng = {
      lat: -27.7131521,
      lng: 151.8645385
    };
    var map = new google.maps.Map(document.getElementById('map'), {
      center: myLatLng,
      zoom: 18,
      disableDefaultUI: true
    });
    var mapIcon = 'images/icons/icon-map-marker.svg';
    var marker = new google.maps.Marker({
      map: map,
      icon: mapIcon,
      position: myLatLng
    });

    const contentString =
      '<div class=homesItemBlock><div class=imageBlock><div class=with-hover-animation><img alt=""loading=lazy src=images/blogarticle-2.png></div><div class="absolute bg-primary px-4 py-[9px] right-0 top-0"><div class=cbBlock><div class=form-control><label class="flex cursor-pointer gap-3 items-center label z-[1]"><input class="!border-0 bg-[#b9c5d1] checkbox h-[9px] rounded-none w-[9px]"type=checkbox> <span class="!text-[#f8f8f9] label-text text-xxs tracking-[2px]">For sale</span></label></div></div></div></div><div class=contentBlock><div class="flex gap-6 items-start justify-between lg:mb-[47px] mb-[37px] w-full"><p class="mb-0 text-lightWhite !text-lead font-semibold lg:!text-lg md:!text-[17px]">$1,038,000<div class=min-w-[32px]><p class="mb-0 text-lightWhite !leading-[100%] !text-xxs lg:!text-xs">3 Baths<p class="mb-0 text-lightWhite !leading-[100%] !text-xxs lg:!text-xs">2 Beds<p class="mb-0 text-lightWhite !leading-[100%] !text-xxs lg:!text-xs">200 sqft</div></div><p class="mb-0 text-lightWhite !leading-[80%] !text-lg font-cirka lg:!text-[26px] md:!text-md">331 Cactus Sands Ave North LV</div></div>';
    const infowindow = new google.maps.InfoWindow({
      content: contentString,
      pixelOffset: new google.maps.Size(180, 150),
    });

    marker.addListener("click", () => {
      infowindow.open({
        anchor: marker,
        map,
        shouldFocus: false,
      });
    });
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3IaXL9PhNmHxfkCqE5hPHWG_oimG0yZw&callback=initMap"></script>

<style>
  #map .gm-style-iw-chr,
  #map .gm-style .gm-style-iw-tc {
    display: none;
  }

  #map .gm-style-iw.gm-style-iw-c {
    padding-left: 0;
    max-width: 285px !important;
    background: transparent !important;
  }
</style>

<?php
// require('includes/footer.php');
?>