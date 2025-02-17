<?php 
$title = "Writeright Publication | Exclusive Offer | Budget";
$favicon = "../assets/favicon.ico";
$logo = "../assets/images/logo.png";
include '../include/header.php';
?>

<section class="flex justify-center items-center h-screen">
    <div class="bg-white sm:p-7 px-0 py-10 rounded-xl border sm:w-[55%] w-[95%] border-[#ddd]">
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
        <h1 class="text-4xl font-bold text-center">
            What is your estimated budget for publication assistance?

        </h1>
        <form id="budgetForm" class="flex flex-col justify-center mt-7 space-y-6">
            <div class="flex flex-col items-center space-y-4">
              <input type="range" id="budgetRange" name="budgetRange" min="1" max="4" step="1" value="1"
                class="w-[93%] h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer py-[6px]" />
              <div id="rangeLabels" class="flex justify-between w-[93%] text-sm">
                <span>$200 - $400</span>
                <span>$400 - $800</span>
                <span>$800 - $1000</span>
                <span>$1000+</span>
              </div>
            </div>
          </form>
    </div>
</section>


<div class="fixed bottom-0 left-0 w-full py-4 flex flex-col items-center justify-center border border-[#ddd] bg-white">
    <button id="skipBtn" class="text-lg font-semibold text-white bg-[#2C3075] py-[10px] px-10 flex items-center gap-2">
        <span id="skipText">Next</span>
        <img src="../assets/images/arrowForward.png" alt="arrowForward" />
    </button>
</div>

<?php 
$script = "../assets/js/budget.js";
include '../include/js.php';
?>

</body>

</html>