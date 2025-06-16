<?php include 'include/header.php';?>

<div
  class="min-h-screen w-full flex justify-center items-center">
  <div class="w-[80%] h-full">
    <img src="assets/images/thankyou.png" alt="Form Submitted" class="mx-auto" />
    <h1 class="text-center text-3xl font-bold mt-2">Thank you!</h1>
    <p class="text-center text-gray-500 mt-2">
      We have received your request. <br />Our Project Manager will be in
      touch shortly.
    </p>
  </div>
</div>
<!--Start of Tawk.to Script-->

<?php 
    $script = "../assets/js/personal-info.js";
    include '../include/js.php';
    ?>

</body>

</html>