<div class="register-box">
    <form action="<?= BASEURL; ?>/home/editdata" method="post">

        <hr class="mt-5">

        <h2 class="register-text"> Edit Data </h2>

        <div class="nama">
            <div class="col-lg-5">
                <label for="nama" class=" d-flex align-items-start">Nama </label>
            </div>
            <div class="col-lg-7">
                <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" class="form-control"
                    value="<?= $data['edit']['nama'] ?>">
            </div>
        </div>
        <div class="alamat">
            <div class="col-lg-5">
                <label for="alamat" class=" d-flex align-items-start">Alamat & Kode Pos </label>
            </div>
            <div class="col-lg-7">
                <textarea type="textarea" name="alamat" id="alamat" placeholder="Masukkan Alamat"
                    class="form-control">  <?= $data['edit']['alamat'] ?></textarea>
            </div>
        </div>
        <div class="account d-flex mt-4 row">
            <div class="col-lg-5 px-0">
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" placeholder="Masukkan Email" class="form-control"
                    value="<?= $data['edit']['email'] ?>">
            </div>
            <div class="col-lg-5 px-0 ms-auto">
                <label for="password">Password :</label>
                <input type="password" name="password" id="password" placeholder="Masukkan Password"
                    class="form-control" value="<?= $data['edit']['password'] ?>">
            </div>
            <div class="nohp col-lg-12 mt-3 p-0">
                <label for="nohp">No HP/WA(AKTIF) :</label>
                <input type="number" name="nohp" id="nohp" placeholder="Masukkan No HP/WA" class="form-control wa"
                    value="<?= $data['edit']['nohp'] ?>">
            </div>
        </div>
        <div class="jenjang m-auto mt-1" style="width: 80%;">
            <div class="jabatan">
                <label for="jabatan-kerja" class="d-block">Jabatan Kerja </label>
                <input type="text" name="jabatan-kerja" id="jabatan-kerja" placeholder="Masukkan Jabatan Kerja"
                    class="form-control mt-2" value="<?= $data['edit']['jabatan_kerja'] ?>">
            </div>

            <div class="jenjang">
                <label for="jenjang" class="d-block mt-2"> Jenjang </label>
                <input type="text" name="jenjang" id="jenjang" placeholder="Masukkan Jenjang" class="form-control mt-2"
                    value="<?= $data['edit']['jenjang'] ?>">
            </div>

            <div class="pendidikan">
                <label for="pendidikan" class="d-block mt-2"> Pendidikan </label>
                <input type="text" name="pendidikan" id="pendidikan" placeholder="Masukkan Pendidikan"
                    class="form-control mt-2" value="<?= $data['edit']['pendidikan'] ?>">
            </div>

            <input type="hidden" value="<?= $data['id'] ?>" name="id">
        </div>
</div>

<hr>

<div class="container d-flex justify-content-center mt-5 p-5 py-2" style="width: 80%;">
    <button type="submit" class="btn btn-primary w-50"> Kirim </button>
</div>
</form>