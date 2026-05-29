"use strict";
var KTAccountSettingsSigninMethods = (function () {
    var t,
        e,
        n,
        o,
        i,
        s,
        r,
        a,
        l,
        d = function () {
            e.classList.toggle("d-none"),
                s.classList.toggle("d-none"),
                n.classList.toggle("d-none");
        },
        c = function () {
            o.classList.toggle("d-none"),
                a.classList.toggle("d-none"),
                i.classList.toggle("d-none");
        };
    return {
        init: function () {
            var m;
            (t = document.getElementById("kt_signin_change_email")),
                (e = document.getElementById("kt_signin_email")),
                (n = document.getElementById("kt_signin_email_edit")),
                (o = document.getElementById("kt_signin_password")),
                (i = document.getElementById("kt_signin_password_edit")),
                (s = document.getElementById("kt_signin_email_button")),
                (r = document.getElementById("kt_signin_cancel")),
                (a = document.getElementById("kt_signin_password_button")),
                (l = document.getElementById("kt_password_cancel")),
                e &&
                    (s
                        .querySelector("button")
                        .addEventListener("click", function () {
                            d();
                        }),
                    r.addEventListener("click", function () {
                        d();
                    }),
                    a
                        .querySelector("button")
                        .addEventListener("click", function () {
                            c();
                        }),
                    l.addEventListener("click", function () {
                        c();
                    })),
                t &&
                    ((m = FormValidation.formValidation(t, {
                        fields: {
                            emailaddress: {
                                validators: {
                                    notEmpty: { message: "Email belum diisi" },
                                    emailAddress: {
                                        message: "Email anda belum sesuai",
                                    },
                                },
                            },
                            confirmemailpassword: {
                                validators: {
                                    notEmpty: {
                                        message: "Password belum diisi",
                                    },
                                },
                            },
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            bootstrap: new FormValidation.plugins.Bootstrap5({
                                rowSelector: ".fv-row",
                            }),
                        },
                    })),
                    t
                        .querySelector("#kt_signin_submit")
                        .addEventListener("click", function (e) {
                            e.preventDefault(),
                                console.log("click"),
                                m.validate().then(function (e) {
                                    "Valid" == e
                                        ? swal
                                              .fire({
                                                  text: "Reset password sudah dikirim, silahkan cek email",
                                                  icon: "success",
                                                  buttonsStyling: !1,
                                                  confirmButtonText: "Oke!",
                                                  customClass: {
                                                      confirmButton:
                                                          "btn font-weight-bold btn-light-primary",
                                                  },
                                              })
                                              .then(function () {
                                                  t.reset(), m.resetForm(), d();
                                              })
                                        : swal.fire({
                                              text: "Maaf, terjadi masalah pada sistem, silahkan coba lagi!",
                                              icon: "error",
                                              buttonsStyling: !1,
                                              confirmButtonText: "Oke",
                                              customClass: {
                                                  confirmButton:
                                                      "btn font-weight-bold btn-light-primary",
                                              },
                                          });
                                });
                        })),
                (function () {
                    var t,
                        e = document.getElementById(
                            "kt_signin_change_password"
                        );
                    e &&
                        ((t = FormValidation.formValidation(e, {
                            fields: {
                                currentpassword: {
                                    validators: {
                                        notEmpty: {
                                            message:
                                                "Password sekarang belum diisi",
                                        },
                                    },
                                },
                                newpassword: {
                                    validators: {
                                        notEmpty: {
                                            message:
                                                "Password baru belum diisi",
                                        },
                                    },
                                },
                                confirmpassword: {
                                    validators: {
                                        notEmpty: {
                                            message:
                                                "Konfirmasi password belum diisi",
                                        },
                                        identical: {
                                            compare: function () {
                                                return e.querySelector(
                                                    '[name="newpassword"]'
                                                ).value;
                                            },
                                            message: "Password tidak sama",
                                        },
                                    },
                                },
                            },
                            plugins: {
                                trigger: new FormValidation.plugins.Trigger(),
                                bootstrap:
                                    new FormValidation.plugins.Bootstrap5({
                                        rowSelector: ".fv-row",
                                    }),
                            },
                        })),
                        e
                            .querySelector("#kt_password_submit")
                            .addEventListener("click", function (n) {
                                n.preventDefault(),
                                    console.log("click"),
                                    t.validate().then(function (n) {
                                        "Valid" == n
                                            ? swal
                                                  .fire({
                                                      text: "Reset password sudah dikirim, silahkan cek email",
                                                      icon: "success",
                                                      buttonsStyling: !1,
                                                      confirmButtonText: "Oke!",
                                                      customClass: {
                                                          confirmButton:
                                                              "btn font-weight-bold btn-light-primary",
                                                      },
                                                  })
                                                  .then(function () {
                                                      e.reset(),
                                                          t.resetForm(),
                                                          c();
                                                  })
                                            : swal.fire({
                                                  text: "Maaf, terjadi masalah pada sistem, silahkan coba lagi!",
                                                  icon: "error",
                                                  buttonsStyling: !1,
                                                  confirmButtonText: "Oke!",
                                                  customClass: {
                                                      confirmButton:
                                                          "btn font-weight-bold btn-light-primary",
                                                  },
                                              });
                                    });
                            }));
                })();
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTAccountSettingsSigninMethods.init();
});
