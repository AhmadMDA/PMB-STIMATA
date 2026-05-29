"use strict";
var KTModalNewAddress = (function () {
    var t, e, n, o, i, r;
    return {
        init: function () {
            (r = document.querySelector("#kt_riwayat-pendidikan")) &&
                ((i = new bootstrap.Modal(r)),
                (o = document.querySelector("#kt_form_riwayat-pendidikan")),
                (t = document.getElementById("kt_riwayat-pendidikan_submit")),
                (e = document.getElementById("kt_riwayat-pendidikan_cancel")),
                $(o.querySelector('[name="jalur"]'))
                    .select2()
                    .on("change", function () {
                        n.revalidateField("jalur");
                    }),
                $(o.querySelector('[name="semester"]'))
                    .select2()
                    .on("change", function () {
                        n.revalidateField("semester");
                    }),
                $(o.querySelector('[name="tahun"]'))
                    .select2()
                    .on("change", function () {
                        n.revalidateField("tahun");
                    }),
                $(o.querySelector('[name="prodi"]'))
                    .select2()
                    .on("change", function () {
                        n.revalidateField("prodi");
                    }),
                (n = FormValidation.formValidation(o, {
                    fields: {
                        jalur: {
                            validators: {
                                notEmpty: {
                                    message: "Jalur masuk belum diisi",
                                },
                            },
                        },
                        semester: {
                            validators: {
                                notEmpty: {
                                    message: "Semester masuk belum diisi",
                                },
                            },
                        },
                        tahun: {
                            validators: {
                                notEmpty: {
                                    message: "Tahun akademik belum diisi",
                                },
                            },
                        },
                        prodi: {
                            validators: {
                                notEmpty: {
                                    message: "Program studi belum diisi",
                                },
                            },
                        },
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                            eleInvalidClass: "",
                            eleValidClass: "",
                        }),
                    },
                })),
                t.addEventListener("click", function (e) {
                    e.preventDefault(),
                        n &&
                            n.validate().then(function (e) {
                                console.log("validated!"),
                                    "Valid" == e
                                        ? (t.setAttribute(
                                              "data-kt-indicator",
                                              "on"
                                          ),
                                          (t.disabled = !0),
                                          setTimeout(function () {
                                              t.removeAttribute(
                                                  "data-kt-indicator"
                                              ),
                                                  (t.disabled = !1),
                                                  Swal.fire({
                                                      text: "Berhasil Daftar!",
                                                      icon: "success",
                                                      buttonsStyling: !1,
                                                      confirmButtonText: "Oke!",
                                                      customClass: {
                                                          confirmButton:
                                                              "btn btn-primary",
                                                      },
                                                  }).then(function (t) {
                                                      t.isConfirmed && i.hide();
                                                  });
                                          }, 2e3))
                                        : Swal.fire({
                                              text: "Maaf, terjadi masalah pada sistem, coba lagi!",
                                              icon: "error",
                                              buttonsStyling: !1,
                                              confirmButtonText: "Ok, got it!",
                                              customClass: {
                                                  confirmButton:
                                                      "btn btn-primary",
                                              },
                                          });
                            });
                }),
                e.addEventListener("click", function (t) {
                    t.preventDefault(),
                        Swal.fire({
                            text: "Yakin mau dibatalkan?",
                            icon: "warning",
                            showCancelButton: !0,
                            buttonsStyling: !1,
                            confirmButtonText: "Ya, batal!",
                            cancelButtonText: "Tidak, kembali!",
                            customClass: {
                                confirmButton: "btn btn-primary",
                                cancelButton: "btn btn-active-light",
                            },
                        }).then(function (t) {
                            t.value
                                ? (o.reset(), i.hide())
                                : "cancel" === t.dismiss &&
                                  Swal.fire({
                                      text: "Form dibatalkan!.",
                                      icon: "error",
                                      buttonsStyling: !1,
                                      confirmButtonText: "Oke",
                                      customClass: {
                                          confirmButton: "btn btn-primary",
                                      },
                                  });
                        });
                }));
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTModalNewAddress.init();
});
