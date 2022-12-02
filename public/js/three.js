// alert('tes');
$(".jenjang1").hide();
$(".jenjang2").hide();
$(".jenjang3").hide();
$(".jenjang4").hide();
$(".jenjang5").hide();
$(".jenjang6").hide();
$(function () {
    $(".jenjang1-pengalaman").hide();
    $(".jenjang2-pengalaman").hide();
    $(".jenjang3-pengalaman").hide();
    $(".jenjang4-pengalaman").hide();
    $(".jenjang5-pengalaman").hide();
    $(".jenjang6-pengalaman").hide();

    $('input:radio[name="jenjang"]').change(function () {
        if (this.checked && this.value == "1") {
            $(".jenjang1").show();
            $(".jenjang2").hide();
            $(".jenjang3").hide();
            $(".jenjang4").hide();
            $(".jenjang5").hide();
            $(".jenjang6").hide();
            $(".default").hide();

            $(".jenjang1-pengalaman").show();
            $(".jenjang2-pengalaman").hide();
            $(".jenjang3-pengalaman").hide();
            $(".jenjang4-pengalaman").hide();
            $(".jenjang5-pengalaman").hide();
            $(".jenjang6-pengalaman").hide();
        } else if (this.checked && this.value == "2") {
            $(".jenjang1").hide();
            $(".jenjang2").show();
            $(".jenjang3").hide();
            $(".jenjang4").hide();
            $(".jenjang5").hide();
            $(".jenjang6").hide();
            $(".default").hide();

            $(".jenjang1-pengalaman").hide();
            $(".jenjang2-pengalaman").show();
            $(".jenjang3-pengalaman").hide();
            $(".jenjang4-pengalaman").hide();
            $(".jenjang5-pengalaman").hide();
            $(".jenjang6-pengalaman").hide();
        } else if (this.checked && this.value == "3") {
            $(".jenjang1").hide();
            $(".jenjang2").hide();
            $(".jenjang3").show();
            $(".jenjang4").hide();
            $(".jenjang5").hide();
            $(".jenjang6").hide();
            $(".default").hide();

            $(".jenjang1-pengalaman").hide();
            $(".jenjang2-pengalaman").hide();
            $(".jenjang3-pengalaman").show();
            $(".jenjang4-pengalaman").hide();
            $(".jenjang5-pengalaman").hide();
            $(".jenjang6-pengalaman").hide();
        } else if (this.checked && this.value == "4") {
            $(".jenjang1").hide();
            $(".jenjang2").hide();
            $(".jenjang3").hide();
            $(".jenjang4").show();
            $(".jenjang5").hide();
            $(".jenjang6").hide();
            $(".default").hide();

            $(".jenjang1-pengalaman").hide();
            $(".jenjang2-pengalaman").hide();
            $(".jenjang3-pengalaman").hide();
            $(".jenjang4-pengalaman").show();
            $(".jenjang5-pengalaman").hide();
            $(".jenjang6-pengalaman").hide();
        } else if (this.checked && this.value == "5") {
            $(".jenjang1").hide();
            $(".jenjang2").hide();
            $(".jenjang3").hide();
            $(".jenjang4").hide();
            $(".jenjang5").show();
            $(".jenjang6").hide();
            $(".default").hide();

            $(".jenjang1-pengalaman").hide();
            $(".jenjang2-pengalaman").hide();
            $(".jenjang3-pengalaman").hide();
            $(".jenjang4-pengalaman").hide();
            $(".jenjang5-pengalaman").show();
            $(".jenjang6-pengalaman").hide();
        } else if (this.checked && this.value == "6") {
            $(".jenjang1").hide();
            $(".jenjang2").hide();
            $(".jenjang3").hide();
            $(".jenjang4").hide();
            $(".jenjang5").hide();
            $(".jenjang6").show();
            $(".default").hide();

            $(".jenjang1-pengalaman").hide();
            $(".jenjang2-pengalaman").hide();
            $(".jenjang3-pengalaman").hide();
            $(".jenjang4-pengalaman").hide();
            $(".jenjang5-pengalaman").hide();
            $(".jenjang6-pengalaman").show();
        }
    });

    $;

    $('input:radio[name="jenjang4"]').change(function () {
        if (this.checked && this.value === "sma") {
            $(".jenjang4-pengalaman").show();
        }
    });
});

var el = document.getElementById("wrapper");
var toggleButton = document.getElementById("menu-toggle");

toggleButton.onclick = function () {
    el.classList.toggle("toggled");
};
