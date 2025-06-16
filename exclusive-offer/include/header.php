<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Google Tag Manager -->
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-MTMJ42NB');</script>
  <!-- End Google Tag Manager -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="<?php echo isset($favicon) ? $favicon : 'assets/favicon.ico'; ?>" type="image/x-icon" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    body {
      font-family: 'Poppins', sans-serif !important;
    }

    #pagesRange {
      -webkit-appearance: none;
      appearance: none;
      outline: none;
    }

    /* Track styling */
    #pagesRange::-webkit-slider-runnable-track {
      width: 100%;
      height: 2px;
      background: #ddd;
      border-radius: 8px;
    }

    #pagesRange::-moz-range-track {
      width: 100%;
      height: 2px;
      background: #ddd;
      border-radius: 8px;
    }

    #pagesRange::-ms-track {
      width: 100%;
      height: 2px;
      background: #ddd;
      border-radius: 8px;
      border: none;
    }

    /* Thumb styling (Controller) */
    #pagesRange::-webkit-slider-thumb {
      -webkit-appearance: none;
      appearance: none;
      width: 20px;
      height: 20px;
      background: #2C3075;
      margin-top: -10px;
      border-radius: 50%;
      cursor: pointer;
      transition: transform 0.2s ease;
    }

    #pagesRange::-moz-range-thumb {
      width: 20px;
      height: 20px;
      background: #2C3075;
      margin-top: -10px;
      border-radius: 50%;
      cursor: pointer;
      transition: transform 0.2s ease;
    }

    #pagesRange::-ms-thumb {
      width: 20px;
      height: 20px;
      background: #2C3075;
      margin-top: -10px;
      border-radius: 50%;
      cursor: pointer;
      transition: transform 0.2s ease;
    }

    /* Hover/Active Effect for Thumb */
    #pagesRange::-webkit-slider-thumb:hover,
    #pagesRange::-moz-range-thumb:hover,
    #pagesRange::-ms-thumb:hover {
      transform: scale(1.1);
    }
  </style>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <title>
    <?php echo isset($title) ? $title : 'Writeright Publication | Exclusive Offer'; ?>
  </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="hompg">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T5P5TXHK" height="0" width="0"
    style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header class="fixed z-50 top-0 left-0 w-full flex justify-between items-center px-[2vw] py-4">
    <a href="<?php echo isset($logosrc) ? $logosrc : './'; ?>">
      
      <img src="<?php echo isset($logo) ? $logo : 'assets/images/logo.png'; ?>" alt="Logo" class="sm:w-48 w-40" />
    </a>

    <a href="tel:+16672753686"
      class="bg-[#2C3075] text-white text-[16px] font-[500] rounded-[8px] sm:px-[25px] px-4 py-3 sm:py-5 flex gap-1 items-center">
      <i class="fa fa-phone rotate-90"></i>+1 (667) 275‑3686
    </a>
  </header>