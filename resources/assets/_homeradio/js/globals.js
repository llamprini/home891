document.addEventListener("DOMContentLoaded", function () {
    //* Debounce
    $.debounce = function (func, wait, immediate) {
        let timeout;
        return function () {
            let context = this,
                args = arguments;
            let later = function () {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };
            let callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    };

    $.submitForm = function (
        id,
        recaptchaAction = "contact",
        withFile = false
    ) {
        const action = $(id).attr("action");
        const method = $(id).attr("method");

        let ajaxConfig = {
            url: action,
            method: method,
        };

        if (withFile) {
            $(id).attr("enctype", "multipart/form-data");

            ajaxConfig = {
                ...ajaxConfig,
                dataType: "json",
                processData: false,
                contentType: false,
            };
        }

        $(document).on("submit", id, function (e) {
            e.preventDefault();
            e.stopPropagation();

            $(id)
                .addClass("is-loading")
                .find('button[type="submit"]')
                .attr("disabled", true)
                .trigger("blur");

            if (grecaptcha) {
                grecaptcha.enterprise.ready(async () => {
                    const token = await grecaptcha.enterprise.execute(
                        recaptchaSiteKey,
                        {
                            action: recaptchaAction,
                        }
                    );
                    $(id).find('[name="g-recaptcha-response"]').val(token);

                    const configWithData = {
                        ...ajaxConfig,
                        data: withFile ? new FormData(this) : $(id).serialize(),
                    };

                    const ajaxCallback = function (data) {
                        $(id)
                            .removeClass("is-loading")
                            .find('button[type="submit"]')
                            .attr("disabled", false);

                        if (!data.status) {
                            // On Fail
                            const errorKeysArray = Object.keys(data.errors);

                            // Show current errors
                            $.each(data.errors, function (key, row) {
                                $(id)
                                    .find(`[name=${key}]`)
                                    .nextAll(".invalid-feedback")
                                    .html(() =>
                                        row.map((val) => `<p>${val}</p>`)
                                    )
                                    .show();
                            });

                            // Hide previous errors
                            $(id)
                                .find(
                                    `input:not(${errorKeysArray
                                        .map((key) => `[name=${key}]`)
                                        .join(",")})`
                                )
                                .nextAll(".invalid-feedback")
                                .hide();
                        } else {
                            // On Pass
                            $(id)
                                .nextAll(".form-response")
                                .html(data.message)
                                .show();

                            $(id).trigger("reset").remove();
                        }
                    };

                    $.ajax({
                        ...configWithData,
                        success: ajaxCallback,
                    });
                });
            }
        });
    };

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
});
