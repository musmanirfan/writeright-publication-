<?php $title = "Writeright Publication | Special Offer";
include 'include/header.php'; ?>

<section id="home"
  class="min-h-screen flex justify-center items-center bg-[url(./assets/images/banner.jpg)] bg-overlay bg-cover bg-center bg-no-repeat">
  <div
    class="grid md:grid-cols-5 grid-cols-1 md:gap-0 gap-y-10 items-center sm:w-[85%] w-[90%] mx-auto z-20  2xl:w-[1500px] pt-[8.5rem] pb-16">
    <div class="col-span-3 relative md:pr-[60px]">
      <h1 class="sm:text-[2.5rem] text-2xl font-bold text-white md:leading-[50px]">
        Research Publication & Writing Services
        Starting at Just
        <span class="text-[#343bb1]">$249</span>
      </h1>
      <p class="text-white mt-2 md:mt-0 text-xl lg:pr-16">
        Get expert assistance in research writing, journal formatting, and
        publication — tailored for students, scholars, and professionals.
      </p>
      <ul class="space-y-2 my-3">
        <li>
          <div class="flex items-center gap-2">
            <div class="h-4 w-4 rounded-full flex items-center justify-center bg-white whitespace-nowrap">
              <img src="assets/images/check.png" alt="tick" class="h-[11px] object-contain">
            </div>
            <p class="text-white text-[15px] font-light	">Academic & Professional Writing</p>
          </div>
        </li>
        <li>
          <div class="flex items-center gap-2">
            <div class="h-4 w-4 rounded-full flex items-center justify-center bg-white whitespace-nowrap">
              <img src="assets/images/check.png" alt="tick" class="h-[11px] object-contain">
            </div>
            <p class="text-white text-[15px] font-light	">Journal Formatting & Submission
            </p>
          </div>
        </li>
        <li>
          <div class="flex items-center gap-2">
            <div class="h-4 w-4 rounded-full flex items-center justify-center bg-white whitespace-nowrap">
              <img src="assets/images/check.png" alt="tick" class="h-[11px] object-contain">
            </div>
            <p class="text-white text-[15px] font-light	">Research Editing & Proofreading

            </p>
          </div>
        </li>
        <li>
          <div class="flex items-center gap-2">
            <div class="h-4 w-4 rounded-full flex items-center justify-center bg-white whitespace-nowrap">
              <img src="assets/images/check.png" alt="tick" class="h-[11px] object-contain">
            </div>
            <p class="text-white text-[15px] font-light	">Thesis & Manuscript Writing
            </p>
          </div>
        </li>
        <li>
          <div class="flex items-center gap-2">
            <div class="h-4 w-4 rounded-full flex items-center justify-center bg-white whitespace-nowrap">
              <img src="assets/images/check.png" alt="tick" class="h-[11px] object-contain">
            </div>
            <p class="text-white text-[15px] font-light	">100% Money Back Guarantee
            </p>
          </div>
        </li>
      </ul>
      <div class="md:gap-3 mt-3 flex flex-wrap md:justify-start justify-between">
        <div
          class="md:!px-4 md:py-0 p-2 flex item-center rounded-lg text-lg md:h-16 !hover:text-black bg-transparet !border-white text-white border focus:outline-none transition-all">
          <a href="javascript:;" class="chat hover:!text-white !mt-2">Talk With Expert
          </a>
        </div>
        <a href="javascript:;" name="for $244" data-fancybox="" title="Lets Get Started"
          class="md:!px-4 md:py-0 p-2 flex item-center rounded-lg text-lg md:h-16 !hover:text-black bg-[#2C3075] !border-[#2C3075] text-white border focus:outline-none transition-all"
          data-src="#popupform"><button style="outline:none;"
            class="hover:text-black transition-all hover:!text-white hover:!opacity-90">Claim The Services
            Now</button></a>
      </div>
    </div>
    <form onSubmit="handleBannerForm(event, 'BannerFormWebsite')"
      class="shadow-2xl !border-2 !border-[#E4FF3E] !outline-[#E4FF3E] py-4 px-8 md:w-[93%] col-span-2 !w-full h-fit mx-auto rounded-xl relative bg-[rgba(255,255,255,0.5)]">
      <h1 class="text-center text-[#2C3075] text-2xl font-bold mb-3">100% Money Back Guarantee</h1>
      <div class="space-y-4">
        <div>
          <input placeholder="Name" type="text" id="name"
            class="w-full text-black p-3 text-base focus:outline-none border rounded !border-[#C6C6C6] bg-[#F3F3F3]" />
        </div>
        <div>
          <input required placeholder="Your Email Address?" type="text" id="email"
            class="w-full text-black p-3 text-base focus:outline-none border rounded !border-[#C6C6C6] bg-[#F3F3F3]" />
        </div>
        <div>
          <input required placeholder="Your Phone No?" type="text" id="phone"
            class="w-full text-black p-3 text-base focus:outline-none border rounded !border-[#C6C6C6] bg-[#F3F3F3]" />
        </div>
        <div>
          <textarea placeholder="Share any specific ideas or requirements you have in mind" type="text" id="description"
            class="w-full text-black p-3 text-base focus:outline-none border rounded !border-[#C6C6C6] bg-[#F3F3F3]"></textarea>
        </div>
      </div>
      <button type="submit" class="w-full py-3 text-xl font-medium bg-[#2C3075] mt-3 rounded-lg text-white">Get Started
        Now</button>
      <img src="asets/images/blackfriday-tag.jpg" alt="" class="left-0 -top-11 absolute !z-30">
    </form>
  </div>
</section>

<!-- <section id="portfolio" class="sm:w-[85%] w-[90%] mx-auto my-20 2xl:w-[1500px]">
  <h1 class="text-center text-[46px] font-bold">Our Portfolio</h1>
  <p class="text-xl mt-1 text-center">Browse our expertly crafted website designs, organized by categories to suit your
    business needs.</p>
  <ul class="flex flex-wrap gap-[10px] items-center justify-center my-4 nav nav-pills" id="portfolioTabs"
    role="tablist">
    <li class="nav-item" role="presentation">
      <button style="border: 2px solid black;"
        class="w-[200px] py-2 active !border-2 !border-black text-black font-medium rounded nav-link" id="tab-Custom"
        data-bs-toggle="pill" data-bs-target="#content-Custom" type="button" role="tab" aria-controls="content-Custom"
        aria-selected="true">
        CMS Websites
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button style="border: 2px solid black;"
        class="w-[200px] py-2 !border-2 !border-black text-black font-medium rounded nav-link" id="tab-Ecommerce"
        data-bs-toggle="pill" data-bs-target="#content-Ecommerce" type="button" role="tab"
        aria-controls="content-Ecommerce" aria-selected="false">
        E-Commerce Websites
      </button>
    </li>
  </ul>


  <div class="tab-content">
    <div class="tab-pane fade show active" id="content-Custom" role="tabpanel" aria-labelledby="tab-Custom">
      <?php /* include 'include/website-portfolio.php'; */?>
    </div>

    <div class="tab-pane fade" id="content-Ecommerce" role="tabpanel" aria-labelledby="tab-Ecommerce">
      <?php /* include 'include/ecomm-portfolio.php'; */?>
    </div>
  </div>
</section> -->

<section class="packages-block !mt-20 !p-0" id="pricingSection">
  <div class="sm:w-[85%] w-[90%] mx-auto 2xl:w-[1500px]">
    <h2 class="text-3xl mb-3 font-semibold mx-auto w-full text-center">
      Pricing Plans That Fit Every Researcher’s Need
    </h2>
    <p class="text-center text-wrap -mt-2">
      At <span class="text-[#2C3075] !inline-block !-mt-1 font-semibold">WriteRight Publication,</span> we deliver premium publication
services at affordable rates. Whether you're starting your thesis,
submitting to Scopus-indexed journals, or aiming for an ISBN-
registered eBook — we’ve got a package tailored to your needs.
    </p>
  </div>
  <div class="!max-w-[75rem] mx-auto mt-8 mb-8 md:mb-0 shadow-lg">
    <div
      class="bg-white relative hover:bg-[#2C3075] rounded-lg p-6 md:py-12 border-4 border-orange-500 flex flex-wrap !flex-col md:!flex-row bg-before items-center "
      style="box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);">
      <span class="after-for-big-pricing"></span>
      <div class="text-center w-full sm:w-1/3 !hover:bg-transparent">
        <div class="flex justify-center mb-1">
          <i class="fas fa-layer-group text-4xl text-[#2C3075]"></i>
        </div>
        <h3 class="text-xl font-semibold text-gray-800">GOLD Package – Enhanced Publication Support</h3>
        <p class="text-5xl font-bold text-[#2C3075] my-2"><span class="text-3xl font-semibold">$</span>249</p>
        <a href="https://www.paypal.com/ncp/payment/JY6SR7PE89PF8" class="hidden md:inline">
          <button
            class="mt-3 hover:!border-[#2C3075] hover:!border-2 px-6 py-2 bg-[#2C3075] font-medium rounded-md hover:bg-white transition-all hover:!text-[#2C3075] !text-white">
            <i class="fas fa-hand-pointer"></i> Buy Now - Click
          </button>
        </a>
      </div>
      <div class="mt-8 md:mt-0 sm:w-2/3 grid grid-cols-1 md:grid-cols-2 gap-6 !hover:bg-transparent">
        <div>
          <h4 class="text-lg font-semibold text-gray-800 mb-3">What’s Included:</h4>
          <ul class="text-sm text-gray-600 space-y-3">
            <li class="flex items-start text-black text-md">
              <i
                class="fas fa-check text-[#2C3075] fa-xs	mt-1 mr-2 border border-1 !border-[#2C3075] px-1 py-2 rounded-full"></i>
                Manuscript Evaluation by Experts
            </li>
            <li class="flex items-start text-black">
              <i
                class="fas fa-check text-[#2C3075] fa-xs	mt-1 mr-2 border border-1 !border-[#2C3075] px-1 py-2 rounded-full"></i>5
                In-depth Editing, Proofreading & Formatting
            </li>
            <li class="flex items-start text-black">
              <i
                class="fas fa-check text-[#2C3075] fa-xs	mt-1 mr-2 border border-1 !border-[#2C3075] px-1 py-2 rounded-full"></i>
                Journal Guideline Compliance (Q3/Q2 Journals)
            </li>
            <li class="flex items-start text-black">
              <i
                class="fas fa-check text-[#2C3075] fa-xs	mt-1 mr-2 border border-1 !border-[#2C3075] px-1 py-2 rounded-full"></i>
                Turnaround in 7–10 Days
            </li>
            <li class="flex items-start text-black">
              <i
                class="fas fa-check text-[#2C3075] fa-xs	mt-1 mr-2 border border-1 !border-[#2C3075] px-1 py-2 rounded-full"></i>
                Updated Version Shared for Your Approval

            </li>

            <li class="flex items-start text-black">
              <i
                class="fas fa-check text-[#2C3075] fa-xs	mt-1 mr-2 border border-1 !border-[#2C3075] px-1 py-2 rounded-full"></i>
                Journal Recommendation & Submission


            </li>
            <li class="flex items-start text-black">
              <i
                class="fas fa-check text-[#2C3075] fa-xs	mt-1 mr-2 border border-1 !border-[#2C3075] px-1 py-2 rounded-full"></i>
                Reviewer Feedback Handling

            </li>
            <li class="flex items-start text-black">
              <i
                class="fas fa-check text-[#2C3075] fa-xs	mt-1 mr-2 border border-1 !border-[#2C3075] px-1 py-2 rounded-full"></i>
                100% Satisfaction & Money Back Guarantee

            </li>
          </ul>
        </div>
        <div>
          <h4 class="text-lg font-semibold text-gray-800 mb-3">BONUS (Free with this offer):
          </h4>
          <ul class="text-sm text-gray-600 space-y-3">
            <li class="flex items-start text-black">
              <i
                class="fas fa-check text-[#2C3075] fa-xs	mt-1 mr-2 border border-1 !border-[#2C3075] px-1 py-2 rounded-full"></i>
                 Free Plagiarism Report (Turnitin)
            </li>
            <li class="flex items-start text-black">
              <i
                class="fas fa-check text-[#2C3075] fa-xs	mt-1 mr-2 border border-1 !border-[#2C3075] px-1 py-2 rounded-full"></i> Complimentary Cover Letter Creation
            </li>
            <li class="flex items-start text-black">
              <i
                class="fas fa-check text-[#2C3075] fa-xs	mt-1 mr-2 border border-1 !border-[#2C3075] px-1 py-2 rounded-full"></i>  Priority Review by a PhD Editor
            </li>
          </ul>
        </div>
      </div>
      <img class="absolute left-0 top-0 h-36" src="assets/images/promotional.png" />
      <a class="md:hidden inline" href="https://www.paypal.com/ncp/payment/JY6SR7PE89PF8">
        <button
          class="mt-3 hover:!border-[#2C3075] hover:!border-2 px-6 py-2 bg-[#2C3075] font-medium rounded-md hover:bg-white transition-all hover:!text-[#2C3075] !text-white">
          <i class="fas fa-hand-pointer"></i> Buy Now - Click
        </button>
      </a>
    </div>
  </div>
  <div class="container -mt-8">
    <div class="row">
      <div class="tab-content ">
        <div id="logo" class="tab-pane fade in active show">
          <!-- logo_pack -->
          <?php include 'include/website-pack.php'; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section
  class="w-full bg-[url(assets/images/cta-bg1.webp)] md:h-80 md:py-0 py-20 bg-fixed flex items-center text-center text-white justify-center bg-no-repeat !bg-cover">
  <div class="space-y-6">
    <h3 class="text-4xl font-bold">Ready to Publish Your Research? </h3>
    <p class="text-xl max-w-[800px]">Let our expert team help you craft, refine, and publish your
work in top-tier journals.
Our PhD-qualified experts ensure your research meets the
highest
academic standards.</p>
    <div class="flex flex-wrap items-center gap-3 justify-center !mt-6">
      <div>
        <a href="#pricingSection"
          class="border border-white text-white bg-transparent rounded py-[14px] px-[11px] text-[18px] font-medium text-lg">See
          Pricing</a>
      </div>
      <button data-src="#popupform" name="for $244" data-fancybox="" title="Lets Get Started"
        class="py-[14px] px-[11px] text-[18px] font-medium text-lg bg-[#2C3075] text-white rounded">Let's Work
        Together</button>
    </div>
  </div>
</section>

<section class="sm:w-[85%] w-[90%] mx-auto py-20 2xl:w-[1500px] space-y-10">
  <div class="space-y-5">
    <h2 class="text-3xl mb-3 font-semibold mx-auto w-full text-center">
    Empowering Researchers with Impactful Publications, <br> <span class="text-[#2C3075]"> Research Publication Solutions.</span>
    </h2>
    <p class="text-center text-wrap">
      At <span class="text-[#2C3075] !inline-block !-mt-1">WriteRight Publication,</span> we empower students, professionals, 
and institutions to publish with confidence. Our skilled academic 
writers and editors collaborate closely with clients to deliver high-
quality, impactful research ready for global recognition. Whether 
you're beginning your first research paper or targeting top 
journals, we’re here to bring your work to life.
    </p>
  </div>
  <ul class="grid md:grid-cols-5 grid-cols-3 gap-8">
    <li>
      <div class="h-icon">
        <img class="mx-auto" src="assets/images/help-icon-1.png" />
        <p class="text-center !leading-0">Constant Client <br />Coordination</p>
      </div>
    </li>
    <li>
      <div class="h-icon">
        <img class="mx-auto" src="assets/images/help-icon-2.png" />
        <p class="text-center">Supreme Customer <br />Satisfaction</p>
      </div>
    </li>
    <li>
      <div class="h-icon">
        <img class="mx-auto" src="assets/images/help-icon-3.png" />
        <p class="text-center">100% Ownership <br />Rights</p>
      </div>
    </li>
    <li>
      <div class="h-icon">
        <img class="mx-auto" src="assets/images/help-icon-4.png" />
        <p class="text-center">Secure Money Back <br />Guarantee</p>
      </div>
    </li>
    <li>
      <div class="h-icon" id="about">
        <img class="mx-auto" src="assets/images/help-icon-5.png" />
        <p class="text-center">Industry Proven <br />Professionals</p>
      </div>
    </li>
  </ul>
</section>

<section class="about-new-sec">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 p0">
        <div class="about-img-st">
          <img src="assets/images/about-1.png" />
        </div>
      </div>
      <div class="col-sm-6">
        <div class="about-txt-st">
          <h2>who we are</h2>
          <p class="mt-3">
            At <span class="text-[#2C3075] !inline-block !-mt-1">WriteRight Publication,</span> we are a team of PhD-qualified 
researchers, academic writers, and publication consultants 
committed to guiding scholars, students, and professionals through
the journey of successful publication. With operations based in the 
U.S. and clients around the globe, we bring academic rigor, 
technical precision, and personalized support to every project. Our 
team specializes in thesis writing, journal publication (Scopus, Q1–
Q4), conference papers, and eBook creation. Every manuscript is 
reviewed and refined under the supervision of our PhD experts, 
ensuring it meets the highest academic and publishing standards. 
Whether you're just beginning or preparing for submission, we are 
with you at every stage.
          </p>
          <div class="flex gap-6 mt-4">
            <div
              class="bg-[#2C3075] text-white text-lg font-semibold hover:opacity-90 rounded-lg transition-all duration-300 active:scale-90 w-fit">
              <a href="javascript:;" class="chat banner-btn yb-btn various">Live Chat
              </a>
            </div>
            <a href="javascript:;" name="for $244" data-fancybox="" title="Lets Get Started"
              class="px-4 flex item-center rounded-lg text-lg !border-[#2C3075] text-[#2C3075] border focus:outline-none"
              data-src="#popupform"><button style="outline: none">Get in Touch</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="about-new-sec about-new-sec2 mb-32">
  <div class="container-fluid">
    <div class="row flex-col-reverse md:flex-row mt-10 md:mt-0">
      <div class="col-sm-6">
        <div class="about-txt-st">
          <h2>what we do</h2>
          <p class="mt-3">
            At <span class="text-[#2C3075] !inline-block !-mt-1">WriteRight Publication,</span> we provide comprehensive academic 
publishing solutions tailored to meet international standards. Our 
services cover everything from topic finalization and research 
writing to journal formatting, submission, and peer-review 
handling. What sets us apart is the involvement of our PhD experts 
— who bring deep domain knowledge, critical insight, and years of 
academic experience to your work. Whether you need a thesis 
written from scratch or help polishing a research manuscript for a 
Q1/Q2 journal, our team ensures each piece is not only publication-
ready but impactful. With a focus on quality, credibility, and client 
satisfaction, we help turn your research into globally recognized 
contributions.
          </p>
          <div class="flex gap-6 mt-4">
            <div
              class="bg-[#2C3075] text-white text-lg font-semibold hover:opacity-90 rounded-lg transition-all duration-300 active:scale-90 w-fit">
              <a href="javascript:;" class="chat banner-btn yb-btn various">Live Chat
              </a>
            </div>
            <a href="javascript:;" name="for $244" data-fancybox="" title="Lets Get Started"
              class="px-4 flex item-center rounded-lg text-lg !border-[#2C3075] text-[#2C3075] border focus:outline-none"
              data-src="#popupform"><button style="outline: none">Get in Touch</button></a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 p0">
        <div class="about-img-st">
          <img src="assets/images/about-2.png" />
        </div>
      </div>
    </div>
  </div>
</section>

<section
  class="w-full bg-[url(assets/images/cta-bg1.webp)] md:h-72 md:py-0 py-20 md:px-0 px-2 bg-fixed flex items-center text-center text-white justify-center bg-no-repeat !bg-cover">
  <div class="space-y-3">
    <h3 class="text-4xl font-bold">Not Sure Where to Start? </h3>
    <p class="text-xl max-w-[700px]">Our academic consultants are here to guide you through every 
stage — from manuscript enhancement to successful journal 
submission.</p>
    <div class="flex items-center flex-wrap gap-3 justify-center mt-4">
      <div id="testimonial">
        <a href="tel:+7379103666"
          class="border border-white text-white bg-transparent rounded py-[14px] px-[11px] text-[18px] font-medium text-lg">Call
          Now</a>
      </div>
      <button
        class="border border-white text-white bg-transparent rounded py-[14px] px-[11px] text-[18px] font-medium text-lg chat banner-btn yb-btn various">Talk
        to an Expert</button>
      <button data-src="#popupform" name="for $244" data-fancybox="" title="Lets Get Started"
        class="py-[14px] px-[11px] text-[18px] font-medium text-lg bg-[#2C3075] text-white rounded">Start Your Publication
        Today</button>
    </div>
  </div>
</section>

<section class="our-testimonial">
  <div class="container test-upp !w-[1350px] !sm:w-[1350px]">
    <div class="row sm:mx-12">
      <div class="col-md-12 test-right">
        <div id="testslider" class="owl-carousel">
          <!-- Slide 1 -->
          <div class="test-item grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
              <img src="assets/images/7.webp" alt="test-1">
            </div>
            <div class="max-w-lg p-6">
              <blockquote class="text-[#2C3075] text-[24px] font-[600]">"Professional, Precise, and On Point!"
              </blockquote>
              <p class="mt-4 text-muted-foreground">
              had a strong manuscript but needed help polishing it for 
publication. The team at WriteRight was incredibly thorough with 
editing and formatting. Their journal recommendations were spot 
on, and the communication was top-tier.
              </p>
              <div class="flex items-center mt-6">
                <img class="w-12 h-12 rounded-full" src="assets/images/barbara.webp" alt="Steven D. Henry" />
                <div class="ml-4">
                  <p class="font-medium text-primary-foreground">Sarah J. Miller, Independent Researcher</p>
                  <p class="text-sm text-muted-foreground">GreenSky Solutions</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 2 -->
          <div class="test-item grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
              <img src="assets/images/2.webp" alt="test-2">
            </div>
            <div class="max-w-lg p-6">
              <blockquote class="text-[#2C3075] text-[24px] font-[600]">"Exceptional Support from Start to Finish!"
              </blockquote>
              <p class="mt-4 text-muted-foreground">
              The Platinum Package exceeded my expectations. From topic 
selection to final publication, every detail was handled with care 
and academic precision. I’m truly grateful for their expert guidance
and timely delivery.
              </p>
              <div class="flex items-center mt-6">
                <img class="w-12 h-12 rounded-full" src="assets/images/ashlay.webp" alt="Jane S. Doe" />
                <div class="ml-4">
                  <p class="font-medium text-primary-foreground">Michael D. Carter, Assistant Professor</p>
                  <p class="text-sm text-muted-foreground">London School of 
                  Economics</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 3 -->
          <div class="test-item grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
              <img src="assets/images/6.webp" alt="test-3">
            </div>
            <div class="max-w-lg p-6">
              <blockquote class="text-[#2C3075] text-[24px] font-[600]">"They Made Publishing So Simple!"
              </blockquote>
              <p class="mt-4 text-muted-foreground">
              As a first-time researcher, I was overwhelmed by the journal 
submission process. WriteRight Publication guided me step by step 
— from formatting my paper to responding to reviewer comments. 
It was a seamless experience, and my paper is now published in a 
Q2 journal!
              </p>
              <div class="flex items-center mt-6">
                <img class="w-12 h-12 rounded-full" src="assets/images/steven.webp" alt="Mark T. Lee" />
                <div class="ml-4">
                  <p class="font-medium text-primary-foreground">Linda K. Williams, Founder</p>
                  <p class="text-sm text-muted-foreground">Independent Researcher</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Aap aur slides bhi add kar sakte hain agar chahen -->
        </div>
      </div>
    </div>
  </div>

  <!-- Custom Dots Container -->
  <div class="d-flex arr-gap"></div>
</section>

<?php include 'include/footer.php'; ?>