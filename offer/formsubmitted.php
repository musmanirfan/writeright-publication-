<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Writeright Offer || Form Submitted</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window,document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init','1343011006959227');
    fbq('track','PageView');
    </script>
    
    <!-- Your conversion event AFTER fbq is defined -->
    <script>
    fbq('track', 'Lead', {
      value: 100,
      currency: 'USD'
    });
    </script>
</head>

<body>
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KVRGC8W7" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>


  <header class="w-full flex justify-between items-center px-[7.5vw] py-4 fixed top-0 left-0 w-full">
    <a href="<?php echo isset($logosrc) ? $logosrc : './'; ?>">

      <img src="<?php echo isset($logo) ? $logo : './assets/images/logo.png'; ?>" alt="Logo"
        class="sm:w-48 w-40" />
    </a>

    <a href="tel:+16672753686"
      class="bg-[#2C3075] text-white text-[16px] font-[500] rounded-[8px] sm:px-[25px] px-4 py-3 sm:py-5 flex gap-1 items-center">
      <i class="fa fa-phone"></i>+1 (667) 275‑3686
    </a>
  </header>
  <div class="min-h-screen w-full flex justify-center items-center">
    <div class="w-[80%] h-full">
      <img src="./assets/images/thankyou.png" alt="Form Submitted" class="mx-auto" />
      <h1 class="text-center text-3xl font-bold mt-2">Thank you!</h1>
      <p class="text-center text-gray-500 mt-2">
        We have received your request. <br />Our Project Manager will be in
        touch shortly.
      </p>
    </div>
  </div>
</body>

</html>