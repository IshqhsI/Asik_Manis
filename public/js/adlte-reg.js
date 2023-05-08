const jabatankerja = [
    "Manajer Lapangan Pelaksanaan Pekerjaan Gedung",
    "Kepala Pengelola Lingkungan Bangunan Gedung",
    "Pelaksana Lapangan Pekerjaan Gedung",
    "Pelaksana Lapangan Pekerjaan Gedung Madya",
    "Juru Gambar Bangunan Gedung",
    "Pengawas Pekerjaan Struktur Bangunan Gedung",
    "Pengawas Pekerjaan Struktur Bangunan Gedung Madya",
    "Pengawas Pekerjaan Struktur Bangunan Gedung Utama",
    "Perencana Struktur Bangunan RISHA",
    "Pembuat Panel Struktur RISHA",
    "Perakit Struktur Bangunan RISHA",
    "Juru Gambar Bangunan Gedung Level 3",
    "Juru Gambar Bangunan Gedung Level 2",
    "Pelaksanaan Lapangan Pekerjaan Gedung Level 3",
    "Pelaksanaan Lapangan Pekerjaan Gedung Level 2",
    "Tukang Cat Bangun Gedung",
    "Tukang Cat Bangun Gedung Level 2",
    "Tukang Plester Bangunan Gedung",
    "Tukang Plester Bangunan Gedung Level 2",
    "Tukang Pasang Ubin",
    "Tukang Pasang Ubin Level 2",
];

$(document).ready(function () {
    $.each(jabatankerja, function (index, value) {
        $("#jabatan-kerja").append(
            $("<option>", {
                value: value,
                text: value,
            })
        );
    });
    jenjang();
});

function jenjang() {
    $(".jenjang1").hide();
    $(".jenjang2").hide();
    $(".jenjang3").hide();
    $(".jenjang4").hide();
    $(".jenjang5").hide();
    $(".jenjang6").hide();

    $(".jenjang1-pengalaman").hide();
    $(".jenjang2-pengalaman").hide();
    $(".jenjang3-pengalaman").hide();
    $(".jenjang4-pengalaman").hide();
    $(".jenjang5-pengalaman").hide();
    $(".jenjang6-pengalaman").hide();

    $("select#jenjang").change(function () {
        var selectedJenjang = $(this).children("option:selected").val();

        $("select#pendidikan").change(function () {
            var selectPendidikan = $(this).children("option:selected").val();

            console.info(selectPendidikan);
        });

        if (selectedJenjang == 1) {
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
        } else if (selectedJenjang == 2) {
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
        } else if (selectedJenjang == 3) {
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
        } else if (selectedJenjang == 4) {
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
        } else if (selectedJenjang == 5) {
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
        } else if (selectedJenjang == 6) {
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
}
