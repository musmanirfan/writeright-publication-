<?php 
$favicon = "../assets/favicon.ico";
$title = "Writeright Publication | Exclusive Offer | Budget";
$logo = "../assets/images/logo.png";
$logosrc = "../";
include '../include/header.php';
?>

<section class="w-[95%] sm:w-[73%] 2xl:w-[1500px] mx-auto sm:py-32 py-48">
  <div class="flex justify-center mb-10 items-center whitespace-nowrap">
    <div class="sm:w-9 sm:h-9 w-7 h-7 rounded-full flex justify-center items-center bg-[#2C3075] text-white">
      1
    </div>
    <div class="sm:w-20 w-11 h-px bg-black"></div>
    <div class="w-8 h-8 rounded-full flex justify-center items-center border border-black">
      2
    </div>
    <div class="sm:w-20 w-11 h-px bg-black"></div>
    <div class="w-8 h-8 rounded-full flex justify-center items-center border border-black">
      3
    </div>
    <div class="sm:w-20 w-11 h-px bg-black"></div>
    <div class="w-8 h-8 rounded-full flex justify-center items-center border border-black">
      4
    </div>
    <div class="sm:w-20 w-11 h-px bg-black"></div>
    <div class="w-8 h-8 rounded-full flex justify-center items-center border border-black">
      5
    </div>
  </div>
  <h1 class="sm:text-5xl text-4xl font-bold text-center">
    Enter Your Details:
  </h1>
  <div class="mt-8 space-y-4 flex flex-col">
    <input id="email" type="text"
      class="md:w-[70%] w-[80%] border-[#d7d7d7] border-[2px] rounded-lg mx-auto py-[14px] px-[15px]"
      required placeholder="Please Enter Your Email" name="email" />
    <div class="md:w-[70%] w-[80%] border-[#d7d7d7] border-[2px] rounded-lg mx-auto py-[14px] px-[15px] relative">
      <input id="phone" type="text" class="focus:outline-none w-full" required
        placeholder="Please Enter Your Phone Number" name="phone" />
        <a href="https://wa.me/+16672753686" target="_blank" class="absolute right-3 top-[14px] text-sm text-blue-600 font-medium underline">Conatact us on Whatsapp</a>
    </div>
    <input id="country" type="text"
      class="md:w-[70%] w-[80%] border-[#d7d7d7] border-[2px] rounded-lg mx-auto py-[14px] px-[15px]"
      required placeholder="Please Enter Your Country Name" name="country" />
  </div>
</section>
<div class="fixed bottom-0 left-0 w-full py-4 flex flex-col items-center justify-center border border-[#ddd] bg-white">
  <button id="skipBtn" class="text-lg font-semibold text-white bg-[#2C3075] py-[10px] px-10 flex items-center gap-2">
    <span id="skipText">Next</span>
    <img src="../assets/images/arrowForward.png" alt="arrowForward" />
  </button>
</div>

<?php 
$script = "../assets/js/personal-info.js";
include '../include/js.php';
?>

</body>

</html>