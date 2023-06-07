<!DOCTYPE html>
<html dir="rtl" lang="ar">


<?php include('head.php');?>
<!--==========================
    Header
============================-->
<?php include('header.php');?>


<head>
    <title>تواصل | المجرة</title></title>
    <link rel="canonical" href="https://www.chetu.com/ar/contactus.php">
    <link rel="shortcut icon" href="https://www.chetu.com/ch_images/chetu.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/contactus.css">
    
    <script src="https://www.google.com/recaptcha/api.js?render=6LfDb5YUAAAAAMt14l5zKfv8NUqF1y77sZ9ViimM"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6LfDb5YUAAAAAMt14l5zKfv8NUqF1y77sZ9ViimM', {
                action: 'homepage'
            }).then(function(token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
        setInterval(function() {
            grecaptcha.execute('6LfDb5YUAAAAAMt14l5zKfv8NUqF1y77sZ9ViimM', {
                action: 'homepage'
            }).then(function(token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        }, 120000)
    </script>
</head>

<body class="breadcrumb-hide">
    
    
    <section id="HomeSlider" class="HomeSlider no-padding"></section>
    <section class="no-padding overlay-white-common position-relative">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-7 col-lg-6 col-lg-offset-1">
                    <h1 style="color:#5c159d;" class="text-uppercase font-size-36 margin-bottom-10 margin-top-60 padding-left-20">تواصل معنا </h1>
                    <p class="commom-p-tag-20 commom-p-tag-18 padding-left-20">املأ النموذج الخاص بنا وسيتصل بك أحد خبراء البرمجيات في غضون 24 ساعة.</p>
                    <div class="ContactForm">
                        <form id="chetu_enq_form" action="thank-you.php" name="form1" method="post">
                            <div class="no-padding">
                                <div class="row">
                                    <div id="name_div" class="col-xs-12 "><input id="token" type="hidden" autocomplete="off" value="67403c7e9f4ca87968f53f8368a418376b5fb968018b2ef57bfb809684e21605" name="_token" /><span class="errorMessage"></span></div>
                                    <div id="email_div" class="col-xs-12 col-sm-6">
                                        <div class="input-field"><label class="label"><input class="ct_validation required email" maxlength="40" id="email" type="text" value="" autocomplete="off" name="Email" placeholder=" " /><span class="span"> البريد الإلكتروني*</span></label><span class="errorMessage"></span></div>
                                    </div>
                                    <div id="name_div" class="col-xs-12 col-sm-6">
                                        <div class="input-field"><label class="label"><input class="ct_validation required min 3 max 50 company" maxlength="40" id="Name" type="text" autocomplete="off" value="" name="Name" placeholder=" " /><span class="span"> الاسم الكامل*</span></label><span class="errorMessage"></span></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div id="company_div" class="col-xs-12 col-sm-6">
                                        <div class="input-field"><label class="label"><input class="ct_validation company" id="company" maxlength="40" type="text" value="" autocomplete="off" name="Company" placeholder=" " /><span class="span"> الشركة (اختياري)</span></label><span class="errorMessage"></span></div>
                                    </div>
                                    <div id="phone_div" class="col-xs-12 col-sm-6">
                                        <div class="input-field"><label class="label"><input class="ct_validation required phonenum chform-inputtxt fl" maxlength="20" id="phone" type="text" onKeyPress="return isNumericKey(event.keyCode, event.which)" value="" autocomplete="off" name="Phone" placeholder=" " /><span class="span"> رقم الهاتف*</span></label><span class="errorMessage"></span></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div id="comment_div" class="col-xs-12">
                                        <div class="input-field"><label class="label"><textarea class="ct_validation required comment textarea-padding" id="comments" maxlength="500" name="Comments" rows="3" autocomplete="off" placeholder=" "></textarea><span class="span"> كيف يمكننا مساعدتك؟*</span></label></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row"></div>
                                <div class="clearfix"></div>
                                <div id="captcha_div" class="col-xs-12">
                                    <div class="captcha-widthx">
                                        <div class="fl validatorer-width"><input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                                            <div id="captchaerror" class="errorMessage"></div>
                                        </div>
                                    </div>
                                </div>
                                <div id="hidden_ele_div" class="col-xs-12 no-padding-left"><input type="hidden" name="pageName" value=""><input type="hidden" name="pageKeyword" value=""><input type="hidden" name="metaKeyword" value=""><input type="hidden" id="ComingFormPartnerPage" name="ComingFormPartnerPage" value="No"><input type="hidden" id="partnerPageURL" name="partnerPageURL" value=""><input type="hidden" id="msclkid" name="msclkid" value=""><input type="hidden" id="gclid_field" name="gclid_field" value=""><input type="hidden" id="_d" name="_d" value=""><input type="hidden" id="__a" name="__a" value="jLdFqwAq7kHNfPI4RyJPogNxHV33xGWY24FIPTVIU8O+IRdCH6GvxYwAk7tSS/9S"><input type="hidden" id="c_url" name="c_url" value="https://www.chetu.com/ar/contactus.php?cURL=ar%2F"><input type="hidden" name="form_type" value="thank-you"><input type="hidden" name="form_action" value="thank_you.php">
                                    <div id="contactbtn_div" class="text-left margin-top-30 margin-bottom-30 padding-left-15"><input type="submit" class="CT-EnqSubmit new-CTA-Btn site-button contact-us-button font-size-16 text-uppercase" value=" تحدث مع أحد خبراء البرمجيات" name="submit" id="contactbtn" /></div>
                                    <div id="captcha_privacy_div" class="padding-left-15">
                                        <p>هذا الموقع محمي بواسطة reCAPTCHA وتطبق سياسة الخصوصية وشروط الخدمة من جوجل.</p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xs-12 col-md-5 col-lg-4 margin-bottom-30 md-margin-top-60 padding-left-30 padding-right-30">
                    <div class="row" style="line-height: 25px;">
                        <div class="col-xs-12">
                            <h3 style="color:#5c159d;" class="text-uppercase font-size-24 margin-top-10 margin-bottom-15">مواقعنا</h3>
                        </div>
                        <div class="display-inline content" style="max-height:116px;">
                            <p class="display-inline">المقر الرئيسي ومركز التسليم <br><b>عمان - الاردن</b> - مجمع الحسين للاعمال - مبنى رقم 10 </p>
                            <p class="display-inline margin-right-15 arNum_Switch"><a href="tel:+966 12 512 2756" class="color-inherit">هاتف:<span style="color:#5c159d;"> 00962799230171</span></a></p>
                            <p class="display-inline margin-right-15"><a href="/cdn-cgi/l/email-protection#3340525f564073505b5647461d505c5e" class="color-inherit"><span class="__cf_email__" data-cfemail="eb988a878e98ab88838e9f9ec5888486">almajara@almajara.com</span></a></p>
                        </div>
                        <div class="content" style="max-height:116px;">
                            <p class="display-inline"><b>فلسطين</b></p>
                            <p class="display-inline margin-right-15 arNum_Switch"><a href="tel:+966 12 512 2756" class="color-inherit">هاتف:<span style="color:#5c159d;"> 00972568734782</span></a></p>
                        </div>
                        <div class="content" style="max-height:116px;">
                            <p class="display-inline"><b>السعودية</b></p>
                            <p class="display-inline margin-right-15 arNum_Switch"><a href="tel:+966 12 512 2756" class="color-inherit">هاتف:<span style="color:#5c159d;"> 00966538609639</span></a></p>
                        </div>
                        <div class="content" style="max-height:116px;">
                            <p class="display-inline"><b>ليبيا</b></p>
                            <p class="display-inline margin-right-15 arNum_Switch"><a href="tel:+966 12 512 2756" class="color-inherit">هاتف:<span style="color:#5c159d;"> 00218920171112</span></a></p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="review">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                    <div class="col-xs-12">
                        <h2 class="color-teal text-center font-size-30 margin-bottom-10 wow zoomIn" data-wow-delay=".5s">ماذا يفكر عملاؤنا</h2>
                    </div>
                    <div class="col-xs-12 col-sm-6 margin-bottom-30 wow zoomIn" data-wow-delay=".5s">
                        <div class="testimonial-content no-padding">
                            <p class="testimonial-desc">"كان لدي الكثير من المعايير التي كنت أفحصها ومنذ اليوم الأول كنت سعيدًا جدًا باتصالات المجرة وإدارة المشاريع." </p>
                            <div class="star-rating">
                                <p class="author-info font-bold">محسن جميل، مدير التكنولوجيا في FaceKindle</p>
                                <p class="display-inline font-size-20">5.0</p>
                                <div class="rating display-inline"><label for="star1"></label><label for="star2"></label><label for="star3"></label><label for="star4"></label><label for="star5"></label></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 margin-bottom-30 wow zoomIn" data-wow-delay=".5s">
                        <div class="testimonial-content no-padding">
                            <p class="testimonial-desc">"اتصالات المجرة التي لا تشوبها شائبة، والالتزام بالمواعيد، والمهارة الفنية قد مكنتهم من المشاركة طويلة الأمد."</p>
                            <div class="star-rating">
                                <p class="author-info font-bold">هوغو هيلبرج، EventWaves</p>
                                <p class="display-inline font-size-20">5.0</p>
                                <div class="rating display-inline"><label for="star1"></label><label for="star2"></label><label for="star3"></label><label for="star4"></label><label for="star5"></label></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .awards-img ul {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            list-style: none;
            justify-content: center;
            text-align: center;
            align-items: center;
            gap: 16px;
        }

        .awards-img li img {
            height: 140px;
        }

        @media screen and (min-width: 768px) and (max-width: 1024px) {
            .awards-img ul {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            }
        }
    </style>
    <section>
        <div class="container-fluid" dir="ltr">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1 awards-img">
                    <ul>
                        <li><img data-src="https://www.chetu.com/img/award/inc5000-emblem-new.png" class="img-responsive display-inline lazyload" alt="Inc. 5000 Six year in a row"></li>
                        <li><img data-src="https://www.chetu.com/img/award/aba-2022-awards.png" class="img-responsive display-inline lazyload" alt="Chetu Wins Multiple Bronze Stevie® Awards"></li>
                        <li><img data-src="https://www.chetu.com/img/award/forbes-2023.png" class="img-responsive display-inline lazyload" alt="Forbes"></li>
                        <li><img data-src="https://www.chetu.com/img/award/2021-stevie-winner-american-business-awards.png" class="img-responsive display-inline lazyload" alt="2020 stevie winner american business awards"></li>
                        <li><img data-src="https://www.chetu.com/img/award/crn-solution-provider-500-2022.png" class="img-responsive display-inline lazyload" alt="The Channel Co"></li>
                        <li><img data-src="https://www.chetu.com/img/award/2020-sfbj-business-of-the-year-award-badge-award.png" class="img-responsive display-inline lazyload" alt="SFBJ"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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


    
    <script>
        var coll_retail = document.getElementsByClassName("collapsible");
        var i;
        for (i = 0; i < coll_retail.length; i++) {
            coll_retail[i].addEventListener("click", function() {

                var prev_retail = document.getElementsByClassName("active-contact");
                if (prev_retail[0] != null && prev_retail[0] != this) {
                    prev_retail[0].nextElementSibling.style.maxHeight = null;
                    prev_retail[0].classList.remove("active-contact");
                }


                this.classList.toggle("active-contact");
                var contentCollapsible_retail = this.nextElementSibling;
                if (contentCollapsible_retail.style.maxHeight) {
                    contentCollapsible_retail.style.maxHeight = null;
                } else {
                    contentCollapsible_retail.style.maxHeight = contentCollapsible_retail.scrollHeight + "px";
                }
            });
        }
        var coll_retails = document.getElementsByClassName("collapsibles");
        var j;
        for (j = 0; j < coll_retails.length; j++) {
            coll_retails[j].addEventListener("click", function() {

                var prev_retail = document.getElementsByClassName("active-contacts");
                if (prev_retail[0] != null && prev_retail[0] != this) {
                    prev_retail[0].nextElementSibling.style.maxHeight = null;
                    prev_retail[0].classList.remove("active-contacts");
                }


                this.classList.toggle("active-contacts");
                var contentCollapsible_retail = this.nextElementSibling;
                if (contentCollapsible_retail.style.maxHeight) {
                    contentCollapsible_retail.style.maxHeight = null;
                } else {
                    contentCollapsible_retail.style.maxHeight = contentCollapsible_retail.scrollHeight + "px";
                }
            });
        }
    </script>

    <script type="text/javascript">
        document.getElementById('contactbtn').addEventListener('click', function(e) {
            document.getElementById("ComingFormPartnerPage").value = getTrackValue('ptrBrowsed', true);
            document.getElementById("partnerPageURL").value = getTrackValue('ptrBrowsedURI', true);
            var redtrackCID = document.getElementById("RedTrackClcikID").value = getCookie('RedTrackClcikID');
            // if(redtrackCID != "" || redtrackCID != undefined || redtrackCID != null){
            //     $.ajax({
            //         method: "POST",
            //         url: "https://ymxk8.rdtk.io/postback?clickid="+redtrackCID,
            //         success: function(xhr, textStatus) {
            //             console.log('status :'+xhr.status)
            //         }
            //     });
            // }
        });
    </script>
    <script type="text/javascript">
        adroll_adv_id = "LNX3T5DGVVBZPHXSKYOG2Z";
        adroll_pix_id = "DORKJWAJ5ZE3XPWJTXYU7Y";
        /* OPTIONAL: provide email to improve user identification */
        /* adroll_email = "username@example.com"; */
        (function() {
            var _onload = function() {
                if (document.readyState && !/loaded|complete/.test(document.readyState)) {
                    setTimeout(_onload, 10);
                    return
                }
                if (!window.__adroll_loaded) {
                    __adroll_loaded = true;
                    setTimeout(_onload, 50);
                    return
                }
                var scr = document.createElement("script");
                var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" :
                    "http://a.adroll.com");
                scr.setAttribute('async', 'true');
                scr.type = "text/javascript";
                scr.src = host + "/j/roundtrip.js";
                ((document.getElementsByTagName('head') || [null])[0] ||
                    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
            };
            if (window.addEventListener) {
                window.addEventListener('load', _onload, false);
            } else {
                window.attachEvent('onload', _onload)
            }
        }());
    </script>
    <script>
        $(document).ready(function() {


            $('#wrapper').css({
                'width': '832px',
                'height': '713px',
                'float': 'right',
            });

            $(window).on('resize', function() {
                console.log(window.innerWidth)
                if (window.innerWidth < 539) {
                    $('#wrapper').css({
                        'width': '',
                        'height': 'auto',
                        'float': 'none'
                    });
                    $('.tooltip-down-location').css('display', 'none');
                    $('.tooltip-left-location').css('display', 'none');
                } else {
                    $('#wrapper').css({
                        'width': '832px',
                        'height': '713px',
                        'float': 'right'
                    });
                    $('.tooltip-down-location').css('display', 'block');
                    $('.tooltip-left-location').css('display', 'block');
                }
            });


            //tooltip direction
            var tooltipDirection;

            for (i = 0; i < $(".pin").length; i++) {
                // set tooltip direction type - up or down
                if ($(".pin").eq(i).hasClass('pin-down')) {
                    tooltipDirection = 'tooltip-down-location';
                } else {
                    tooltipDirection = 'tooltip-left-location';
                }

                // append the tooltip
                $("#wrapper").append("<div style='left:" + $(".pin").eq(i).data('xpos') + "px;top:" + $(".pin").eq(
                    i).data('ypos') + "px' class='" + tooltipDirection + "'>\
                                                <div class='tooltip-location'>" + $(".pin").eq(i).html() + "</div>\
                                        </div>");
            }

            // show/hide the tooltip
            $('.tooltip-left-location, .tooltip-down-location').mouseenter(function() {
                $(this).children('.tooltip-location').fadeIn(100);
            }).mouseleave(function() {
                $(this).children('.tooltip-location').fadeOut(100);
            })
        });

        //        $('#contact-us-url').attr('href', 'https://www.chetu.com' + window.location.pathname + window.location.search);
    </script>
    <script src="/js/browser-track.js" type="text/javascript"></script>

</body>

</html>