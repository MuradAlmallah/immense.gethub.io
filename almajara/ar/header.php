<?php include('head.php');?>

<header class="breadcrumb-hide">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NT4RZT" height="0" width="0" style="display: none; visibility: hidden;"></iframe></noscript>
    
    <div id="top-bar" class="container-fluid position-fixed opacity-top" style="width: 100%; z-index: 9999; position: fixed;">
        <div class="row">
            <div class="col-md-12 col-xs-12 text-right">
            <p><span class="padding-right-5 lets-talk" dir="rtl">لنتحدث:</span><span class="tel-icon" dir="rtl">
                <a class="arNum_Switch" href="tel:00962799230171"><img src="img/jo.png" srcset="img/jo.png 1x, img/jo.png 2x, img/jo.png 3x" width="36" height="18" class="img-responsive display-inline" alt="Jordan Flag"><span>00962799230171 |</span></a>&nbsp;&nbsp; 
                <a class="arNum_Switch" href="tel:00972568734782"><img src="img/Palestine.png" srcset="img/Palestine.png 1x, img/Palestine.png 2x, img/Palestine.png 3x" width="36" height="18" class="img-responsive display-inline" alt="Palestine Flag"><span>00972568734782 |</span></a></span>&nbsp;&nbsp; 
                <a class="arNum_Switch" href="tel:00966538609639"><img src="img/ksa.png" srcset="img/ksa.png 1x, img/ksa.png 2x, img/ksa.png 3x" width="34" height="17" class="img-responsive display-inline" alt="KSA Flag"><span>00966538609639 |</span></a></span>&nbsp;&nbsp; 
                <a class="arNum_Switch" href="tel:00218920171112"><img src="img/Libya.png" srcset="img/Libya.png 1x, img/Libya.png 2x, img/Libya.png 3x" width="36" height="18" class="img-responsive display-inline" alt="Libya Flag"><span>00218920171112 |</span></a></span>
        </p>
            </div>
        </div>
    </div>
    <ul id="lang-nav" class="ar-lang-nav">
        <li><a href="javascript:void(0)" class="background-tranparent" dir="rtl"><span id="language-code"></span><img src="https://www.chetu.com/img/icons/down-arrow.png" alt="language Change Indication Arrow" class="margin-right-10" style="width: 10px;" /></a>
            <ul>
                <li id="arabic"><a id="ar" href="javascript:void(0)">عربي (AR)</a></li>
                <li id="eng-us"><a id="en-us" href="https://www.chetu.com/">English (EN)</a></li>
            </ul>
        </li>
    </ul>
    <script>
        var currPath = window.location.href;
        document.getElementById("lang-nav").addEventListener("click", function(e) {
            e.preventDefault();
            var newPath, path = window.location.pathname,
                clicked = event.target.getAttribute("id"),
                isLang = currPath.search(/(\/ar\/)+/g);
                
            if (clicked == "en-us") {
                if (isLang > -1) {
                    newPath = window.location.origin + "/almajara/en";
                } else if (currPath.slice(isLang, isLang + 4) == "/es/") {
                    newPath = currPath.replace(/(\/es\/)+/g, "/ar/");
                } 
            }
            if (clicked != null) {
                window.location.href = newPath;
            }
        });
        var flagImgURL = "https://www.chetu.com/img/icons/flag-icon/";
        if (currPath.search(/(\/uk\/|\/es\/|\/ar\/)+/g) == -1) {
            document.getElementById("language-code").innerHTML = '<img src="' + flagImgURL + 'us-flag-1x.png" srcset="' + flagImgURL + "us-flag-1x.png 1x, " + flagImgURL + "us-flag-2x.png 2x, " + flagImgURL + 'us-flag-3x.png 3x" width="32" height="23" class="img-responsive display-inline" alt="US Flag">';
            document.getElementById("eng-us").style.display = "none";
        } else if (currPath.search("/es/") > 0) {
            document.getElementById("language-code").innerHTML = '<img src="' + flagImgURL + 'espain-flag-1x.png" srcset="' + flagImgURL + "espain-flag-1x.png 1x, " + flagImgURL + "espain-flag-2x.png 2x, " + flagImgURL + 'espain-flag-3x.png 3x" width="32" height="32" class="img-responsive display-inline" alt="Spanish Flag" style="height: 32px;">';
            document.getElementById("sp").style.display = "none";
        } else if (currPath.search("/uk/") > 0) {
            document.getElementById("language-code").innerHTML = '<img src="' + flagImgURL + 'uk-flag-1x.png" srcset="' + flagImgURL + "uk-flag-1x.png 1x, " + flagImgURL + "uk-flag-2x.png 2x, " + flagImgURL + 'uk-flag-3x.png 3x" width="35" height="32" class="img-responsive display-inline" alt="UK Flag">';
            document.getElementById("eng-uk").style.display = "none";
        } else if (currPath.search("/ar/") > 0) {
            document.getElementById("language-code").innerHTML = '<img src="' + flagImgURL + 'saudi-arabia-flag-1x.png" srcset="' + flagImgURL + "saudi-arabia-flag-1x.png 1x, " + flagImgURL + "saudi-arabia-flag-2x.png 2x, " + flagImgURL + 'saudi-arabia-flag-3x.png 3x" width="35" height="32" class="img-responsive display-inline" alt="ArFlag">';
            document.getElementById("arabic").style.display = "none";
        }
    </script>
    <nav class="navbar mega-menu navbar-default navbar-default-transparent navbar-fixed-top white-nav">
        <div  iv class="container-fluid no-padding" style="height: 100%;">
            <div class="navbar-header">
                <div data-toggle="collapse" data-target="#chetu-nav" class="navbar-toggle navbar-toggle-button cd-header-buttons">
                    <div id="bar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></div>
                </div>
                <a class="navbar-brand navbar-brand-sticky image-height no-margin-left logo-white active" href="home.php">
                    <img src="img/Untitled design (31).png" alt="logo" class="img-responsive" width="265" height="115" /></a>
                <a class="navbar-brand navbar-brand-sticky image-height no-margin-left logo-teal" href="home.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="265" height="115" viewBox="0 0 265 115" fill="none"></svg></a>
            </div>
            
            <div id="chetu-nav" class="navbar-collapse collapse">
                <ul class="nav navbar-nav primary-nav" id="cd-primary-nav">
                    <li class="on-demand-develop padding-right-15"><a href="home.php" class="dropdown-toggle-hover">الرئيسية</a></a></li>
                    <li class="dropdown" dir="ltr"><a href="#" data-toggle="dropdown" class="dropdown-toggle dropdown-toggle-hover arrow-sec arrow-down arrow-down arrow-down">الحلول</a>
                        <ul role="menu" class="dropdown-menu dropdown-single text-align-start" dir="rtl">
                            <li><a href="animationgraphicdesign.php" class="remove-dropdown-icon">الرسوم المتحركة والتصميم الجرافيكي</a></li>
                            <li><a href="cms.php" class="remove-dropdown-icon">CMS</a></li>
                            <li><a href="crm.php" class="remove-dropdown-icon">CRM</a></li>
                            <li><a href="digitalmarketing.php" class="remove-dropdown-icon">التسويق الرقمي</a></li>
                            <li><a href="sap.php" class="remove-dropdown-icon">ساب</a></li>
                            <li><a href="uiux.php" class="remove-dropdown-icon">UI / UX</a></li>
                            <li><a href="webdevelopment.php" class="remove-dropdown-icon">تطوير الشبكة</a></li>
                        </ul>
                    </li>
                    <li class="on-demand-develop padding-right-15"><a href="clients.php" class="dropdown-toggle-hover">عملائنا</a></li>
                    <li class="on-demand-develop padding-right-15"><a href="work.php" class="dropdown-toggle-hover">عملنا</a></li>
                    <li class="on-demand-develop padding-right-15"><a href="aboutus.php" class="dropdown-toggle-hover">من نحن</a></li>
                    <li class="on-demand-develop contact-us-button"><a href="contactus.php" class="text-center" id="contact-us-url"><span>تواصل معنا</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>