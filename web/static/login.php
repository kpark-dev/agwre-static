<?php
require('includes/header.php');
?>

<div class="main-holder">
  <main class="main-content">
    <!-- step 1 -->
    <div class="w-full min-h-[100vh] flex justify-center items-center">
      <div class="row !px-0 md:!py-[116px] lg:!py-20 ">
        <div class="fullwidth-col text-center flex flex-col gap-5">
          <!-- modal trigger -->
          <button data-modal-target="login-modal" data-modal-toggle="login-modal" class="m-auto block text-white bg-primary font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
            Login modal
          </button>
          <!-- modal -->
          <div id="login-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 bottom-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[100vh] max-h-full">
            <div class="relative p-4 w-full  max-h-full">
              <div class="m-auto max-w-[320px] md:max-w-[455px] lg:max-w-[556px] w-full md:shadow-[0px_3px_15px_rgba(14,32,44,0.13_)] rounded-[10px] !bg-[#f8f8f9] pt-[35px] md:pt-10 lg:pt-[51px] pb-[58px] px-10 md:px-[57px] lg:px-[70px]">
                <!-- title -->
                <div class="w-full flex justify-between items-center relative">
                  <h1 class="text-md md:text-[27px] lg:text-[34px] font-cirka text-left mb-0">Welcome to Atwater</h1>
                  <button type="button" class="bg-primary w-[32px] h-[32px] text-white flex min-w-[32px] justify-center min-h-[32px] absolute items-center rounded-[100%] right-0 text-xxs font-bold" data-modal-hide="login-modal">✕
                  </button>
                </div>
                <!-- content -->
                <div class="max-w-[416px] w-full pt-[43px] md:pt-[64px] lg:pt-[77px]">
                  <form class="w-full mb-[49px] md:mb-[72pxpx] lg:mb-[102px]">
                    <div class="w-full flex flex-col items-center md:items-start gap-[10px] md:gap-[17px] mb-5">
                      <p class="text-xxs md:text-xxs lg:text-xs mb-0 tracking-[2px]">First Name</p>
                      <input type="text" class="w-full h-14 bg-white rounded-[5px] !border-0 !ring-0 !outline-0" />
                    </div>
                    <div class="w-full flex flex-col items-center md:items-start gap-[10px] md:gap-[17px] mb-5">
                      <p class="text-xxs md:text-xxs lg:text-xs mb-0 tracking-[2px]">Last Name</p>
                      <input type="text" class="w-full h-14 bg-white rounded-[5px] !border-0 !ring-0 !outline-0" />
                    </div>
                    <div class="w-full flex flex-col items-center md:items-start gap-[10px] md:gap-[17px] mb-[36px] md:mb-[59px] lg:mb-[72px]">
                      <p class="text-xxs md:text-xxs lg:text-xs mb-0 tracking-[2px]">Email Address</p>
                      <input type="email" class="w-full h-14 bg-white rounded-[5px] !border-0 !ring-0 !outline-0" />
                    </div>
                    <button class="h-[48px] md:h-[54px] lg:h-[66px] flex items-center justify-center text-xs lg:text-s border-primary border-solid border rounded-[5px] w-full bg-primary text-white hover:bg-white hover:text-primary tracking-[2px]">Submit</button>
                  </form>
                  <div class="w-full flex items-center justify-center gap-6 md:gap-8 mb-[25px] lg:mb-10">
                    <img src="images/Google.svg" alt="" />
                    <p class="mb-0 text-s md:text-[17px] lg:text-[22px]">Sign in with Google</p>
                  </div>
                  <p class="mb-0 text-s md:text-[17px] lg:text-[22px] text-center">Already have an account? <span class="underline" data-modal-target="signin-modal" data-modal-toggle="signin-modal">Sign in here</span></p>
                </div>
              </div>
            </div>
          </div>
          <!-- end of modal -->
          <!-- modal trigger -->
          <button data-modal-target="signin-modal" data-modal-toggle="signin-modal" class="m-auto block text-white bg-primary font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
            Signin modal
          </button>
          <!-- modal -->
          <div id="signin-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 bottom-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[100vh] max-h-full">
            <div class="relative p-4 w-full  max-h-full">
              <div class="m-auto max-w-[320px] md:max-w-[455px] lg:max-w-[556px] w-full md:shadow-[0px_3px_15px_rgba(14,32,44,0.13_)] rounded-[10px] !bg-[#f8f8f9] pt-[35px] md:pt-10 lg:pt-[51px] pb-[58px] px-10 md:px-[57px] lg:px-[70px]">
                <!-- title -->
                <div class="w-full flex justify-between items-center relative">
                  <h1 class="text-md md:text-[27px] lg:text-[34px] font-cirka text-left mb-0">Sign into your account</h1>
                  <button type="button" class="bg-primary w-[32px] h-[32px] text-white flex min-w-[32px] justify-center min-h-[32px] absolute items-center rounded-[100%] right-0 text-xxs font-bold" data-modal-hide="signin-modal">✕
                  </button>
                </div>
                <!-- content -->
                <div class="max-w-[416px] w-full pt-[43px] md:pt-[64px] lg:pt-[77px]">
                  <form class="w-full mb-[49px] md:mb-[72pxpx] lg:mb-[102px]">
                    <div class="w-full flex flex-col items-center md:items-start gap-[10px] md:gap-[17px] mb-5">
                      <p class="text-xxs md:text-xxs lg:text-xs mb-0 tracking-[2px]">Email Address</p>
                      <input type="email" class="w-full h-14 bg-white rounded-[5px] !border-0 !ring-0 !outline-0" />
                    </div>
                    <div class="w-full flex flex-col items-center md:items-start gap-[10px] md:gap-[17px] mb-5 ">
                      <p class="text-xxs md:text-xxs lg:text-xs mb-0 tracking-[2px]">Password</p>
                      <input type="password" class="w-full h-14 bg-white rounded-[5px] !border-0 !ring-0 !outline-0" />
                    </div>
                    <div class="mb-[36px] md:mb-[59px] lg:mb-[72px] text-right">
                      <a href="#" class="ml-auto opacity-50 text-[8px] md:text-[10px] lg:text-[12px] block">Forgot password?</a>
                    </div>
                    <button class="h-[48px] md:h-[54px] lg:h-[66px] flex items-center justify-center text-xs lg:text-s border-primary border-solid border rounded-[5px] w-full bg-primary text-white hover:bg-white hover:text-primary tracking-[2px]">Submit</button>
                  </form>
                  <div class="w-full flex items-center justify-center gap-6 md:gap-8 mb-[25px] lg:mb-10">
                    <img src="images/Google.svg" alt="" />
                    <p class="mb-0 text-s md:text-[17px] lg:text-[22px]">Sign in with Google</p>
                  </div>
                  <p class="mb-0 text-s md:text-[17px] lg:text-[22px] text-center">Already have an account? <span class="underline" data-modal-target="signin-modal" data-modal-toggle="signin-modal">Sign in here</span></p>
                </div>
              </div>
            </div>
          </div>
          <!-- end of modal -->

          <!-- modal trigger -->
          <button data-modal-target="create-password-modal" data-modal-toggle="create-password-modal" class="m-auto block text-white bg-primary font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
            Create Password modal
          </button>
          <!-- modal -->
          <div id="create-password-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 bottom-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[100vh] max-h-full">
            <div class="relative p-4 w-full  max-h-full">
              <div class="m-auto max-w-[320px] md:max-w-[455px] lg:max-w-[556px] w-full md:shadow-[0px_3px_15px_rgba(14,32,44,0.13_)] rounded-[10px] !bg-[#f8f8f9] pt-[35px] md:pt-10 lg:pt-[51px] pb-[58px] px-10 md:px-[57px] lg:px-[70px]">
                <!-- title -->
                <div class="w-full flex justify-between items-center relative">
                  <h1 class="text-md md:text-[27px] lg:text-[34px] font-cirka text-left mb-0">Create a password</h1>
                  <button type="button" class="bg-primary w-[32px] h-[32px] text-white flex min-w-[32px] justify-center min-h-[32px] absolute items-center rounded-[100%] right-0 text-xxs font-bold" data-modal-hide="create-password-modal">✕
                  </button>
                </div>
                <!-- content -->
                <div class="max-w-[416px] w-full pt-[43px] md:pt-[64px] lg:pt-[77px]">
                  <form class="w-full mb-[49px] md:mb-[72pxpx] lg:mb-[102px]">
                    <div class="w-full flex flex-col items-center md:items-start gap-[10px] md:gap-[17px] mb-5">
                      <p class="text-xxs md:text-xxs lg:text-xs mb-0 tracking-[2px]">Create password</p>
                      <input type="password" class="w-full h-14 bg-white rounded-[5px] !border-0 !ring-0 !outline-0" />
                    </div>
                    <div class="w-full flex flex-col items-center md:items-start gap-[10px] md:gap-[17px] mb-8 md:mb-[54px]">
                      <p class="text-xxs md:text-xxs lg:text-xs mb-0 tracking-[2px]">Re-enter password</p>
                      <input type="password" class="w-full h-14 bg-white rounded-[5px] !border-0 !ring-0 !outline-0" />
                    </div>
                    <div class="w-full flex flex-col gap-5">
                      <div class="flex gap-5 items-center justify-center">
                        <p class="mb-0 text-[8px] md:text-xxs lg:text-xs tracking-[2px]">Must be at least 8 characters</p>
                        <div class="text-white h-[18px] w-[18px] rounded-full bg-primary flex items-center justify-center">✓</div>
                      </div>
                    </div>
                    <button class="h-[48px] md:h-[54px] lg:h-[66px] flex items-center justify-center text-xs lg:text-s border-primary border-solid border rounded-[5px] w-full bg-primary text-white hover:bg-white hover:text-primary tracking-[2px]">Confirm</button>
                  </form>
                  <div class="w-full flex items-center justify-center gap-6 md:gap-8 mb-[25px] lg:mb-10">
                    <img src="images/Google.svg" alt="" />
                    <p class="mb-0 text-s md:text-[17px] lg:text-[22px]">Sign in with Google</p>
                  </div>
                  <p class="mb-0 text-s md:text-[17px] lg:text-[22px] text-center">Already have an account? <span class="underline" data-modal-target="signin-modal" data-modal-toggle="signin-modal">Sign in here</span></p>
                </div>
              </div>
            </div>
          </div>
          <!-- end of modal -->
        </div>
      </div>
    </div>

  </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>

<?php
// require('includes/footer.php');
?>