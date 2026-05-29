"use strict";
var KTAuthNewPassword = (function () {
    var t,
        e,
        r,
        o,
        n = function () {
            return o.getScore() > 50;
        };
    return {
        init: function () {
            (t = document.querySelector("#kt_new_password_form")),
                (e = document.querySelector("#kt_new_password_submit")),
                (o = KTPasswordMeter.getInstance(
                    t.querySelector('[data-kt-password-meter="true"]')
                )),
                (r = FormValidation.formValidation(t, {
                    fields: {
                        password: {
                            validators: {
                                notEmpty: {
                                    message: "Password belum diisi",
                                },
                                callback: {
                                    message: "Password anda belum sesuai ketentuan",
                                    callback: function (t) {
                                        if (t.value.length > 0) return n();
                                    },
                                },
                            },
                        },
                        "confirm-password": {
                            validators: {
                                notEmpty: {
                                    message:
                                        "Konfirmasi password belum diisi",
                                },
                                identical: {
                                    compare: function () {
                                        return t.querySelector(
                                            '[name="password"]'
                                        ).value;
                                    },
                                    message:
                                        "Password tidak sama",
                                },
                            },
                        },
                        toc: {
                            validators: {
                                notEmpty: {
                                    message:
                                        "Anda harus menerima ketentuan kami.",
                                },
                            },
                        },
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger({
                            event: { password: !1 },
                        }),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                            eleInvalidClass: "",
                            eleValidClass: "",
                        }),
                    },
                })),
                t
                    .querySelector('input[name="password"]')
                    .addEventListener("input", function () {
                        this.value.length > 0 &&
                            r.updateFieldStatus("password", "NotValidated");
                    }),
                !(function (t) {
                    try {
                        return new URL(t), !0;
                    } catch (t) {
                        return !1;
                    }
                })(t.getAttribute("action"))
                    ? e.addEventListener("click", function (n) {
                          n.preventDefault(),
                              r.revalidateField("password"),
                              r.validate().then(function (r) {
                                  "Valid" == r
                                      ? (e.setAttribute(
                                            "data-kt-indicator",
                                            "on"
                                        ),
                                        (e.disabled = !0),
                                        setTimeout(function () {
                                            e.removeAttribute(
                                                "data-kt-indicator"
                                            ),
                                                (e.disabled = !1),
                                                Swal.fire({
                                                    text: "Anda berhasil mereset password!",
                                                    icon: "success",
                                                    buttonsStyling: !1,
                                                    confirmButtonText:
                                                        "Oke",
                                                    customClass: {
                                                        confirmButton:
                                                            "btn btn-primary",
                                                    },
                                                }).then(function (e) {
                                                    if (e.isConfirmed) {
                                                        (t.querySelector(
                                                            '[name="password"]'
                                                        ).value = ""),
                                                            (t.querySelector(
                                                                '[name="confirm-password"]'
                                                            ).value = ""),
                                                            o.reset();
                                                        var r = t.getAttribute(
                                                            "data-kt-redirect-url"
                                                        );
                                                        r &&
                                                            (location.href = r);
                                                    }
                                                });
                                        }, 1500))
                                      : Swal.fire({
                                            text: "Maaf, terjadi masalah sistem, silahkan coba lagi",
                                            icon: "error",
                                            buttonsStyling: !1,
                                            confirmButtonText: "Oke",
                                            customClass: {
                                                confirmButton:
                                                    "btn btn-primary",
                                            },
                                        });
                              });
                      })
                    : e.addEventListener("click", function (o) {
                          o.preventDefault(),
                              r.revalidateField("password"),
                              r.validate().then(function (r) {
                                  "Valid" == r
                                      ? (e.setAttribute(
                                            "data-kt-indicator",
                                            "on"
                                        ),
                                        (e.disabled = !0),
                                        axios
                                            .post(
                                                e
                                                    .closest("form")
                                                    .getAttribute("action"),
                                                new FormData(t)
                                            )
                                            .then(function (e) {
                                                if (e) {
                                                    t.reset();
                                                    const e = t.getAttribute(
                                                        "data-kt-redirect-url"
                                                    );
                                                    e && (location.href = e);
                                                } else Swal.fire({ text: "Maaf, email anda salah, silahkan coba lagi.", icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });
                                            })
                                            .catch(function (t) {
                                                Swal.fire({
                                                    text: "Maaf, terjadi masalah sistem, silahkan coba lagi.",
                                                    icon: "error",
                                                    buttonsStyling: !1,
                                                    confirmButtonText:
                                                        "Oke",
                                                    customClass: {
                                                        confirmButton:
                                                            "btn btn-primary",
                                                    },
                                                });
                                            })
                                            .then(() => {
                                                e.removeAttribute(
                                                    "data-kt-indicator"
                                                ),
                                                    (e.disabled = !1);
                                            }))
                                      : Swal.fire({
                                            text: "Maaf, terjadi masalah sistem, silahkan coba lagi.",
                                            icon: "error",
                                            buttonsStyling: !1,
                                            confirmButtonText: "Oke",
                                            customClass: {
                                                confirmButton:
                                                    "btn btn-primary",
                                            },
                                        });
                              });
                      });
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTAuthNewPassword.init();
});
