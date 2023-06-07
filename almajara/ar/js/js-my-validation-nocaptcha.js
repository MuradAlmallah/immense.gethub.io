function newsletter_validateForm() {
  var e = $(".cl_input_name").val(),
    r = $(".cl_input_email").val(),
    a = $(".cl_input_company").val(),
    t = $(".cl_input_newsletter :selected").text(),
    n = "";
  0 === e.length && (n = "\n Please enter the name.");
  return (
    0 === r.length
      ? (n += "\n Please enter the email.")
      : 0 ==
          /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/.test(
            r
          ) && (n += "\n Please enter valid email address."),
    0 === a.length && (n += "\n Please enter the company."),
    (0 === t.length || "What would you like to see in the newsletter?" == t) &&
      (n += "\n Please select the newsletter option."),
    !n || (alert(n), !1)
  );
}
function onblur_validation(e) {
  (reqMsg = "Please Enter "),
    (alphaMsg = " must contain only characters."),
    (emailMsg = "Please enter a valid "),
    (alphanumMsg = "Alpha Numeric Only");
  var r = "Please Enter Correct ",
    a = $(e).attr("class"),
    t =
      (numCase =
      alphaCase =
      minCase =
      maxCase =
      emailCase =
      nonZeroCase =
      cardCase =
        0);
  (t = for_required(a, e)),
    (numCase = for_numeric(a, e)),
    (alphaCase = for_alphabate(a, e)),
    (aNumCase = for_alphanumeric(a, e)),
    (minCase = for_minlength(a, e)),
    (maxCase = for_maxlength(a, e)),
    (optCase = for_opt(a, e)),
    (emailCase = for_email(a, e)),
    (nonZeroCase = for_nonzero(a, e)),
    (cardCase = for_card_expdate(a, e)),
    (reqMsg += $(e).attr("placeholder")),
    (alphaMsg = $(e).attr("placeholder") + alphaMsg),
    (emailMsg += $(e).attr("placeholder")),
    (r += $(e).attr("placeholder")),
    1 == t
      ? (show_error(e, reqMsg), (flag = 1))
      : 1 == alphaCase
      ? (show_error(e, alphaMsg), (flag = 1))
      : 1 == numCase
      ? (show_error(e, "Numeric Only"),
        $(".cl_label_phone").addClass("errorMessage"),
        (flag = 1))
      : 0 == aNumCase
      ? 0 == minCase
        ? 0 == maxCase
          ? 0 == optCase
            ? 0 == emailCase
              ? 0 == nonZeroCase
                ? 0 != cardCase && (show_error(e, r), (flag = 1))
                : (show_error(e, nonzeroMsg), (flag = 1))
              : ($(".cl_label_email").addClass("errorMessage"),
                show_error(e, emailMsg),
                alert("invalid"),
                (flag = 1))
            : (show_error(e, optMsg), (flag = 1))
          : (show_error(e, maxCase), (flag = 1))
        : (show_error(e, minCase), (flag = 1))
      : (show_error(e, alphanumMsg), (flag = 1));
}
function custom_validation(e, r, a, t, n, s, o, i, l, m, c) {
  errorCount = 0;
  var u = 0;
  0 == c && (c = l.error.comment),
    0 == m && (m = l.error.company),
    0 == t && (t = l.error.alpha_numeric),
    0 == n && (n = l.error.numeric_only),
    0 == s && (s = l.error.invalid_email);
  var h = l.error.required,
    _ =
      ((o = o || l.error.no_zero_allowed),
      (i = i || l.error.incorrect_expiration_date),
      0);
  return (
    $("." + e).each(function () {
      (u = 0),
        (r = l.error.required),
        (a = l.error.characters_only),
        (s = l.error.invalid_email),
        (phonenumMsg = l.error.invalid_phone),
        (faxnumMsg = l.error.invalid_fax);
      var e = $(this).attr("class");
      this.errorMsgObj = l.error;
      var g =
        (numCase =
        alphaCase =
        minCase =
        maxCase =
        emailCase =
        nonZeroCase =
        cardCase =
          0);
      if (
        ((g = for_required(e, this)),
        (numCase = for_numeric(e, this)),
        (alphaCase = for_alphabate(e, this)),
        (aNumCase = for_alphanumeric(e, this)),
        (validCompany = for_company(e, this)),
        (commentCase = for_comment(e, this)),
        (minCase = for_minlength(e, this)),
        (maxCase = for_maxlength(e, this)),
        (optCase = for_opt(e, this)),
        (emailCase = for_email(e, this)),
        (cardCase = for_card_expdate(e, this)),
        (nonZeroCase = for_nonzero(e, this)),
        (phonenumCase = for_ten_digit_phonenumber(e, this)),
        (faxnumCase = for_ten_digit_faxnumber(e, this)),
        (a = $(this).attr("id") + a),
        1 == g
          ? (show_error(this, r), (u = 1), (_ = 1))
          : 1 == alphaCase
          ? (show_error(this, a), (u = 1), (_ = 1))
          : 1 == numCase
          ? (show_error(this, n),
            $(".cl_label_phone").addClass("errorMessage"),
            (u = 1),
            (_ = 1))
          : 0 == aNumCase
          ? 0 == validCompany
            ? 0 == commentCase
              ? 0 == minCase
                ? 0 == maxCase
                  ? 0 == optCase
                    ? 0 == emailCase
                      ? 0 == nonZeroCase
                        ? 0 == cardCase
                          ? 0 == phonenumCase
                            ? 0 != faxnumCase &&
                              (show_error(this, faxnumMsg), (u = 1), (_ = 1))
                            : (show_error(this, phonenumMsg), (u = 1), (_ = 1))
                          : (show_error(this, i), (u = 1), (_ = 1))
                        : (show_error(this, o), (u = 1), (_ = 1))
                      : ($(".cl_label_email").addClass("errorMessage"),
                        show_error(this, s),
                        (u = 1),
                        (_ = 1))
                    : (show_error(this, h), (u = 1), (_ = 1))
                  : (show_error(this, maxCase), (u = 1), (_ = 1))
                : (show_error(this, minCase), (u = 1), (_ = 1))
              : (show_error(this, c), (u = 1), (_ = 1))
            : (show_error(this, m), (u = 1), (_ = 1))
          : (show_error(this, t), (u = 1), (_ = 1)),
        0 == u)
      ) {
        var f = $(this).parent().get(0).tagName,
          d = $(this).parent(f).find("div.errorMessage");
        d.length && d.remove();
      }
    }),
    _
  );
}
function trim(e) {
  return (e = (e = e.replace(/^\s+/, "")).replace(/\s+$/, ""));
}
function show_error(e, r) {
  var a = $(e).parent().parent().get(0).tagName,
    t = $(e).parent().parent(a).find("div.errorMessage").length;
  0 == errorCount && errorCount++,
    t
      ? $(e).parent().parent(a).find("div.errorMessage").html(r)
      : $("input").hasClass("MessageMoveAboveParent")
      ? $(e).closest(".slider-item").children(".errorMessage").html(r)
      : $(e)
          .parent()
          .after("<div class='errorMessage'>" + r + "</div>");
}
function for_required(e, r) {
  if ("required" == e.match("required")) {
    var a = $(r).val();
    r.id;
    return null == (a = trim(a)) || "" == a || 0 >= a.length
      ? ((flag = 1), 1)
      : ($(r).parent().next("div.errorMessage").html(""), 0);
  }
  return 0;
}
function for_numeric(e, r) {
  if ("numeric" == e.match("numeric")) {
    var a = $(r).val();
    return (
      (a = trim(a)),
      1 == isNaN(a) || 0 >= a.length
        ? ((flag = 1), 1)
        : ($(r).next("div.errorMessage").html(""), 0)
    );
  }
  return 0;
}
function for_alphabate(e, r) {
  if ("alpha" == e.match("alpha")) {
    var a = $(r).val();
    return (
      (a = trim(a)),
      /\d/.test(a) || !/^[a-zA-Z\u00C0-\u00FF ]*$/.test(a)
        ? ((flag = 1), 1)
        : ($(r).parent().next("div.errorMessage").html(""), 0)
    );
  }
  return 0;
}
function for_company(e, r) {
  if ("company" == e.match("company")) {
    var a = $(r).val();
    return (
      (a = trim(a)),
      1 != /<\/?[\w\s="/.':;#-\/\?]+>/gi.test(a) || "" == a
        ? ($(r).parent().next("div.errorMessage").html(""), 0)
        : ((flag = 1), 1)
    );
  }
  return 0;
}
function for_alphanumeric(e, r) {
  if ("anum" == e.match("anum")) {
    var a = $(r).val();
    return (
      (a = trim(a)),
      /^[0-9A-Za-z]+$/.test(a) || "" == a
        ? ($(r).next("div.errorMessage").html(""), 0)
        : ((flag = 1), 1)
    );
  }
  return 0;
}
function for_comment(e, r) {
  if ("comment" == e.match("comment")) {
    var a = $(r).val();
    return (
      (a = trim(a)),
      1 != /<\/?[\w\s="/.':;#-\/\?]+>/gi.test(a) || "" == a
        ? ($(r).next("div.errorMessage").html(""), 0)
        : ((flag = 1), 1)
    );
  }
  return 0;
}
function for_minlength(e, r) {
  if ("min" == e.match("min")) {
    var a = $(r).val();
    a = trim(a);
    var t = e,
      n = t.indexOf("min"),
      s = t.substring(n, t.length),
      o = (s.indexOf(" "), s.substring(3, s.lenght));
    if (((o = parseInt(o)), a.length < o)) {
      flag = 1;
      var i = r.errorMsgObj.minimum_length;
      return (i = i.replace("%ch%", o));
    }
    return $(r).next("div.errorMessage").html(""), 0;
  }
  return 0;
}
function for_maxlength(e, r) {
  if ("max" == e.match("max")) {
    var a = $(r).val();
    a = trim(a);
    var t = e,
      n = t.indexOf("max"),
      s = t.substring(n, t.length),
      o = (s.indexOf(" "), s.substring(3, s.length));
    if (((o = parseInt(o)), a.length > o)) {
      flag = 1;
      var i = r.errorMsgObj.maximum_length;
      return (i = i.replace("%ch%", o));
    }
    return $(r).next("div.errorMessage").html(""), 0;
  }
  return 0;
}
function for_opt(e, r) {
  if ("optreq" == e.match("optreq")) {
    var a = $(r).attr("name");
    r.id;
    return (
      (a = trim(a)),
      0 >= $("input[name=" + a + "]:checked").length
        ? ((flag = 1), 1)
        : ($(r).next("div.errorMessage").html(""), 0)
    );
  }
  return 0;
}
function for_email(e, r) {
  if ("email" == e.match("email")) {
    var a = $(r).val();
    return (
      (a = trim(a)),
      /^[a-zA-Z0-9._-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/gim.test(a)
        ? ($(r).next("div.errorMessage").html(""), 0)
        : ((flag = 1), 1)
    );
  }
  return 0;
}
function for_nonzero(e, r) {
  return "nonzero" == e.match("nonzero")
    ? 0 == parseInt($(r).val())
      ? ((flag = 1), 1)
      : ($(r).next("div.errorMessage").html(""), 0)
    : 0;
}
function for_card_expdate(e, r) {
  if ("card" == e.match("card")) {
    var a = $(r).val().split("/"),
      t = 0;
    return (
      (12 < a[0] || !$.isNumeric(a[0])) && (t = 1),
      (!$.isNumeric(a[0]) ||
        a[1] < new Date().getFullYear() ||
        (a[1] == new Date().getFullYear() && a[0] < new Date().getMonth())) &&
        (t = 1),
      t
    );
  }
  return 0;
}
function for_ten_digit_phonenumber(e, r) {
  if ("phonenum" == e.match("phonenum")) {
    var a = $(r).val();
    return (
      (a = (a = trim(a))
        .replace(/[(]/g, "")
        .replace(/[)]/g, "")
        .replace(/[.]/g, "")
        .replace(/[-]/g, "")
        .replace(/[ ]/g, "")),
      new RegExp(/^(\+)?[0-9]{5,15}$/).test(a) ? 0 : ((flag = 1), 1)
    );
  }
  return 0;
}
function for_ten_digit_faxnumber(e, r) {
  if ("faxnum" == e.match("faxnum")) {
    var a = $(r).val();
    return (
      (a = trim(a)),
      new RegExp(/^(\+)?[0-9]{5,15}$/).test(a) ? 0 : ((flag = 1), 1)
    );
  }
  return 0;
}
(errorCount = 0),
  $(document).ready(function () {
    $("#carrier-form-button").click(function () {
      return 0 ==
        custom_validation(
          "my_validation",
          "Required",
          0,
          0,
          0,
          "This is a required field.",
          0,
          0
        )
        ? void $("#new-careers-form").submit()
        : ($("input[type=text]").each(function () {
            $(this).next().show();
          }),
          !1);
    }),
      $("#contactbtn").click(function () {
        let e = getValdationMessagesLanguage();
        return 0 ==
          custom_validation(
            "ct_validation",
            "Required",
            0,
            0,
            0,
            e.error.required_field,
            0,
            0,
            e,
            0,
            0
          )
          ? void $("#chetu_enq-Form").submit()
          : ($("input[type=text]").each(function () {
              $(this).next().show();
            }),
            !1);
      }),
      $(document).on("blur", ".ct_validation", function () {
        let e = getValdationMessagesLanguage();
        return 0 ==
          custom_validation(
            "ct_validation",
            "Required",
            0,
            0,
            0,
            e.error.required_field,
            0,
            0,
            e,
            0
          )
          ? void $("#feedback_enq-Form").submit()
          : ($("input[type=text]").each(function () {
              $(this).next().show();
            }),
            !1);
      });
    var e = 1,
      r = 40;
    $("#next").click(function () {
      var a,
        t = "ct_validation-" + e;
      let n = getValdationMessagesLanguage();
      return (
        (a = custom_validation(
          t,
          "Required",
          0,
          0,
          0,
          n.error.required_field,
          0,
          0,
          n
        )),
        console.log(e),
        console.log(t),
        0 == a
          ? ($(".formSlide").slick("slickNext"),
            (e += 1),
            $(".progress-bar-info").css("width", r + "%"),
            void (r += 20))
          : ($("input[type=text]").each(function () {
              $(this).next().show();
            }),
            !1)
      );
    }),
      $("input[type=text]").blur(function () {
        "" == $(this).val() ? $(this).next().show() : $(this).next().hide();
      }),
      $('INPUT[type="file"]').change(function () {
        var e = this.value.match(/\.(.+)$/)[1].toLowerCase();
        "docx" == e || "doc" == e
          ? ($("#resumeType").next().html(""), $("#resumeType").val(this.value))
          : ($("#resumeType")
              .next()
              .html("Only doc,docx and pdf file type is allowed"),
            $("#resumeType").val(""));
      });
  }),
  $(".sbm_btn").click(function () {
    var e = $(".cl_input_name").val(),
      r = $(".cl_input_email").val(),
      a = $(".cl_input_phone").val(),
      t = $(".cl_input_comment").val();
    "" == e &&
      "" == r &&
      "" == a &&
      "" == t &&
      $(".vsl-input-field").children(".cl_label").addClass("errorMessage"),
      "" == e
        ? $(".cl_label_name").addClass("errorMessage")
        : $(".cl_label_name").removeClass("errorMessage"),
      "" == r
        ? $(".cl_label_email").addClass("errorMessage")
        : $(".cl_label_email").removeClass("errorMessage"),
      "" == a
        ? $(".cl_label_phone").addClass("errorMessage")
        : $(".cl_label_phone").removeClass("errorMessage"),
      "" == t
        ? $(".cl_label_comment").addClass("errorMessage")
        : $(".cl_label_comment").removeClass("errorMessage"),
      $(".frm_sbm").submit();
  }),
  $(".cl_input_name").keyup(function () {
    "" != $(".cl_input_name").val() &&
      ($(".cl_label_name").removeClass("errorMessage"),
      $(".cl_input_name").siblings("div").remove());
  }),
  $(".cl_input_email").keyup(function () {
    "" != $(".cl_input_email").val() &&
      ($(".cl_label_email").removeClass("errorMessage"),
      $(".cl_input_email").siblings("div").remove());
  }),
  $(".cl_input_phone").keyup(function () {
    "" != $(".cl_input_phone").val() &&
      ($(".cl_label_phone").removeClass("errorMessage"),
      $(".cl_input_phone").siblings("div").remove());
  }),
  $(".cl_input_comment").keyup(function () {
    "" != $(".cl_input_comment").val() &&
      ($(".cl_label_comment").removeClass("errorMessage"),
      $(".cl_input_comment").siblings("div").remove());
  });
