(() => {
  var e = function (e) {
      var t = !1,
        n = 0,
        a = setInterval(() => {
          !(function () {
            if ("function" == typeof jQuery || "function" == typeof $)
              clearInterval(a), "function" == typeof e && e();
            else if (!t && n > 5e3) {
              var r = document.createElement("script");
              (r.type = "text/javascript"),
                (r.src =
                  "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js");
              var i = document.getElementsByTagName("script")[0];
              i.parentNode.insertBefore(r, i), (t = !0);
            }
          })(),
            (n += 10);
        }, 10);
    },
    t = function (t) {
      e(() => {
        var e = !1,
          n = 0,
          a = setInterval(() => {
            (() => {
              if (
                "function" == typeof jQuery().modal ||
                "function" == typeof $().modal
              )
                clearInterval(a), "function" == typeof t && t();
              else if (!e && n > 5e3) {
                e = !0;
                var r = document.createElement("script");
                for (var i of ((r.type = "text/javascript"),
                (r.src = "https://www.chetu.com/js/bootstrap-model.min.js"),
                (r.async = !0),
                document.getElementsByTagName("script"))) {
                  var o = $(i).attr("src");
                  !o ||
                    (-1 === o.indexOf("/jquery/") &&
                      -1 === o.indexOf("js/jquery_bs.js")) ||
                    $(i).after(r);
                }
              }
            })(),
              (n += 10);
          }, 10);
      });
    };
  e(() => {
    var e,
      n,
      a = function (e) {
        for (
          var t = window.location.search.replace(/\?/g, "&").split("&"), n = 0;
          n < t.length;
          n++
        ) {
          var a = t[n].split("=");
          if (a.indexOf(e) > -1) return a[1];
        }
        return "";
      };
    window.location.href.indexOf("gated=true") > -1 &&
      $.get(baseUrl + "views/gated-inquiry.php?do_not_track=1", function (e) {
        n = e;
      });
    var r = function () {
      var e = setInterval(() => {
        "undefined" != typeof grecaptcha &&
          (clearInterval(e),
          grecaptcha.ready(function () {
            grecaptcha
              .execute("6LfDb5YUAAAAAMt14l5zKfv8NUqF1y77sZ9ViimM", {
                action: "homepage",
              })
              .then(function (e) {
                $('[name="recaptcha_response"]').val(e), console.log(e);
              })
              .catch((e) => {
                e && console.error(e);
              });
          }));
      }, 50);
    };
    $(document).on("submit", '[name="gated_inquiry_form"]', function (e) {
      e.preventDefault(),
        (function (e) {
          var t = new XMLHttpRequest(),
            n = e.getAttribute("action");
          t.open("POST", n, !0),
            t.setRequestHeader(
              "Content-Type",
              "application/x-www-form-urlencoded"
            ),
            (t.onreadystatechange = function () {
              if (
                (500 === this.status &&
                  (e
                    .querySelector('input[type="submit"]')
                    .removeAttribute("disabled"),
                  (document.getElementById("ei-loading-ovelay").style.display =
                    "none")),
                this.readyState === XMLHttpRequest.DONE && 200 === this.status)
              ) {
                e.querySelector('input[type="submit"]').removeAttribute(
                  "disabled"
                );
                var n = JSON.parse(t.response);
                if (void 0 !== n.status && "success" === n.status) {
                  $("#gatedInquiry_modal").modal("hide");
                  var a = window.location.href.replace(
                    "gated=true",
                    "gated=false"
                  );
                  history.pushState({}, null, a);
                  for (
                    var i = document.getElementsByTagName("a"), o = 0;
                    o < i.length;
                    o++
                  ) {
                    var s = i[o].href.replace("gated=true", "gated=false");
                    i[o].href = s;
                  }
                  localStorage.removeItem("c_visitHistory");
                } else {
                  document.getElementById("ei-loading-ovelay").style.display =
                    "none";
                  var c = n.error;
                  for (var l in (o.token_value &&
                    ((document.getElementById("Token").value = o.token_value),
                    delete o.token_value),
                  c))
                    d(e, c[l], l), "captcha" === l && r();
                }
              }
            });
          for (
            var a = e.querySelectorAll("input"), i = "", o = 0;
            o < a.length;
            o++
          )
            i += a[o].getAttribute("name") + "=" + a[o].value + "&";
          e.querySelector('input[type="submit"]').setAttribute("disabled", ""),
            t.send(i);
        })(this),
        (document.getElementById("ei-loading-ovelay").style.display = "block"),
        d(this);
    }),
      window.innerWidth < 991 &&
        (void 0 !== document.hidden ||
          void 0 !== document.msHidden ||
          document.webkitHidden),
      setInterval(() => {
        i();
      }, 52);
    var i = function () {
        if (n && !e) {
          var i = 0;
          if ((o(), 0 === i)) {
            var d = document.createElement("script");
            (d.src =
              "https://www.google.com/recaptcha/api.js?render=6LfDb5YUAAAAAMt14l5zKfv8NUqF1y77sZ9ViimM"),
              document.head.appendChild(d),
              (i = 1);
          }
          t(() => {
            $("#gatedInquiry_modal").modal("show");
          }),
            (e = !0),
            (document.querySelector('input[name="Pagename"]').value =
              window.location.origin + window.location.pathname),
            (document.querySelector('input[name="Keyword"]').value =
              a("keyword")),
            (document.querySelector('input[name="gclid"]').value = a("gclid")),
            (document.querySelector('input[name="msclkid"]').value =
              a("msclkid")),
            r(),
            setInterval(r, 12e4),
            $("#gatedInquiry_modal").on("hidden.bs.modal", function (e) {
              document.getElementById("ei_css").disabled = !0;
            });
        }
      },
      o = function () {
        return (
          !$("#gatedInquiry").length &&
          ($("body").append(`<div id="gatedInquiry">${n}</div>`), !0)
        );
      },
      d = function (e, t = "", n = "") {
        (e = $(e)),
          (this.fields = e.find(n ? `[name="${n}"]` : ".show-error-message")),
          this.fields.length || (this.fields = e.find('[name="miscError"]')),
          this.fields.each(function () {
            var e = $(this).attr("name"),
              n = 0;
            $(`[data-name="${e}"]`).length ||
              ($(this).before(`<div class="error" data-name="${e}"></div>`),
              (n = 50)),
              setTimeout(() => {
                $(`[data-name="${e}"]`).html(t);
              }, n);
          });
      };
  });
})();
