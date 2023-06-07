<!DOCTYPE html>
<html lang="en">


<?php include('head.php');?>
<!--==========================
    Header
============================-->
<?php include('header.php');?>


<head>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Chetu",
            "url": "https://www.chetu.com/",
            "image": "https://www.chetu.com/img/logo-new-home.png",
            "telephone": "+1 (954) 342 5676",
            "email": "sales@chetu.com",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "1500 Concord Ter. Suite 100,",
                "addressLocality": "Sunrise",
                "addressRegion": "FL",
                "addressCountry": "USA",
                "postalCode": "33323"
            }
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "LocalBusiness",
            "name": "Chetu",
            "image": "https://www.chetu.com/img/logo-new-home.png",
            "telephone": "+1 (954) 342 5676",
            "email": "sales@chetu.com",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "1500 Concord Ter. Suite 100",
                "addressLocality": "Sunrise",
                "addressRegion": "FL",
                "addressCountry": "USA",
                "postalCode": "33323"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 26.13933,
                "longitude": 80.34115
            },
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                "opens": "03:00",
                "closes": "20:00"
            }
        }
    </script>
    <title>Case Studies | Almajara</title>
    <link rel="canonical" href="https://www.chetu.com/case-study.php" />
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <style>
        @media (min-width: 461px) and (max-width: 862px) {
            .display-flex-home {
                margin-top: auto;
            }
        }

        @media (min-width: 0px) and (max-width: 460px) {
            .display-flex-home {
                margin-top: 100px;
            }
        }

        #HomeSlider .heroBg.herobg-animation-none {
            animation: none;
            -webkit-animation: none;
        }

        .porfolio-box {
            min-height: 275px;
            background: #fff;
            padding: 20px 12px;
            height: 100%;
        }

        .porfolio-box p {
            padding: 10px !important;
            font-weight: normal;
            text-align: center;
            margin: 0px;
            height: auto !important;
            color: grey;
        }

        .porfolio-box img {
            margin-bottom: 0px;
        }

        @media (min-width: 800px) and (max-width: 994px) {
            .cs-grid-item {
                width: min(465px, 100%) !important;
                margin: auto;
            }
        }

        @media (min-width: 768px) and (max-width: 1220px) {
            .display-flex-home {
                margin-top: auto;
            }

            .row .list {
                padding-left: 15px !important;
                padding-right: 15px !important;
            }

            .porfolio-box {
                min-height: 800px !important;
                background: #fff;
                background-color: rgb(255, 255, 255);
                padding: 20px 12px;
                height: 100%;
            }
        }

        @media (min-width: 901px) and (max-width: 1080px) {
            .row .list {
                padding-left: 15px !important;
                padding-right: 15px !important;
            }

            .porfolio-box {
                min-height: 800px !important;
                background: #fff;
                background-color: rgb(255, 255, 255);
                padding: 20px 12px;
                height: 100%;
            }
        }

        @media (max-width: 900px) {
            .row .list {
                padding-left: 15px !important;
                padding-right: 15px !important;
            }
        }

        @media (max-width: 767px) and (min-width: 0) {
            .porfolio-box {
                min-height: auto;
            }

            .porfolio-box p {
                padding: 15px 5px !important;
            }

            .nav-tabs.news-tab li {
                padding: 10px 30px;
                min-height: 40px !important;
                margin-right: 0px;
                font-size: 16px;
                width: 100% !important;
            }

            .row .list {
                padding-left: 15px;
                padding-right: 15px;
            }
        }

        @media (min-width: 400px) and (max-width: 767px) {
            .cs-grid-item {
                width: min(380px, 100%);
                margin: auto;
            }
        }

        @media (min-width: 461px) {
            .margin-top-130 {
                margin-top: 130px;
            }
        }

        select::-ms-expand {
            display: none;
        }

        .clr-white {
            fill: #fff;
        }

        .sorting select:focus {
            background: #f4f4f4;
        }

        .background-light-grey {
            background: #f4f4f4;
        }

        .d-flex {
            display: flex;
        }

        .justify-center {
            justify-content: center;
        }

        .align-center {
            align-items: center;
        }

        .case-study-hero {
            font-size: clamp(28px, 5vw, 60px);
        }

        .option-wrapper,
        .case-study-header {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2rem;
        }

        .option-wrapper {
            flex-wrap: wrap;
        }

        .sorting select {
            min-width: 280px;
            width: 100% !important;
            position: relative;
            padding: 0;
            border: none;
            height: auto;
            cursor: pointer;
            color: black;
        }

        .sorting select option {
            color: grey;
        }

        @media(min-width: 992px) {
            .md-margin-top-160 {
                margin-top: 160px;
            }
        }

        @media(max-width:1200px) {
            .md-margin-top-160 {
                margin-top: 80px;
            }
        }

        @media(max-width: 992px) {
            .case-study-header {
                flex-direction: column;
            }
        }

        @media(max-width:620px) {

            .cat-industry,
            .cat-technology {
                width: 100%;
            }
        }

        .cs-grid {
            max-width: 1170px;
            margin-inline: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2rem;
        }

        .cs-grid-item {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
            animation-iteration-count: 1;
            -webkit-animation-iteration-count: 1;
            width: min(350px, 100%);
        }

        .cs-grid-item:hover {
            cursor: pointer;
            animation-name: bounce;
            -moz-animation-name: bounce;
        }

        @keyframes bounce {

            0%,
            100%,
            20%,
            50%,
            80% {
                -webkit-transform: translateY(0);
                -ms-transform: translateY(0);
                transform: translateY(0)
            }

            40% {
                -webkit-transform: translateY(-30px);
                -ms-transform: translateY(-30px);
                transform: translateY(-30px)
            }

            60% {
                -webkit-transform: translateY(-15px);
                -ms-transform: translateY(-15px);
                transform: translateY(-15px)
            }
        }

        .thumbnail-logo,
        .image-thumbnail-section {
            width: 100%;
            height: 200px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .thumbnail-logo {
            height: 160px;
        }

        .porfolio-box img {
            width: auto;
            object-fit: fill;
        }

        .thumbnail-logo img {
            max-width: 270px;
            height: auto;
        }

        @media (min-width:0px) and (max-width: 480px) {
            .image-thumbnail-section img {
                max-width: 100%;
                height: inherit;
            }
        }

        @media (min-width:0px) and (max-width: 360px) {
            .image-thumbnail-section img {
                max-width: 100%;
                height: auto;
            }
        }

        strong.cs-title {
            max-width: 42ch;
            display: inline-block;
        }

        .cs_category {
            font-weight: 500 !important;
            font-style: italic;
            margin-bottom: 0;
        }

        .cs_sub_text {
            color: 505050;
        }

        .hide {
            display: none !important;
        }

        .shows {
            display: block !important;
        }

        .cs-grid-item {
            height: auto !important;
        }

        .jplist-hidden {
            display: none !important;
        }

        p.cs_sub_text {
            word-spacing: 2px;
        }

        .Xamarin {
            background-image: none;
        }

        .Xamarin:hover {
            background-image: none;
        }

        .Android {
            background-image: none;
        }

        .Android:hover {
            background-image: none;
        }

        .select-arrow select {
            text-indent: 10px;
            height: 40px !important;
            box-shadow: 0px 0px 2px 2px #8b8b8b47;
        }

        .sorting select:focus {
            background: #ffffff !important;
            box-shadow: 0px 0px 2px 2px #8b8b8b47;
        }

        .nav-tabs.news-tab {
            background: transparent !important;
        }

        .nav-tabs.news-tab li.active a,
        .nav-tabs.news-tab li.active a:hover,
        .nav-tabs.news-tab li.active a:focus {
            background: transparent !important;
        }

        .nav-tabs.news-tab li {
            width: calc(33.33% - 0px);
            text-align: center;
        }

        .cs-grid-item {
            width: min(380px, 100%);
        }

        .nav-tabs.news-tab {
            border-bottom: 1px solid #9d9d9d6e;
            margin-bottom: 40px;
        }

        .nav-tabs.news-tab li a:hover {
            background: transparent !important;
            border: 1px solid transparent;
            border-bottom: 3px solid #bdbdbd;
        }

        .porfolio-box {
            min-height: 730px;
            background: #fff;
            padding: 20px 12px;
            height: 100%;
        }

        .summaries-box {
            min-height: 420px;
            background: #fff;
            padding: 20px 20px;
            height: 100%;
            color: #000;
            border: 2px #adadad solid;
        }

        .summaries-box {
            position: relative;
            text-align: center;
        }

        .summaries-box .thumbnail-logo {
            height: 70px;
        }

        .summaries-box h4 {
            font-size: 20px;
        }

        .summaries-box p.cs_sub_text {
            text-align: left;
        }

        .paper-box {
            min-height: 340px;
            background: #fff;
            box-shadow: 0 0 4px rgb(0 0 0 / 30%);
            color: #222;
            margin-bottom: 15px;
        }

        .papper-heading {
            background: #0096a3;
            width: 100%;
            height: auto;
            text-align: center;
            color: #fff;
            font-size: 20px;
            padding: 10px 0px;
        }

        .slater_block figure {
            height: 200px;
            margin: 0px;
        }

        .slater_block figure img {
            width: 100%;
            object-fit: cover;
            height: 200px;
        }

        .txt-white {
            font-weight: 600;
            color: #0096a3;
        }

        .white-details {
            padding: 10px 20px;
        }

        .bg-white-area {
            width: 100%;
            display: inline-block;
            background: #fff;
            padding: 5px 2px 5px 2px;
            min-height: 500px;
            height: auto;
        }

        .bg-case-area {
            width: 100%;
            display: inline-block;
            background: #f4f4f4;
            padding: 5px 2px 5px 2px;
            min-height: 500px;
            height: auto;
        }
    </style>
</head>

<body><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NT4RZT" height="0" width="0" style="display: none; visibility: hidden;"></iframe></noscript><img src="https://www.chetu.com/img/home-page-img/random-icon/cross-black-1x.png" srcset="https://www.chetu.com/img/home-page-img/random-icon/cross-black-1x.png 1x, https://www.chetu.com/img/home-page-img/random-icon/cross-black-2x.png 2x, https://www.chetu.com/img/home-page-img/random-icon/cross-black-3x.png 3x" width="20" height="20" alt="cross black" style="display: none;" />
    
    <span id="tab-portfolio"></span>
    <div id="case-study" class="overflow-hidden-bs background-light-grey">
        <section class="sorting jplist-panel md-margin-top-160 background-light-grey">
            <div class="container">
                <div class="text-center">
                    <h1 class="case-study-hero">Case Studies</h1>
                    <p>Check out some of our past work on complex projects for SMBs and enterprise-size businesses.</p>
                </div>
            </div>
        </section>
        <section id="CaseStudy-Listing " class="no-padding-bottom">
            <div id="caseStudy-pagination ">
                <div class="container-fluid">
                    <div class="cs-grid list margin-bottom-60" id="allCaseStudies">
                        <div class="row">
                            <div class="col-xs-12 no-padding">
                                <ul class="nav nav-tabs news-tab">
                                    <li class="text-uppercase "><a href="summaries.php">SUMMARIES</a></li>
                                    <li class="text-uppercase active"><a href="work.php">CASE STUDIES</a></li>
                                    <li class="text-uppercase"><a href="white-paper.php">WHITE PAPERS</a></li>
                                </ul>
                            </div>
                            <div class="row list">
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 list-item margin-top-15">
                                    <div class="cs-grid-item list-item Laravel 7 PHP Sabre APIs Apache Database AWS"><a href="https://www.chetu.com/case-study/custom-telemedicine-app.php">
                                            <div class="porfolio-box porfolio-box-v2 pb-v3" style="background-color: rgb(51 122 183 / 20%);">
                                                <div class="thumbnail-logo margin-bottom-30"><img data-src="https://www.chetu.com/img/case-study/custom-telemedicine-app/anelt-o-logo.png" alt="Anelto’s Logo" class="img-responsive lazyload"></div>
                                                <div class="image-thumbnail-section margin-bottom-20"><img data-src="https://www.chetu.com/img/case-study/custom-telemedicine-app/custom-telemedicine-app-animation.gif" alt="Anelto’s" class="img-responsive lazyload"></div><strong class="cs-title">
                                                    <h4>Innovative Telemedicine App Transforms Healthcare Experience for Patients and Providers</h4>
                                                </strong>
                                                <h6 class="cs_category">Healthcare</h6>
                                                <p class="cs_sub_text">Anelto enlisted Chetu for a custom telemedicine app transforming healthcare for seniors & providers with independence, control, and personalization.</p>
                                            </div>
                                        </a></div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 list-item margin-top-15">
                                    <div class="cs-grid-item list-item Laravel 7 PHP Sabre APIs Apache Database AWS"><a href="https://www.chetu.com/case-study/personal-safety-artificial-intelligence-app.php">
                                            <div class="porfolio-box porfolio-box-v2 pb-v3" style="background-color: rgb(51 122 183 / 20%);">
                                                <div class="thumbnail-logo margin-bottom-30"><img data-src="https://www.chetu.com/img/case-study/personal-safety-artificial-intelligence-app/right-there-corporation-logo.png" alt="RightThere Corporation Logo" class="img-responsive lazyload"></div>
                                                <div class="image-thumbnail-section margin-bottom-20"><img data-src="https://www.chetu.com/img/case-study/personal-safety-artificial-intelligence-app/personal-safety-artificial-intelligence-laptop-animation.gif" alt="RightThere Corporation" class="img-responsive lazyload"></div><strong class="cs-title">
                                                    <h4>Mobile Artificial Intelligence App Revolutionizes Personal Safety</h4>
                                                </strong>
                                                <h6 class="cs_category">Legal/Public Safety</h6>
                                                <p class="cs_sub_text">RightThere Corporation (RTC) Calls on Chetu to Develop an AI-Powered Solution to Help Citizens Protect Themselves in Dangerous Situations.</p>
                                            </div>
                                        </a></div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 list-item margin-top-15">
                                    <div class="cs-grid-item list-item Laravel 7 PHP Sabre APIs Apache Database AWS"><a href="https://www.chetu.com/case-study/sabre-integration-travel-planning-platform.php">
                                            <div class="porfolio-box porfolio-box-v2 pb-v3" style="background-color: rgb(192 10 10 / 20%);">
                                                <div class="thumbnail-logo margin-bottom-30"><img data-src="https://www.chetu.com/img/case-study/sabre-integration-travel-planning-platform/PlanitEasyPro-logo-header.png" alt="PlanItEasy Logo" class="img-responsive lazyload"></div>
                                                <div class="image-thumbnail-section margin-bottom-20"><img data-src="https://www.chetu.com/img/case-study/sabre-integration-travel-planning-platform/desktop-combo.png" alt="PlanItEasy" class="img-responsive lazyload"></div><strong class="cs-title">
                                                    <h4>Sabre Integration Creates Massive Growth Opportunity for Travel Planning Platform</h4>
                                                </strong>
                                                <h6 class="cs_category">Travel</h6>
                                                <p class="cs_sub_text">PlanItEasy partners with Chetu, a certified Sabre partner, to bridge its platform with Sabre’s GDS and marketplace to fast-track business growth.</p>
                                            </div>
                                        </a></div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 list-item margin-top-15">
                                    <div class="cs-grid-item list-item E-Learning-Educatio PHP SQL-Server WordPress"><a href="https://www.chetu.com/case-study/web-app-unifies-emr-systems.php">
                                            <div class="porfolio-box porfolio-box-v2 pb-v3" style="background-color: hsl(281.25deg 100% 29% / 20%);">
                                                <div class="thumbnail-logo margin-bottom-30"><img data-src="https://www.chetu.com/img/case-study/web-app-unifies-emr-systems/drordrz-logo.png" alt="Digiverse Inc." class="img-responsive lazyload"></div>
                                                <div class="image-thumbnail-section margin-bottom-20"><img data-src="https://www.chetu.com/img/case-study/web-app-unifies-emr-systems/web-app-unifies-emr-systems-cellphone-animation.gif" alt="ervinas-laptop" class="img-responsive lazyload"></div><strong class="cs-title">
                                                    <h4>App Unifies EMR Systems to Power a Cohesive Healthcare System</h4>
                                                </strong>
                                                <h6 class="cs_category"> Healthcare </h6>
                                                <p class="cs_sub_text">George Pollack is a healthcare technology innovator, as well as the Founder and CEO of Digiverse, Inc., a software company that focuses on solving the healthcare system’s inefficiencies.</p>
                                            </div>
                                        </a></div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 list-item margin-top-15">
                                    <div class="cs-grid-item list-item E-Learning-Educatio PHP SQL-Server WordPress"><a href="https://www.chetu.com/case-study/online-pilot-training-app.php">
                                            <div class="porfolio-box porfolio-box-v2 pb-v3" style="background-color: hsl(206deg 100% 29% / 20%);">
                                                <div class="thumbnail-logo margin-bottom-30"><img data-src="https://www.chetu.com/img/case-study/online-pilot-training-app/logo.png" alt="famtech" class="img-responsive lazyload"></div>
                                                <div class="image-thumbnail-section margin-bottom-20"><img data-src="https://www.chetu.com/img/case-study/online-pilot-training-app/online-pilot-training-mobile-app.gif" alt="ervinas-laptop" class="img-responsive lazyload"></div><strong class="cs-title">
                                                    <h4>Custom Online Pilot Training App Sends Instructor Pay Soaring 230%</h4>
                                                </strong>
                                                <h6 class="cs_category">Aviation</h6>
                                                <p class="cs_sub_text">Proper Pilots Incorporated is an aviation academy that offers flight training and pilot certification to those pursuing careers in aviation.</p>
                                            </div>
                                        </a></div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 list-item margin-top-15">
                                    <div class="cs-grid-item list-item Hospitality-Travel Ruby-on-Rails SQL-Server GIT"><a href="https://www.chetu.com/case-study/updated-website-grows-digital-footprint.php">
                                            <div class="porfolio-box porfolio-box-v2 pb-v3" style="background-color: rgb(192 10 10 / 20%);">
                                                <div class="thumbnail-logo margin-bottom-30"><img data-src="https://www.chetu.com/img/case-study/updated-website-grows-digital-footprint/discovery-map-logo.png" alt="discovery-map logo" class="img-responsive lazyload"></div>
                                                <div class="image-thumbnail-section margin-bottom-20"><img data-src="https://www.chetu.com/img/case-study/updated-website-grows-digital-footprint/updated-website-grows-digital-footprint-laptop.png" alt="updated website grows digital footprint laptop" class="img-responsive lazyload"></div><strong class="cs-title">
                                                    <h4>Travel Map Company Seeks Digital Growth With Upgraded Website </h4>
                                                </strong>
                                                <h6 class="cs_category">Hospitality & Travel</h6>
                                                <p class="cs_sub_text">Discovery Map hired Chetu’s expert developers for website upgrades.</p>
                                            </div>
                                        </a></div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
              
    <!--==========================
    Footer
    ============================-->
    <?php include('footer2.php');?>


        <script>
            var baseUrl = 'https://www.chetu.com/';
            var apiUrl = baseUrl + 'api/';
            var siteSearchBaseUrl = 'http://localhost:8000/api/';
            var environment = 'production';
            var supportedLanguages = Array('en', 'es', 'uk', 'nl', 'fr', 'ar');
        </script>
        <link rel="stylesheet" href="https://www.chetu.com/css/font_awesome/site-search.css?v=6893c">
               
    <!--==========================
    Footer
    ============================-->
    <?php include('footer.php');?>


        
        <script type="text/javascript" src="https://www.chetu.com/js/slick.min.js?v=7b584"></script>
        <script type="text/javascript" src="https://www.chetu.com/js/infinite.js?v=fe960"></script>
        <script src="https://www.chetu.com/js/jquery.ellipsis.js"></script>
        <script>
            const caseStudiesData = document.getElementById('allCaseStudies').children;
            const filter = document.getElementsByClassName('custom-filter');
            const noData = document.getElementById('noData');
            var indusStatus, techStatus;
            const getCaseStudiesFilteredData = () => {
                let newIndus = document.getElementById('industryList').options[document.getElementById('industryList')
                    .selectedIndex].value;
                let newTech = document.getElementById('techList').options[document.getElementById('techList')
                        .selectedIndex]
                    .value;
                console.log(newIndus + newTech);
                let caseStudyStats = 0;
                if (newIndus != 'default' && newTech != 'default') {
                    for (var h = 0; h < caseStudiesData.length; h++) {
                        var arr = caseStudiesData[h].className.toString().split(/\s+/);
                        h > 9 ? caseStudiesData[h].style.display = "block" : '';
                        indStatus = inArray(newIndus, arr);
                        techStatus = inArray(newTech, arr);
                        if (indStatus == true && techStatus == true) {
                            caseStudiesData[h].classList.contains("hide") ? caseStudiesData[h].classList.remove(
                                    "hide") :
                                '';
                            caseStudyStats = 1;
                        } else {
                            caseStudiesData[h].classList.contains("hide") ? '' : caseStudiesData[h].className +=
                                " hide";
                        }

                    }

                } else if (newIndus != 'default') {

                    for (var h = 0; h < caseStudiesData.length; h++) {
                        var arr = caseStudiesData[h].className.toString().split(/\s+/);
                        h > 9 ? caseStudiesData[h].style.display = "block" : '';
                        indStatus = inArray(newIndus, arr);
                        if (indStatus == true) {
                            caseStudiesData[h].classList.contains("hide") ? caseStudiesData[h].classList.remove(
                                    "hide") :
                                '';
                            caseStudyStats = 1;
                        } else {
                            caseStudiesData[h].classList.contains("hide") ? '' : caseStudiesData[h].className +=
                                " hide";
                        }
                        //indStatus == true ? (caseStudiesData[h].classList.contains("hide") ? caseStudiesData[h].classList.remove("hide"): caseStudiesData[h].className += " shows") : (caseStudiesData[h].classList.contains("shows") ? caseStudiesData[h].classList.remove("shows"): caseStudiesData[h].className += " hide");

                    }
                } else if (newTech != 'default') {
                    for (var h = 0; h < caseStudiesData.length; h++) {
                        var arr = caseStudiesData[h].className.toString().split(/\s+/);
                        h > 9 ? caseStudiesData[h].style.display = "block" : '';
                        techStatus = inArray(newTech, arr);
                        if (techStatus == true) {
                            caseStudiesData[h].classList.contains("hide") ? caseStudiesData[h].classList.remove(
                                    "hide") :
                                '';
                            caseStudyStats = 1;
                        } else {
                            caseStudiesData[h].classList.contains("hide") ? '' : caseStudiesData[h].className +=
                                " hide";

                        }
                    }
                } else {
                    for (var h = 0; h < caseStudiesData.length; h++) {
                        caseStudiesData[h].classList.contains("hide") ? caseStudiesData[h].classList.remove("hide") :
                            '';
                    }
                    caseStudyStats = 1;
                }
                caseStudyStats == true ? (noData.classList.contains("hide") ? '' : noData.className += " hide") : (
                    noData
                    .classList.contains("hide") ? noData.classList.remove("hide") : '');
            }

            Array.from(filter).forEach((index) => {
                index.addEventListener('change', getCaseStudiesFilteredData);
            })
        </script>
</body>

</html>