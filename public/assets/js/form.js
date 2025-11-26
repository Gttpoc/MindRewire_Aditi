function disableSubmitButton(attribute, type) {
    if (type == "disabled") {
        $(attribute).attr("disabled", "disabled");
        $(attribute).css({
            opacity: "0.5",
        });
    } else {
        $(attribute).removeAttr("Disabled");
        $(attribute).css({
            opacity: "1",
        });
    }
}

function showError(input, message) {
    let parent = input.closest(".common_col");

    let error_msg = `<img src="/assets/images/common-images/icon_error.svg" alt="icon error"
                            class="licon">
                        <div class="textbox">
                            <strong class="ttext">Error</strong>
                            <p>${message}</p>
                        </div>`;

    parent.find(".error_msg").removeClass("d-none").html(error_msg);
}

function clearError(input) {
    let parent = input.closest(".common_col");
    parent.removeClass("error");
    parent.find(".error_msg").addClass("d-none");
}

$("input, textarea, .dropdownmenu").on("change input", function () {
    clearError($(this));
});

function showSwalToast(type, msg) {
    Swal.fire({
        toast: true,
        icon: type,
        title: msg,
        iconColor: "white",
        customClass: {
            popup: "colored-toast",
        },
        position: "top-right",
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: true,
    });
}
