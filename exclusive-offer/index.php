<?php include 'include/header.php';?>

<section class="min-h-screen flex justify-center items-center bg-[#E3E2E1]">
  <div class="px-1 sm:px-0">
    <p class="text-center text-[#8D8C8C] text-2xl">Publish Your Research in</p>
    <h1 class="text-4xl font-bold text-center text-[#2C3075] mt-2">High-Impact Journals - Fast & Hassle-Free!</h1>
    <p class="my-6 text-gray-700 text-center sm:w-[500px] text-[12px] mx-auto leading-[1.6]">
      Get published in Scopus, Web of Science, SCI, and reputed journals with expert assistance.
      Manuscript Editing, Formatting & Submission – All in One Place!
    </p>
    <div class="bg-[#8F98D5] sm:w-[450px] py-6 rounded-3xl shadow-lg border-[#ddd] mx-auto">
      <h5 class="text-center text-2xl text-[#2C3075]">Is your Manuscript ready?</h5>
        <div class="grid grid-cols-2 items-center mt-3 gap-3 w-[300px] mx-auto">
          <button id="yesBtn" onclick="submit('yes')" class="py-3 bg-[#2C3075] text-white font-medium rounded-3xl">Yes</button>
          <button id="noBtn" onclick="submit('no')" class="py-3 bg-[#2C3075] text-white font-medium rounded-3xl">No</button>
        </div>
    </div>
  </div>
</section>

</body>
<?php include 'include/js.php';?>

</html>