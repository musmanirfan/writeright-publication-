<footer class="!px-0 pt-16 pb-20 w-full">
    <div class="w-[85%] mx-auto ">
        <div class="logo-div grid grid-cols-1 md:grid-cols-4 md:gap-0 gap-7">
            <img src="assets/images/logo-white.png" alt="Design Pro Labs" class="md:h-36 h-24 !object-contain">
            <div class="hidden md:inline"></div>
            <div class="hidden md:inline"></div>
            <div class="h-full">
                <h3 class="uppercase text-2xl font-semibold text-white md:text-center !text-left">Reach us at</h3>
                <ul class="contact-link !text-gray-300 space-y-2 mt-3">
                    <li class="!mx-0 !text-left">
                        <a class="telicon hover:text-white !mx-0 !text-left" href="tel:+16672753686">
                            <i class="fa !mr-1 fa-phone"></i>
                           +1 (667) 275‑3686
                        </a>
                    </li>
                    <li class="!mx-0 !text-left">
                        <a class="telicon hover:text-white !mx-0 !text-left" href="mailto:info@writerightpublication.com">
                            <i class="fa !mr-1 fa-envelope"></i>
                            info@writerightpublication.com
                        </a>
                    </li>
                    <li class="!mx-0 !text-left">
                        <a class="telicon hover:text-white !mx-0 !text-left" href="javascript:;">
                            <i class="fa !mr-1 fa-map-marker"></i>
                            <strong>Address :</strong>
                            5900 Balcones Drive #7494,
Austin, TX 78731
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="flex justify-between md:flex-row flex-col mt-6 items-start md:gap-0 gap-10 md:mr-7">
            <p class="md:w-[65%] text-left md:text-center text-sm text-gray-500">These Terms will be applied fully and
                affect to your use of this Website. By using this Website, you agreed to accept all terms and conditions
                written in here. You must not use this Website if you disagree with any of these Website Standard Terms
                and Conditions.</p>
            <div class="flex items-center gap-3 flex-wrap">
                <div>
                    <a href="https://www.instagram.com/writerightpublication/" target="_blank">
                        <img src="assets/images/instagram.png" class="cursor-pointer" alt="instagram">
                    </a>
                </div>
                <div>
                    <a href="https://www.facebook.com/writerightpublication" targe="_blank">
                        <img src="assets/images/facebook.svg" alt="facebook">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<div style="display: none;" class="popupform" id="popupform">
    <h2>We are here to help!</h2>
    <p>Providing you the perfect solution for your business needs. Let's work together and unlock doors to success.</p>
    <form onSubmit="handlePopupRectForm(event)" class="validate-popupform">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input id="namePopup" type="text" class="required placeholder1" required="" placeholder="Full Name *"
                            name="Name">
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <ul>
                    <li>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="email" id="emailPopup" class="required email placeholder1" required=""
                            placeholder="Email Address *" name="Email">
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <ul>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <input id="phonePopup" type="text" class="required number placeholder1" minlength="10" maxlength="15"
                            required="" placeholder="Phone No. *" name="Number" onkeypress="validate(event)">
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <ul>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <input id="countryPopup" type="text" class="placeholder1" placeholder="Country *"
                            name="Country">
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <ul>
                    <li>
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                        <textarea id="messagePopup" name="Message" class="required placeholder1" required=""
                            placeholder="To help us understand better, enter a brief description about the services you need."></textarea>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <ul>
                    <li>
                        <input type="submit" value="Submit">
                    </li>
                </ul>
            </div>
        </div>
    </form>
</div>

<div class="fixed bottom-7 right-8 z-50">
    <a href="https://wa.me/+16672753686" target="_blank">
        <img src="./assets/images/whatsapp.svg" alt="Whatsapp" class="h-[75px] ">
    </a>
</div>

<?php include 'include/js.php'; ?>
</body>

</html>