<?php
// Hero Section

$heroSection = '
<section class="web_bannerBlock--wrapper">
  <div class="container">
  <div class="row">
  <div class="col-lg-6">
    <div class="web_bannerContent">
  <h1>Audits that help your agency close more deals.</h1>
  <p>Build trust faster and close more—and bigger—deals with beautiful, actionable, and easy to understand website audits.</p>
 <div class="webBanner-input">
  <div class="input-block">
    <input type="text" class="form-control" placeholder="Enter Email" />
    <button type="button" class="btn btn-primary">TRY FOR FREE</button>
  </div>
  <a href="javascript:void(0);" class="normal-link">
    Or view success stories <span class="white-arrow"></span>
  </a>
</div>

  <p>Runs on ALL popular website platforms from WordPress and Wix to Shopify and Magento.</p>
  </div> </div>
  <div class="col-lg-6">
  <div class="web-bannerImage">
  <img src="./assets/images/banner-people.png" alt="" class="img-fluid" />
  </div>
 
  </div>
  </div>
  </div>
</section>
';


// Define brand logos in an array
$brands = [
  ['src' => 'assets/images/feature-1.png', 'alt' => 'Liquid Web'],
  ['src' => 'assets/images/feature-2.png', 'alt' => 'UpCity'],
  ['src' => 'assets/images/feature-3.png', 'alt' => 'Ugurus'],
  ['src' => 'assets/images/feature-4.png', 'alt' => 'WP Engine'],
  ['src' => 'assets/images/feature-1.png', 'alt' => 'Liquid Web'],
  ['src' => 'assets/images/feature-2.png', 'alt' => 'UpCity'],
  ['src' => 'assets/images/feature-3.png', 'alt' => 'Ugurus'],
  ['src' => 'assets/images/feature-4.png', 'alt' => 'WP Engine'],
  ['src' => 'assets/images/feature-1.png', 'alt' => 'Liquid Web'],
  ['src' => 'assets/images/feature-2.png', 'alt' => 'UpCity'],
  ['src' => 'assets/images/feature-3.png', 'alt' => 'Ugurus'],
  ['src' => 'assets/images/feature-4.png', 'alt' => 'WP Engine'],
];

// Generate About Section HTML
$aboutSection = '
<section class="web_about--wrapper">
  <div class="container">
    <div class="web_titleBlock">
      <h2 class="web_title">
        Featured and trusted by some of the world\'s fastest-growing companies that serve agencies
      </h2>
    </div>
    <div class="about-section__brands">
      <div class="swiper upcoming-program">
        <div class="swiper-wrapper">';

// Loop through each brand
foreach ($brands as $brand) {
  $aboutSection .= '
          <div class="swiper-slide">
            <div class="web_cardImage">
              <img src="' . $brand['src'] . '" alt="' . $brand['alt'] . '" class="img-fluid">
            </div>
          </div>';
}

$aboutSection .= '
        </div>
        <div class="web_navIcons">
          <div class="swiper-button swiper-button-prev"></div>
          <div class="swiper-button swiper-button-next"></div>
        </div>
      </div>
    </div>
  </div>
</section>';

// value Section
$valueSection = '
<section class="web_value--wrapped">
  <div class="container">
    <div class="web_titleBlock">
      <h2 class="web_title text-white">Deliver more value. Close more deals. </h2>
      <p class="web_subTitle text-white">Creating website audits that business owners understand and value has always been a tedious, time-consuming process full of pain and frustration... Until Now! Leave the competition in the dust with audits that take you from "Yawn, another sales pitch" to "We want to work with you!"</p>
    </div>
<div class="row">
  <div class="col-lg-6">
    <div class="section-imgBlock">
      <img src="assets/images/value.png" alt="" class="img-fluid">
    </div>
  </div>
  <div class="col-lg-6">
    <ul class="audit_valueList">
      <li>
        <h5>Audit sites in minutes.</h5>
        <p>Stop wasting hours with multiple tools and bad-looking results. In just FIVE minutes, you can run an in-depth audit that produces beautiful reports measuring everything that matters.</p>
      </li>
      <li>
        <h5>Provide incredible value.</h5>
        <p>Move beyond the "just a website" conversation with 40 data points that analyze a client\'s online presence. Show them what they need to succeed—not just what they think they want.</p>
      </li>
      <li>
        <h5>Close bigger deals faster.</h5>
        <p>Build trust by demonstrating how useful you can be, then leverage that trust into bigger projects that help your customers more. Stop selling "just" websites—start selling answers to all their problems.</p>
      </li>
    </ul>
  </div>
</div>
  </div>
</section>
';
// About Section
$reportSection = '
<section class="web_report--wrapper">
  <div class="container">
    <div class="web_titleBlock text-center">
      <h2 class="web_title">
        Our audit reports have helped agencies close millions of dollars
      </h2>
      <p>
        Use our professionally written and designed audit reports to help your agency close more deals.
      </p>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <!-- Nav Pills -->
      <ul class="nav nav-pills mb-4 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-web-audit-tab" data-bs-toggle="pill"
            data-bs-target="#pills-web-audit" type="button" role="tab" aria-controls="pills-web-audit"
            aria-selected="true">
            <span class="tab-icon web-audit"></span> Website Audit
          </button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-audit-tab" data-bs-toggle="pill"
            data-bs-target="#pills-profile-audit" type="button" role="tab" aria-controls="pills-profile-audit"
            aria-selected="false">
            <span class="tab-icon profile-audit"></span> Google Business Profile Audit
          </button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-seo-audit-tab" data-bs-toggle="pill" data-bs-target="#pills-seo-audit"
            type="button" role="tab" aria-controls="pills-seo-audit" aria-selected="false">
            <span class="tab-icon seo-audit"></span> On Page SEO Audit
          </button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-digi-audit-tab" data-bs-toggle="pill" data-bs-target="#pills-digi-audit"
            type="button" role="tab" aria-controls="pills-digi-audit" aria-selected="false">
            <span class="tab-icon digi-audit"></span> Digital Competitive Analysis Audit
          </button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-ecom-audit-tab" data-bs-toggle="pill" data-bs-target="#pills-ecom-audit"
            type="button" role="tab" aria-controls="pills-ecom-audit" aria-selected="false">
            <span class="tab-icon e-com-audit"></span> E-commerce Website Audit
          </button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-templates-tab" data-bs-toggle="pill" data-bs-target="#pills-templates"
            type="button" role="tab" aria-controls="pills-templates" aria-selected="false">
            <span class="tab-icon templates"></span> +6 Other Templates
          </button>
        </li>
      </ul>

      <!-- Tab Content -->
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-web-audit" role="tabpanel"
          aria-labelledby="pills-web-audit-tab">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="web_titleBlock left-side-about">
                <h2 class="web_title">Website Audit</h2>
                <p class="web_subTitle">
                  Audit and optimize your agency client\'s Google Business Profile to boost their local rankings.
                </p>
                <p class="web_subTitle">
                  This Google Business Profile audit report generates an actionable checklist of optimization strategies
                  to improve visibility and increase both online and in-store traffic.
                </p>
                <p class="web_subTitle">
                  Stand out by delivering value, building trust, and generating more revenue for your agency.
                </p>
                <p class="web_subTitle">
                  Easily brand and personalize this report for your agency for free.
                </p>
                <div class="view-all-btn mt-3">
                  <a href="javascript:void(0);" class="btn btn-primary">VIEW REPORT</a>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="cta-imageBlock text-center">
                <img src="assets/images/audit-report.png" alt="Audit Report" class="img-fluid" />
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade show active" id="pills-profile-audit" role="tabpanel" aria-labelledby="pills-profile-audit-tab">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="web_titleBlock left-side-about">
                <h2 class="web_title">Google Business Profile Audit Report</h2>
                <p class="web_subTitle">
                  Audit and optimize your agency client\'s Google Business Profile to boost their local rankings.
                </p>
                <p class="web_subTitle">
                  This Google Business Profile audit report generates an actionable checklist of optimization strategies
                  to improve visibility and increase both online and in-store traffic.
                </p>
                <p class="web_subTitle">
                  Stand out by delivering value, building trust, and generating more revenue for your agency.
                </p>
                <p class="web_subTitle">
                  Easily brand and personalize this report for your agency for free.
                </p>
                <div class="view-all-btn mt-3">
                  <a href="javascript:void(0);" class="btn btn-primary">VIEW REPORT</a>
                </div>
              </div>
            </div>
        
            <div class="col-lg-6">
              <div class="cta-imageBlock text-center">
                <img src="assets/images/audit-report.png" alt="Audit Report" class="img-fluid" />
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade show active" id="pills-seo-audit" role="tabpanel" aria-labelledby="pills-seo-audit-tab">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="web_titleBlock left-side-about">
                <h2 class="web_title"> On Page SEO Audit</h2>
                <p class="web_subTitle">
                  Audit and optimize your agency client\'s Google Business Profile to boost their local rankings.
                </p>
                <p class="web_subTitle">
                  This Google Business Profile audit report generates an actionable checklist of optimization strategies
                  to improve visibility and increase both online and in-store traffic.
                </p>
                <p class="web_subTitle">
                  Stand out by delivering value, building trust, and generating more revenue for your agency.
                </p>
                <p class="web_subTitle">
                  Easily brand and personalize this report for your agency for free.
                </p>
                <div class="view-all-btn mt-3">
                  <a href="javascript:void(0);" class="btn btn-primary">VIEW REPORT</a>
                </div>
              </div>
            </div>
        
            <div class="col-lg-6">
              <div class="cta-imageBlock text-center">
                <img src="assets/images/audit-report.png" alt="Audit Report" class="img-fluid" />
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade show active" id="pills-digi-audit" role="tabpanel" aria-labelledby="pills-digi-audit-tab">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="web_titleBlock left-side-about">
                <h2 class="web_title">Digital Competitive Analysis Audit</h2>
                <p class="web_subTitle">
                  Audit and optimize your agency client\'s Google Business Profile to boost their local rankings.
                </p>
                <p class="web_subTitle">
                  This Google Business Profile audit report generates an actionable checklist of optimization strategies
                  to improve visibility and increase both online and in-store traffic.
                </p>
                <p class="web_subTitle">
                  Stand out by delivering value, building trust, and generating more revenue for your agency.
                </p>
                <p class="web_subTitle">
                  Easily brand and personalize this report for your agency for free.
                </p>
                <div class="view-all-btn mt-3">
                  <a href="javascript:void(0);" class="btn btn-primary">VIEW REPORT</a>
                </div>
              </div>
            </div>
        
            <div class="col-lg-6">
              <div class="cta-imageBlock text-center">
                <img src="assets/images/audit-report.png" alt="Audit Report" class="img-fluid" />
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade show active" id="pills-ecom-audit" role="tabpanel" aria-labelledby="pills-ecom-audit-tab">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="web_titleBlock left-side-about">
                <h2 class="web_title">E-commerce Website Audit</h2>
                <p class="web_subTitle">
                  Audit and optimize your agency client\'s Google Business Profile to boost their local rankings.
                </p>
                <p class="web_subTitle">
                  This Google Business Profile audit report generates an actionable checklist of optimization strategies
                  to improve visibility and increase both online and in-store traffic.
                </p>
                <p class="web_subTitle">
                  Stand out by delivering value, building trust, and generating more revenue for your agency.
                </p>
                <p class="web_subTitle">
                  Easily brand and personalize this report for your agency for free.
                </p>
                <div class="view-all-btn mt-3">
                  <a href="javascript:void(0);" class="btn btn-primary">VIEW REPORT</a>
                </div>
              </div>
            </div>
        
            <div class="col-lg-6">
              <div class="cta-imageBlock text-center">
                <img src="assets/images/audit-report.png" alt="Audit Report" class="img-fluid" />
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade show active" id="pills-templates" role="tabpanel" aria-labelledby="pills-templates-tab">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="web_titleBlock left-side-about">
                <h2 class="web_title">+6 Other Templates</h2>
                <p class="web_subTitle">
                  Audit and optimize your agency client\'s Google Business Profile to boost their local rankings.
                </p>
                <p class="web_subTitle">
                  This Google Business Profile audit report generates an actionable checklist of optimization strategies
                  to improve visibility and increase both online and in-store traffic.
                </p>
                <p class="web_subTitle">
                  Stand out by delivering value, building trust, and generating more revenue for your agency.
                </p>
                <p class="web_subTitle">
                  Easily brand and personalize this report for your agency for free.
                </p>
                <div class="view-all-btn mt-3">
                  <a href="javascript:void(0);" class="btn btn-primary">VIEW REPORT</a>
                </div>
              </div>
            </div>
        
            <div class="col-lg-6">
              <div class="cta-imageBlock text-center">
                <img src="assets/images/audit-report.png" alt="Audit Report" class="img-fluid" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

';


// Services Section

$works = [
  [
    'title' => 'Beautiful and actionable',
    'desc' => 'Build no-fluff audit reports in minutes with lots of beautiful layout options. Designed to impress—while still being functional and intuitive.',
    'icon' => 'actionable'
  ],
  [
    'title' => 'Measure what matters',
    'desc' => 'Businesses care about revenue and ROI. We evaluate dozens of points and present them in terms anyone can understand.',
    'icon' => 'matters'
  ],
  [
    'title' => 'Doubles as a lead magnet',
    'desc' => 'Embed a free audit tool on your site. This high-value tool gets 4 times more leads than a general PDF lead magnet.',
    'icon' => 'magnet'
  ],
  [
    'title' => 'Personalized for you',
    'desc' => 'From email messages to CTAs, from logos to countdown timers—we\'ve thought of it all. Just a few clicks and MWA is truly yours.',
    'icon' => 'personalized'
  ],
  [
    'title' => 'Crafted to convert',
    'desc' => 'Audit recommendations appear in easy-to-understand terms that are perfect for connecting with leads, delivering value and smoothing the sales process.',
    'icon' => 'crafted'
  ],
  [
    'title' => 'Reviews sites in a snap',
    'desc' => 'Our easy-to-use browser extension helps you audit a site and its competitors—using both manual and automatic checks—in less than 5 minutes.',
    'icon' => 'reviews'
  ],
  [
    'title' => 'Ready for your sales process',
    'desc' => 'MWA includes testimonials to build trust, countdown timers to motivate leads, and tested CTAs to inspire them to buy.',
    'icon' => 'sales-process'
  ],
  [
    'title' => 'Monitors client activity',
    'desc' => 'Get notifications and alerts when sales emails are opened and audits are read—and follow up faster with hot leads.',
    'icon' => 'monitors'
  ],
  [
    'title' => 'Zapier integration & workflows',
    'desc' => 'Connect the apps you use in your lead generation and sales process with My Web Audit so you can automate your workflows.',
    'icon' => 'integration'
  ]
];

$howworkSection = '
<section class="web_works--wrapper">
  <div class="container">
    <div class="web_titleBlock">
      <h2 class="web_title">How is My Web Audit different?</h2>
      <p>We help you close more deals. Here are just a few reasons why we\'re different.</p>
    </div>
    <div class="row">
';

foreach ($works as $work) {
  $howworkSection .= '
      <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="web_cardBlock">
          <span class="cardIcon ' . $work['icon'] . '"></span>
          <h5 class="web_cardTitle">' . $work['title'] . '</h5>
          <p class="web_cardDesc">' . $work['desc'] . '</p>
        </div>
      </div>
  ';
}

$howworkSection .= '
    </div>
  </div>
</section>
';


// Services Section
$testimonial = '
<section class="web_value--wrapped web_testimonials--wrapper ">
  <div class="container">
    <div class="web_titleBlock">
    
      <h2 class="web_title text-white">Testimonials</h2>
      <p class="web_subTitle text-white">Hundreds of web professionals use My Web Audit to build trust, add value, establish their expertise,stand out from the competition… And close more deals. Here are just a few.</p>
    </div>
     <div class="row">
      <!-- Card 1 -->
      <div class="col-lg-4">
      <div class="testimonial-card">
      <div class="testimonial-cardInner">
        <p class="testimonial-text">My Web Audit helped us close a couple of deals over $20,000! </p>
        <p class="testimonial-desc">Building trust and delivering value early helped us close a couple of deals over $20,000! </p>
         <a href="javascript:void(0);" class="testimonial-link">View all success stories <span class="redirect-chev"></span></a>
        </div>
        <div class="testimonial-author">
          <div class="author-info">
            <h5>Michael D. Wailes</h5>
            <p>Spectrum Interactive Group</p>
          </div>
        </div>
      </div>
      </div>

      <!-- Card 2 -->
       <div class="col-lg-4">
      <div class="testimonial-card">
       <div class="testimonial-cardInner">
        <p class="testimonial-text">
          The first 2 audits I did got me $1500 in recurring revenue.
        </p>
        <p class="testimonial-desc">I am incredibly impressed with the amount of value it allows me to deliver my clients. The first 2 audits I did got me $1500  </p>
        <a href="javascript:void(0);" class="testimonial-link">View all success stories <span class="redirect-chev"></span></a>

        </div>
        <div class="testimonial-author">
          <div class="author-info">
            <h5>Josiah Goff</h5>
            <p>Josiah Goff</p>
          </div>
        </div>
      </div>
      </div>

      <!-- Card 3 -->
       <div class="col-lg-4">
      <div class="testimonial-card">
       <div class="testimonial-cardInner">
        <p class="testimonial-text">We rely on My Web Audit to evaluate our leads. </p>
        <p class="testimonial-desc">We rely on My Web Audit to evaluate our leads. We rely on My Web Audit to ... </p>
        <a href="javascript:void(0);" class="testimonial-link">View all success stories <span class="redirect-chev"></span></a>
        </div>
        <div class="testimonial-author">
          <div class="author-info">
            <h5>Kristina Romero</h5>
            <p>WP Care Market</p>
          </div>
        </div>
      </div>
      </div>
    </div>

    <div class="view-all-btn">
      <a href="javascript:void(0);" class="btn btn-primary">View All Testimonials</a>
    </div>
  </div>
</section>
';
// Services Section

$placeholders = [
  ['src' => 'assets/images/place-1.png', 'alt' => 'Placeholder 1'],
  ['src' => 'assets/images/place-2.png', 'alt' => 'Placeholder 2'],
  ['src' => 'assets/images/place-3.png', 'alt' => 'Placeholder 3'],
  ['src' => 'assets/images/place-4.png', 'alt' => 'Placeholder 4'],
  ['src' => 'assets/images/place-5.png', 'alt' => 'Placeholder 5'],
  ['src' => 'assets/images/place-6.png', 'alt' => 'Placeholder 6'],
  ['src' => 'assets/images/place-7.png', 'alt' => 'Placeholder 7'],
  ['src' => 'assets/images/place-8.png', 'alt' => 'Placeholder 8'],
  ['src' => 'assets/images/place-9.png', 'alt' => 'Placeholder 9'],
  ['src' => 'assets/images/place-10.png', 'alt' => 'Placeholder 10'],
  ['src' => 'assets/images/place-11.png', 'alt' => 'Placeholder 11'],
  ['src' => 'assets/images/place-12.png', 'alt' => 'Placeholder 12'],
  ['src' => 'assets/images/place-13.png', 'alt' => 'Placeholder 13'],
  ['src' => 'assets/images/place-14.png', 'alt' => 'Placeholder 14'],
];

$placeholder = '
<section class="web_placeholder--wrapper">
  <div class="container">
    <div class="web_titleBlock">
      <h2 class="web_title">
        This is just a placeholder headline, we will replace it once your website.
      </h2>
    </div>
    <div class="web_placeholderBlock">
      <ul>
';

foreach ($placeholders as $item) {
  $placeholder .= '
        <li>
          <img src="' . $item['src'] . '" alt="' . $item['alt'] . '" class="img-fluid" />
        </li>
  ';
}

$placeholder .= '
      </ul>
    </div>
     <div class="view-all-btn mt-5 text-center">
      <a href="javascript:void(0);" class="btn btn-primary">VIEW FULL LIST</a>
    </div>
  </div>
</section>
';

// Services Section
$casestydy = '
<section class="web_value--wrapped web_casestudy--wrapper ">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="web_titleBlock left-side-about">
               <h2 class="web_title text-white">Case Studies</h2>
               <p class="web_subTitle text-white">This is just placeholder text. Don’t be alarmed, this is just here to
                  fill
                  up space since your finalized copy isn’t ready yet. Once we have your content finalized, we’ll replace
                  this
                  placeholder text with your real content.</p>
               <p class="web_subTitle text-white">Sometimes it’s nice to put in text just to get an idea of how text will
                  fill
                  in a space on your website.</p>
                   <div class="view-all-btn mt-5">
      <a href="javascript:void(0);" class="btn btn-primary">VISIT SUCESS STORIES PAGE</a>
    </div>
            </div>
         </div>
        
         <div class="col-lg-6">
            <ul>
               <li class="case-cardBlock">
                 <div class="case-content">
                     <p>For Stoute Web Solutions, My Web Audit has meant an 80% close rate — anda 100X ROI</p>
                      <a href="javascript:void(0);" class="testimonial-link">Read More</a>
                  </div>
                  <div class="caseUser-info">
                     <h5>$200k</h5>
                     <p>Worth of revenue</p>
                  </div>
                  <div class="caseUser-identity">
                     <h5>John Falke</h5>
                     <p>Johnny Flash</p>
                  </div>
                
                  
               </li>
               <li class="case-cardBlock">
                <div class="case-content">
                     <p>For Stoute Web Solutions, My Web Audit has meant an 80% close rate — anda 100X ROI</p>
                      <a href="javascript:void(0);" class="testimonial-link">Read More</a>
                  </div>
                  <div class="caseUser-info">
                     <h5>$200k</h5>
                     <p>Worth of revenue</p>
                  </div>
                  <div class="caseUser-identity">
                     <h5>Paul Stoute</h5>
                     <p>Stoute Web Solutions</p>
                  </div>
                  
               </li>
               <li class="case-cardBlock">
                 <div class="case-content">
                     <p>For Stoute Web Solutions, My Web Audit has meant an 80% close rate — anda 100X ROI</p>
                      <a href="javascript:void(0);" class="testimonial-link">Read More</a>
                  </div>
                  <div class="caseUser-info">
                     <h5>$100,000+ LTV</h5>
                     <p>Using audits with leads</p>
                  </div>
                  <div class="caseUser-identity">
                     <h5>Rob Riggs</h5>
                     <p>Code Conspirators</p>
                  </div>
                 
               </li>
               <li class="case-cardBlock">
                <div class="case-content">
                     <p>For Stoute Web Solutions, My Web Audit has meant an 80% close rate — anda 100X ROI</p>
                      <a href="javascript:void(0);" class="testimonial-link">Read More</a>
                  </div>
                  <div class="caseUser-info">
                     <h5>5-Figure Projects</h5>
                     <p>From presenting audit insights</p>
                  </div>
                  <div class="caseUser-identity">
                     <h5>Carol Stambaugh</h5>
                     <p>RadiateWP</p>
                  </div>
                  
               </li>
            </ul>
         </div>
      </div>
   </div>
</section>
';
// Services Section
$cta = '

<section class="web_cta--wrapper ">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="web_titleBlock left-side-about">
               <h2 class="web_title">Start closing more deals—faster and easier with incredible audit reports business owners will love</h2>
               <p class="web_subTitle">Try My Web Audit FREE for 7 days</p>
                   <div class="view-all-btn mt-3">
      <a href="javascript:void(0);" class="btn btn-primary">START YOUR FREE TRIAL</a>
    </div>
            </div>
         </div>
        
         <div class="col-lg-6">
            <div class="cta-imageBlock">
            <img src="assets/images/cta.png" class="img-fluid" />
            </div>
         </div>
      </div>
   </div>
</section>
';


// Combine all sections into one variable
$content = $heroSection . $aboutSection . $valueSection . $reportSection . $howworkSection . $testimonial . $placeholder . $casestydy . $cta;

// Include master layout
include './includes/master.php';
?>