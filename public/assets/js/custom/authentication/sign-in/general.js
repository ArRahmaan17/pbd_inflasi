"use strict"; var KTSigninGeneral = function () {
    var t, e, r;
    return {
        init: function () {
            t = document.querySelector("#kt_sign_in_form");
            e = document.querySelector("#kt_sign_in_submit");
            r = FormValidation.formValidation(t, {
                fields: {
                    email: {
                        validators: { regexp: { regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/, message: "email tidak valid" }, notEmpty: { message: "email harus diisi" } }
                    }, password: {
                        validators: { notEmpty: { message: "password harus diisi" } }
                    }
                }, plugins: {
                    trigger: new FormValidation.plugins.Trigger, bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" })
                }
            }), !function (t) {
                try { return new URL(t), !0 } catch (t) { return !1 }
            }
            // if (e.closest("form").getAttribute("action")) {
            //     e.addEventListener("click", (function (i) {
            //         i.preventDefault(), r.validate().then((function (r) {
            //             "Valid" == r ? (e.setAttribute("data-kt-indicator", "on"), e.disabled = !0, setTimeout((function () {
            //                 e.removeAttribute("data-kt-indicator"), e.disabled = !1, 
            // Swal.fire({ text: "Anda Berhasil Login Ke Aplikasi!", icon: "success", buttonsStyling: !1, confirmButtonText: "Ke Aplikasi", customClass: { confirmButton: "btn btn-primary" } }).then((function (e) { if (e.isConfirmed) { t.querySelector('[name="email"]').value = "", t.querySelector('[name="password"]').value = ""; var r = t.getAttribute("data-kt-redirect-url"); r && (location.href = r) } }))
            //             }), 2e3)) : Swal.fire({ text: "Email Dan Password Mohon Diisi Dengan Benar", icon: "error", buttonsStyling: !1, confirmButtonText: "Ok", customClass: { confirmButton: "btn btn-primary" } })
            //         }))
            //     }))
            // } else {
            e.addEventListener("click", (function (i) {
                i.preventDefault();
                r.validate().then((function (r) {
                    if ("Valid" == r) {
                        (e.setAttribute("data-kt-indicator", "on"), e.disabled = !0, axios.post(e.closest("form").getAttribute("action"), new FormData(t)).then((function (e) {
                            if (e) {
                                t.reset();
                                Swal.fire({ text: e.data.message, icon: "success", buttonsStyling: !1, confirmButtonText: e.data.button, customClass: { confirmButton: "btn btn-primary" } }).then((function (f) {
                                    if (f.isConfirmed) {
                                        t.querySelector('[name="email"]').value = "", t.querySelector('[name="password"]').value = ""; var r = t.getAttribute("data-kt-redirect-url"); r && (location.href = r)
                                        const e = t.getAttribute("data-kt-redirect-url"); e && (location.href = e)
                                    }
                                }));
                            } else {
                                Swal.fire({ text: "Sorry, the email or password is incorrect, please try again.", icon: "error", buttonsStyling: !1, confirmButtonText: "Ok", customClass: { confirmButton: "btn btn-primary" } })
                            }
                        })).catch((function (t) {
                            Swal.fire({ text: t.response.data.message ?? t.response.statusText, icon: "error", buttonsStyling: !1, confirmButtonText: "Ok", customClass: { confirmButton: "btn btn-primary" } })
                        })).then((() => {
                            e.removeAttribute("data-kt-indicator"), e.disabled = !1
                        })))
                    } else {
                        Swal.fire({ text: "Email Dan Password Mohon Diisi Dengan Benar", icon: "error", buttonsStyling: !1, confirmButtonText: "Ok", customClass: { confirmButton: "btn btn-primary" } })
                    }
                }))
            }))
        }
    }
}();
KTUtil.onDOMContentLoaded((function () {
    KTSigninGeneral.init()
}));