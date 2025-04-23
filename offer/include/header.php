<!DOCTYPE html>
<html lang="en">

<head>
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MTMJ42NB');</script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <?php include 'include/css.php'; ?>
    <title>
        <?php echo isset($title) ? $title : 'Home'; ?>
    </title>
    <meta name="google-site-verification" content="eoQvGFbRf4tINHldCoPIUiDqaD8icW2ghKB_3s__4Og" />
</head>

<body class="hompg">

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T5P5TXHK" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>

    <header class="w-full flex justify-between items-center px-[7.5vw] py-4">
        <a href="<?php echo isset($logosrc) ? $logosrc : './'; ?>">

            <img src="<?php echo isset($logo) ? $logo : './assets/images/logo-white.png'; ?>" alt="Logo" class="sm:w-48 w-40" />
        </a>

        <a href="tel:+16672753686"
            class="bg-[#2C3075] text-white text-[16px] font-[500] rounded-[8px] sm:px-[25px] px-4 py-3 sm:py-5 flex gap-1 items-center">
            <i class="fa fa-phone"></i>+1 (667) 275‑3686
        </a>
    </header>