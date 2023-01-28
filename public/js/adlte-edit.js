$(document).ready(function () {
    $("select#jenjang").click(function () {
        $(".default").remove();
    });
    $("select#jenjang").change(function () {
        var selectedJenjang = $(this).children("option:selected").val();

        if (selectedJenjang == 1) {
            $(".pen2").remove();
            $(".pen3").remove();
            $(".pen4").remove();
            $(".pen5").remove();
            $(".pen6").remove();

            $("select#pendidikan").append(
                "<option class='pen1'>Pendidikan Dasar</option>"
            );
            $("select#pendidikan").append(
                "<option class='pen1'>Non Pendidikan ( Dengan PBK )</option>"
            );
        } else if (selectedJenjang == 2) {
            $(".default").remove();
            $(".pen1").remove();
            $(".pen3").remove();
            $(".pen4").remove();
            $(".pen5").remove();
            $(".pen6").remove();

            $("select#pendidikan").append("<option class='pen2'>SMK</option>");
            $("select#pendidikan").append("<option class='pen2'>SMA</option>");
            $("select#pendidikan").append(
                "<option class='pen2'>Pendidikan Dasar</option>"
            );
        } else if (selectedJenjang == 3) {
            $(".default").remove();
            $(".pen1").remove();
            $(".pen2").remove();
            $(".pen4").remove();
            $(".pen5").remove();
            $(".pen6").remove();

            $("select#pendidikan").append(
                "<option class='pen3'>D1 / SMK Plus</option>"
            );
            $("select#pendidikan").append("<option class='pen3'>SMK</option>");
            $("select#pendidikan").append("<option class='pen3'>SMA</option>");
            $("select#pendidikan").append(
                "<option class='pen3'>Pendidikan Dasar</option>"
            );
        } else if (selectedJenjang == 4) {
            $(".default").remove();
            $(".pen1").remove();
            $(".pen2").remove();
            $(".pen3").remove();
            $(".pen5").remove();
            $(".pen6").remove();

            $("select#pendidikan").append("<option class='pen4'>SMA</option>");
            $("select#pendidikan").append("<option class='pen4'>SMK</option>");
            $("select#pendidikan").append(
                "<option class='pen4'>D1 / SMK PLUS</option>"
            );
            $("select#pendidikan").append("<option class='pen4'>D2</option>");
        } else if (selectedJenjang == 5) {
            $(".default").remove();
            $(".pen1").remove();
            $(".pen2").remove();
            $(".pen3").remove();
            $(".pen4").remove();
            $(".pen6").remove();

            $("select#pendidikan").append("<option class='pen5'>SMA</option>");
            $("select#pendidikan").append("<option class='pen5'>SMK</option>");
            $("select#pendidikan").append(
                "<option class='pen5'>D1 / SMK PLUS</option>"
            );
            $("select#pendidikan").append(
                "<option class='pen5'>D2 MINIMAL</option>"
            );
            $("select#pendidikan").append(
                "<option class='pen5'>D3 MINIMAL</option>"
            );
        } else if (selectedJenjang == 6) {
            $(".default").remove();
            $(".pen1").remove();
            $(".pen2").remove();
            $(".pen3").remove();
            $(".pen4").remove();
            $(".pen5").remove();

            $("select#pendidikan").append(
                "<option class='pen5'>D1 SIPIL</option>"
            );
            $("select#pendidikan").append(
                "<option class='pen5'>D2 SIPIL</option>"
            );
            $("select#pendidikan").append(
                "<option class='pen5'>D3 SIPIL</option>"
            );
            $("select#pendidikan").append(
                "<option class='pen5'>S1 UMUM</option>"
            );
            $("select#pendidikan").append(
                "<option class='pen5'>S1 SIPIL / S1 TERAPAN / D4 TERAPAN</option>"
            );
        }
    });
});

{
    /* <div class="jenjang1">
                                                                    @foreach ($pendidikan1 as $pen)
                                                                        <option>
                                                                            {{ $pen->nama_pendidikan }}
                                                                        </option>
                                                                    @endforeach
                                                                </div>
                                                                <div class="jenjang2">
                                                                    @foreach ($pendidikan2 as $pen)
                                                                        <option>
                                                                            {{ $pen->nama_pendidikan }}
                                                                        </option>
                                                                    @endforeach
                                                                </div>
                                                                <div class="jenjang3">
                                                                    @foreach ($pendidikan3 as $pen)
                                                                        <option>
                                                                            {{ $pen->nama_pendidikan }}
                                                                        </option>
                                                                    @endforeach
                                                                </div>
                                                                <div class="jenjang4">
                                                                    @foreach ($pendidikan4 as $pen)
                                                                        <option>
                                                                            {{ $pen->nama_pendidikan }}
                                                                        </option>
                                                                    @endforeach
                                                                </div>
                                                                <div class="jenjang5">
                                                                    @foreach ($pendidikan5 as $pen)
                                                                        <option>
                                                                            {{ $pen->nama_pendidikan }}
                                                                        </option>
                                                                    @endforeach
                                                                </div>
                                                                @foreach ($pendidikan6 as $pen)
                                                                    <option>
                                                                        {{ $pen->nama_pendidikan }}
                                                                    </option>
                                                                @endforeach */
}
