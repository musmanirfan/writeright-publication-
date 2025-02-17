<?php 
$favicon = "../assets/favicon.ico";
$title = "Writeright Publication | Exclusive Offer | Journal Type";
$logo = "../assets/images/logo.png";
include '../include/header.php';
?>

<section class="flex justify-center items-center h-screen">
    <div class="bg-white sm:p-7 px-0 py-10 rounded-xl border sm:w-[580px] w-[95%] border-[#ddd]">
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
            Do you have a specific Journal Type in mind?
        </h1>
        <form id="journalTypeForm" class="flex flex-col justify-center mt-7">
            <div class="space-y-2 sm:space-y-1">
                <div class="flex gap-2 items-ceanter">
                    <input type="checkbox" id="hightImpact" />
                    <label for="hightImpact">High-Impact Factor Journal (Scopus, Web of Science, SCI, etc.)</label>
                </div>
                <div class="flex gap-2 items-center">
                    <input type="checkbox" id="opanAccess" />
                    <label for="opanAccess">Open-Access Journal</label>
                </div>
                <div class="flex gap-2 items-center">
                    <input type="checkbox" id="reputableJournal" />
                    <label for="reputableJournal">Any reputable journal that fits my manuscript</label>
                </div>
            </div>
        </form>
    </div>
</section>

<div class="fixed bottom-0 left-0 w-full py-4 flex justify-center border border-[#ddd] bg-white">
    <button id="skipBtn" class="text-lg font-semibold text-white bg-[#2C3075] py-[10px] px-10 flex items-center gap-2">
        <span id="skipText">Skip</span>
        <img src="../assets/images/arrowForward.png" alt="arrowForward" />
    </button>
</div>

<?php 
$script = "../assets/js/journal-type.js";
include '../include/js.php';
?>

</body>

</html>