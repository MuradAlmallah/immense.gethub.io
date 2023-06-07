function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
  var expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/;secure";
}
function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(";");
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
function imgURLgen(
  path,
  type = "src",
  deviceType = false,
  local = window.location.origin
) {
  var rPath;
  if (type == "srcset") {
    var temp = [];
    for (var i = 0; i < 3; i++) {
      var imgXvalue = i + 1 + "x";
      temp[i] = local + path.replace("{xv}", imgXvalue) + " " + imgXvalue;
    }
    rPath = temp.join();
  } else if (type == "src" && deviceType == false) {
    rPath = local + path;
  } else if (type == "src" && deviceType == true) {
    if (window.devicePixelRatio <= 1) {
      rPath = local + path.replace("{xv}", "1x");
    } else if (window.devicePixelRatio <= 2 && window.devicePixelRatio > 1) {
      rPath = local + path.replace("{xv}", "2x");
    } else if (window.devicePixelRatio > 2) {
      rPath = local + path.replace("{xv}", "3x");
    }
  }
  return rPath;
}
function getInternetExplorerVersion() {
  var ie =
    (!!window.ActiveXObject && +/msie\s(\d+)/i.exec(navigator.userAgent)[1]) ||
    NaN;
  if (ie === 6) {
    document.documentElement.className += " ie6";
  } else if (ie === 7) {
    document.documentElement.className += " ie7";
  } else if (ie === 8) {
    document.documentElement.className += " ie8";
  } else if (ie === 9) {
    document.documentElement.className += " ie9";
  } else if (!!window.MSInputMethodContext && !!document.documentMode) {
    ie = 11;
  }
  return ie;
}
var chetuNav = $("#chetu-nav"),
  siteUrl = window.location.origin,
  currLang = document.querySelector("html").getAttribute("lang"),
  logoWhite =
    currLang == "es"
      ? siteUrl + "/img/chetu-logo-white-spanish.png"
      : siteUrl + "/img/chetu-logo-white.png",
  colorLogo =
    currLang == "es"
      ? siteUrl + "/img/chetu-logo-color-spanish.png"
      : siteUrl + "/img/logo-new-home.png",
  srchIconWhtSrcSet = imgURLgen(
    "/img/home-page-img/random-icon/search-white-{xv}.png",
    "srcset"
  ),
  srchIconBlkSrcSet = imgURLgen(
    "/img/home-page-img/random-icon/search-black-{xv}.png",
    "srcset"
  ),
  phoneIconBlkSrcSet = imgURLgen(
    "/img/home-page-img/random-icon/call-{xv}-b.png",
    "srcset"
  ),
  phoneIconwhiteSrcSet = imgURLgen(
    "/img/home-page-img/random-icon/call-{xv}-w.png",
    "srcset"
  ),
  navHeader = $(".navbar-header"),
  whiteNavPhnImg = $(".white-nav .phone img"),
  whiteNavSrcImg = $(".white-nav .search img");
$(document).ready(function () {
  var cname = getCookie("visitorCheck");
  if (cname == null || cname == undefined || cname == "") {
    $(".cookies-policy-sec").show();
  } else {
    $(".cookies-policy-sec").hide();
  }
  $("#cookie-acceptance").on("click", function () {
    setCookie("visitorCheck", "yes", 90);
    $(".cookies-policy-sec").hide();
  });
  $(document).scroll(function () {
    var scroll_start = $(this).scrollTop();
    if (scroll_start > 50) {
      $(".navbar-default").addClass("navColor");
      $(".scrollTop").fadeIn();
      $(".navbar-brand img").attr("src", colorLogo);scrollTop
      $(".searchClose").attr(
        "src",
        siteUrl + "/img/home-page-img/random-icon/cross-black-1x.png"
      );
      $(".searchClose").attr(
        "srcset",
        imgURLgen(
          "/img/home-page-img/random-icon/cross-black-{xv}.png",
          "srcset"
        )
      );
      $(".opacity-top").addClass("sticky-top-bar");
    } else {
      $(".navbar-default").removeClass("navColor");
      $(".scrollTop").fadeOut();
      $(".navbar-brand img").attr("src", logoWhite);
      $(".white-nav .searchClose").attr(
        "src",
        siteUrl + "/img/home-page-img/random-icon/cross-white-1x.png"
      );
      $(".white-nav .searchClose").attr(
        "srcset",
        imgURLgen(
          "/img/home-page-img/random-icon/cross-white-{xv}.png",
          "srcset"
        )
      );
      $(".opacity-top").removeClass("sticky-top-bar");
    }
    if ($(".white-nav").hasClass("navColor")) {
      whiteNavSrcImg.attr(
        "src",
        siteUrl + "img/home-page-img/random-icon/search-black-1x.png"
      );
      whiteNavSrcImg.attr("srcset", srchIconBlkSrcSet);
      whiteNavPhnImg.attr(
        "src",
        siteUrl + "img/home-page-img/random-icon/call-1x-b.png"
      );
      whiteNavPhnImg.attr("srcset", phoneIconBlkSrcSet);
    } else {
      whiteNavSrcImg.attr(
        "src",
        siteUrl + "img/home-page-img/random-icon/search-white-1x.png"
      );
      whiteNavSrcImg.attr("srcset", srchIconWhtSrcSet);
      whiteNavPhnImg.attr(
        "src",
        siteUrl + "img/home-page-img/random-icon/call-1x-b.png"
      );
      whiteNavPhnImg.attr("srcset", phoneIconwhiteSrcSet);
    }
    $("#bar").click(function () {
      whiteNavSrcImg.attr(
        "src",
        siteUrl + "img/home-page-img/random-icon/search-black-1x.png"
      );
    });
  });
});
$(".counter").each(function () {
  var $this = $(this),
    countTo = $this.attr("data-count");
  $({ countNum: $this.text() }).animate(
    { countNum: countTo },
    {
      duration: 8000,
      easing: "linear",
      step: function () {
        $this.text(Math.floor(this.countNum));
      },
      complete: function () {
        $this.text(this.countNum);
      },
    }
  );
});
$(".anchor-click a").click(function (e) {
  e.preventDefault();
  $("html,body").animate(
    { scrollTop: $($(this).attr("href")).offset().top - 120 },
    1000
  );
});
$(".search").click(function () {
  $("#cd-primary-nav").css("display", "none");
  $(".search-form").css("display", "block");
  $(".search-form input").focus();
  if (window.innerWidth <= 1199) {
    $("#lang-nav").hide();
    navHeader.css("float", "left");
    $(".cd-header-buttons").css("display", "none");
    navHeader.css("background", "transparent");
    if (window.innerWidth <= 767) {
      $(".logo-white").removeClass("active");
      $(".logo-teal").removeClass("active");
    }
  }
  if ($(".navbar-collapse").hasClass("in")) {
    $(".white-nav .navbar-brand img").attr("src", logoWhite);
    $(".navColor.white-nav .navbar-brand img").attr("src", colorLogo);
    $("body").css("overflow", "auto");
    $(".navbar").removeClass("nav-white");
  }
  $(".search-button-new.mobile").css("display", "none");
});
$(".searchClose").click(function () {
  $("#cd-primary-nav").css("display", "block");
  $(".search-form").css("display", "none");
  $(".logo-white").addClass("active");
  $(".logo-teal").removeClass("active");
  if (window.innerWidth <= 1199) {
    navHeader.css("float", "none");
    $(".cd-header-buttons").css("display", "block");
    if (window.innerWidth <= 767) {
      navHeader.css("float", "none");
      $(".logo-white").addClass("active");
      $(".logo-teal").removeClass("active");
    }
  }
  if (window.innerWidth <= 1199 && window.innerWidth > 480) {
    $("#lang-nav").show();
  }
  if (window.innerWidth > 1199) {
    navHeader.css("float", "left");
  }
  if ($(".navbar-collapse").hasClass("in")) {
    navHeader.css("background", "#fff");
    $(".white-nav .navbar-brand img").attr("src", colorLogo);
    $("body").css("overflow", "hidden");
    $(".navbar").addClass("nav-white");
  } else {
    navHeader.css("background", "transparent");
  }
  $(".cd-header-buttons").css("display", "block");
  $(".search-button-new.mobile").css("display", "block");
});
$(window).on("resize", function () {
  if (window.innerWidth > 1199 && navHeader.css("float") == "none") {
    navHeader.css("float", "left");
  } else if (window.innerWidth < 1199 && navHeader.css("float") == "left") {
    navHeader.css("float", "none");
  }
});
$("#chetu-nav").on("show.bs.collapse", function (e) {
  $(".navbar").addClass("nav-white");
  $(".logo-white").removeClass("active");
  $(".logo-teal").addClass("active");
  if ($(".white-nav .navbar-brand img").attr("src") == logoWhite) {
    $(".white-nav .navbar-brand img").attr("src", colorLogo);
  }
  $(".phone-number ul").css("background", "#0297a496");
  $(".phone-number ul li a").css("color", "#fff");
  $(".cross-icon").attr(
    "src",
    imgURLgen(
      "/img/home-page-img/random-icon/cross-black-{xv}.png",
      "src",
      true
    )
  );
  $(".cross-icon").attr(
    "srcset",
    imgURLgen("/img/home-page-img/random-icon/cross-black-{xv}.png", "srcset")
  );
  whiteNavSrcImg.attr(
    "src",
    imgURLgen(
      "/img/home-page-img/random-icon/search-black-{xv}.png",
      "src",
      true
    )
  );
  whiteNavSrcImg.attr("srcset", srchIconBlkSrcSet);
  whiteNavPhnImg.attr(
    "src",
    imgURLgen("/img/home-page-img/random-icon/call-{xv}-b.png", "src", true)
  );
  whiteNavPhnImg.attr("srcset", phoneIconBlkSrcSet);
  $("body").addClass("navigation-body-fix-mobile");
});
$("#chetu-nav, #close-but").on("hide.bs.collapse click", function (e) {
  if (e.target.tagName !== "A") {
    $(".navbar").removeClass("nav-white");
    $(".logo-white").addClass("active");
    $(".logo-teal").removeClass("active");
    $(".phone-number").css("display", "none");
    $(".phone-number ul").css("background", "rgba(255, 255, 255, 0.8)");
    $(".phone-number ul li a").css("color", "#000");
    if ($(".white-nav").hasClass("navColor")) {
      $(".white-nav .navbar-brand img").attr("src", colorLogo);
    } else {
      $(".white-nav .navbar-brand img").attr("src", logoWhite);
    }
    if ($(".white-nav").hasClass("navColor")) {
      whiteNavSrcImg.attr(
        "src",
        imgURLgen(
          "/img/home-page-img/random-icon/search-black-{xv}.png",
          "src",
          true
        )
      );
      whiteNavSrcImg.attr("srcset", srchIconBlkSrcSet);
      whiteNavPhnImg.attr(
        "src",
        imgURLgen("/img/home-page-img/random-icon/call-{xv}-b.png", "src", true)
      );
      whiteNavPhnImg.attr("srcset", phoneIconBlkSrcSet);
    } else {
      whiteNavSrcImg.attr(
        "src",
        imgURLgen(
          "/img/home-page-img/random-icon/search-white-{xv}.png",
          "src",
          true
        )
      );
      whiteNavSrcImg.attr("srcset", srchIconWhtSrcSet);
      whiteNavPhnImg.attr(
        "src",
        imgURLgen("/img/home-page-img/random-icon/call-{xv}-w.png", "src", true)
      );
      whiteNavPhnImg.attr("srcset", phoneIconwhiteSrcSet);
    }
    $("body").removeClass("navigation-body-fix-mobile");
  }
});
$(".navbar-collapse").css(
  "max-height",
  $(window).height() - navHeader.height()
);
$(document).ready(function () {
  $(".phone").click(function () {
    if ($("nav").hasClass("bg-white") || $("nav").hasClass("black-nav")) {
      $(".phone-number ul").addClass("ul-white");
    }
    $(".phone-number").toggle();
  });
  $(document).on("click", function (e) {
    var $trigger = $(".phone");
    if ($trigger !== e.target && !$trigger.has(e.target).length) {
      $(".phone-number").hide();
    }
  });
  $(document).on("click", ".phone-number a", function (e) {
    e.stopPropagation();
  });
});
$("#chetu-nav").on("shown.bs.dropdown", function () {
  $(this).find(".open").children("a").addClass("arrow-cross");
});
$("#chetu-nav").on("hidden.bs.dropdown", function () {
  $(this).find(".arrow-cross").removeClass("arrow-cross");
});
var currentDate = new Date();
var providedDate = new Date(2000, 03, 01);
var get_Current_Year = document.getElementsByClassName("curr-year"),
  i;
if (currentDate.getMonth() >= providedDate.getMonth()) {
  for (i = 0; i < get_Current_Year.length; i++) {
    get_Current_Year[i].innerHTML =
      currentDate.getFullYear() - providedDate.getFullYear();
  }
} else if (currentDate.getMonth() < providedDate.getMonth()) {
  for (i = 0; i < get_Current_Year.length; i++) {
    get_Current_Year[i].innerHTML =
      currentDate.getFullYear() - 1 - providedDate.getFullYear();
  }
}
$(".heroshotSlide").on("init", function (e, slick, direction) {
  $(this).css("display", "block");
});
$(document).ready(function () {
  if ($("body").attr("id") == "landing-page") {
    $("#lang-nav").css("display", "none");
    if (window.innerWidth > 1199) {
      $(".opacity-top p").css("margin-right", 30);
    }
  }
});
var getSection = document.getElementById("HomeSlider");
var getClassSection = document.querySelector("section.sticker");
if ($(getSection).attr("id") == "HomeSlider" && getClassSection == null) {
  var getNextSection = getSection.nextElementSibling;
  getNextSection.insertAdjacentHTML(
    "afterbegin",
    '<div class="container-fluid" id="breadcumb-head"><div class="row"><div class="col-xs-12 col-md-10 col-md-offset-1 no-padding"><ul id="breadcumb" class="breadcrumb text-capitalize"></ul></div></div></div>'
  );
  getNextSection.style.setProperty("padding-top", "30px", "important"),
    getNextSection.style.setProperty("margin-top", "0px", "!important");
} else if (getClassSection != null) {
  var getnextClassSection = getClassSection.nextElementSibling;
  getnextClassSection.insertAdjacentHTML(
    "afterbegin",
    '<div class="container-fluid" id="breadcumb-head"><div class="row"><div class="col-xs-12 col-md-10 col-md-offset-1 no-padding"><ul id="breadcumb" class="breadcrumb text-capitalize"></ul></div></div></div>'
  );
  getnextClassSection.style.setProperty("padding-top", "30px", "important");
  getnextClassSection.style.setProperty("margin-top", "0px", "!important");
}
var urlPath = "",
  getclass = $("body").attr("class"),
  linkName,
  basicURL =
    window.location.protocol +
    "//" +
    window.location.hostname +
    (window.location.port ? ":" + window.location.port : ""),
  currentURL = basicURL + window.location.pathname,
  icon = "<img src='https://www.chetu.com/img/icons/home.png'>",
  temp = currentURL.replace(basicURL + "/", ""),
  splitURL = temp.split("/");
if (currentURL.indexOf("/uk/") > 0) {
  urlPath += '<li><a href="' + basicURL + '/uk">Home</a></li>';
  for (var i = 1; i < splitURL.length - 1; i++) {
    urlPath +=
      '<li><a id="level1" href="' +
      currentURL.substring(
        0,
        currentURL.indexOf(splitURL[i]) + splitURL[i].length
      ) +
      '.php">' +
      splitURL[i].replace(/-/g, " ") +
      "</a></li>";
  }
} else if (currentURL.indexOf("/es/") > 0) {
  urlPath += "<li><a id='level1' href=" + basicURL + '/es">Home</a></li>';
  for (var i = 1; i < splitURL.length - 1; i++) {
    urlPath +=
      '<li><a href="' +
      currentURL.substring(
        0,
        currentURL.indexOf(splitURL[i]) + splitURL[i].length
      ) +
      '.php">' +
      splitURL[i].replace(/-/g, " ") +
      "</a></li>";
  }
} else {
  urlPath += '<li><a href="' + basicURL + '">Home</a></li>';
  for (var i = 0; i < splitURL.length - 1; i++) {
    urlPath +=
      '<li><a id="level1" href="' +
      currentURL.substring(
        0,
        currentURL.indexOf(splitURL[i]) + splitURL[i].length
      ) +
      '.php">' +
      splitURL[i].replace(/-/g, " ") +
      "</a></li>";
  }
}
i = splitURL.length - 1;
if (
  document.querySelector('#chetu-nav a[href="' + currentURL + '"]') === null
) {
  linkName = splitURL[i]
    .replace(/-/g, " ")
    .substring(0, splitURL[i].indexOf(".php"));
} else {
  linkName = document.querySelector(
    '#chetu-nav a[href="' + currentURL + '"]'
  ).innerHTML;
}
urlPath +=
  '<li><a id="level2" href="' +
  currentURL.substring(
    0,
    currentURL.indexOf(splitURL[i]) + splitURL[i].length
  ) +
  '">' +
  linkName +
  "</a></li>";
var breadcrumbEle = document.getElementById("breadcumb");
if (breadcrumbEle != null) {
  breadcrumbEle.innerHTML = urlPath;
  if (
    document.location.href.indexOf("blogs") > -1 ||
    document.location.href.indexOf("case-study") > -1 ||
    getclass == "breadcrumb-hide"
  ) {
    document.getElementById("breadcumb-head").style.display = "none";
    breadcrumbEle.innerHTML = "";
  }
  var getChild = breadcrumbEle.children;
  var count = getChild.length;
  for (var i = 1; i < count; i++) {
    var getText = getChild[i].innerText.toLowerCase();
    if (getText == "solutions" || getText == "uk" || getText == "Es") {
      var pointerNone = breadcrumbEle.children[i].children[0];
      $(pointerNone).attr("href", "javascript:void(0)");
      pointerNone.style.setProperty("cursor", "not-allowed");
    }
  }
}
 var ie_ver = getInternetExplorerVersion();
if (ie_ver >= 9 && ie_ver <= 11) {
  $(".search-form input").keyup(function () {
    if ($(this).val() == undefined || $(this).val() == "") {
      $("#ie-placeholder").show();
      $(".search-form input").attr("placeholder", "");
    } else {
      $("#ie-placeholder").hide();
    }
  });
} 
var imageObserver = new IntersectionObserver(function (entries, imgObserver) {
  entries.forEach(function (entry) {
    if (entry.isIntersecting) {
      var lazyImage = entry.target;
      lazyImage.src = lazyImage.dataset.src;
      if (lazyImage.dataset.srcset != undefined) {
        lazyImage.srcSet = lazyImage.dataset.srcset;
      }
      imgObserver.unobserve(lazyImage);
    }
  });
});
if (ie_ver <= 10) {
  $(".lazyload, .lazy").each(function () {
    var src = $(this).attr("data-src");
    $(this).attr("src", src);
    var srcSet = $(this).attr("data-srcset");
    $(this).attr("srcset", srcSet);
  });
} else {
  document.addEventListener("DOMContentLoaded", function () {
    var lazyload = document.querySelectorAll("[class~=lazyload]");
    var lazyload_2 = document.querySelectorAll("[class~=lazy]");
    lazyload.forEach((v) => {
      imageObserver.observe(v);
    });
    lazyload_2.forEach((v) => {
      imageObserver.observe(v);
    });
  });
}
$("div.scrollTop").click(function () {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});
var hashLink = window.location.hash + "-hash";
if ((hashLink != "") & (document.querySelector(hashLink) != null)) {
  var elePos = document.querySelector(hashLink).getBoundingClientRect().top;
  window.scrollTo({ top: elePos - 120 });
}
