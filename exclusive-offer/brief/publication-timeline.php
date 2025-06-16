<?php 
$favicon = "../assets/favicon.ico";
$title = "Writeright Publication | Exclusive Offer | Subject Area";
$logo = "../assets/images/logo.png";
$logosrc = "../";
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
            What is your preferred publication timeline?
        </h1>
        <form id="timelineForm" class="flex flex-col justify-center mt-7">
            <div
                class="flex sm:gap-x-10 gap-y-2 sm:gap-y-1 sm:flex-row flex-col items-center sm:items-start sm:justify-center flex-wrap">
                <div class="flex gap-2 items-ceanter">
                    <input type="checkbox" id="standard" />
                    <label for="standard">Standard (6-12 months)
                    </label>
                </div>
                <div class="flex gap-2 items-center">
                    <input type="checkbox" id="fastTrack" />
                    <label for="fastTrack">Fast-Track (3-6 months)
                    </label>
                </div>
                <div class="flex gap-2 items-center">
                    <input type="checkbox" id="urgent" />
                    <label for="urgent">Urgent (Less than 3 months)</label>
                </div>
            </div>
        </form>
    </div>
</section>


<div class="fixed bottom-0 left-0 w-full py-4 flex flex-col items-center justify-center border border-[#ddd] bg-white">
    <p class="text-gray-600 mb-1"><Span class="font-semibold">Note: </Span>For faster publications extra charges may apply</p>
    <button id="skipBtn" class="text-lg font-semibold text-white bg-[#2C3075] py-[10px] px-10 flex items-center gap-2">
        <span id="skipText">Skip</span>
        <img src="../assets/images/arrowForward.png" alt="arrowForward" />
    </button>
</div>

<?php 
$script = "../assets/js/publication-timeline.js";
include '../include/js.php';
?>

</body>

</html>