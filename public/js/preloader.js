$(window).on("load", function () {
    $("#status").fadeOut();
    $("#preloader").delay(500).fadeOut("slow");
    $("body").delay(500).css({ overflow: "visible" });
});
