<!-- Modal -->

@extends('layouts.main')

@section('container')
    <form action="/daftar/jabatan" method="post" enctype="multipart/form-data">
        @csrf

        @method('PUT')

        <div class="jenjang">
            <div class="jabatan">
                <input type="hidden" value="{{ Auth::user()->id }}">
                <label for="jabatan-kerja" class="d-block">Jabatan Kerja </label>
                <input type="text" name="jabatan_kerja" id="jabatan-kerja" placeholder="Masukkan Jabatan Kerja"
                    class="form-control mt-2">
            </div>
            <p class="mb-0 mt-2">
                Jenjang
            </p>

            <div class="form-group">
                @foreach ($jenjang as $jjg)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenjang" value="{{ $jjg->id }}"
                            id="{{ $jjg->id }}">
                        <label class="form-check-label" for="{{ $jjg->id }}">{{ $jjg->nama_jenjang }}</label>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="pendidikan">
            <p class="mb-0 mt-2">
                Pendidikan
            </p>
            <div class="default">
                <div class="form-group">
                    @foreach ($jenjang as $jenjang)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenjang-def"
                                value="{{ $jenjang->nama_jenjang }}" id="{{ $jenjang->nama_jenjang }}-def">
                            <label class="form-check-label" for="{{ $jenjang->nama_jenjang }}-def">
                                {{ $jenjang->nama_jenjang }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="jenjang1">
                <?php foreach ($pendidikan1 as $pen) { ?>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pendidikan" value="{{ $pen->id }}">
                    <label class="form-check-label">{{ $pen->nama_pendidikan }}</label>
                </div>
                <?php } ?>
            </div>
            <div class="jenjang2">
                <?php foreach ($pendidikan2 as $pen) { ?>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pendidikan" value="{{ $pen->id }}">
                    <label class="form-check-label">{{ $pen->nama_pendidikan }}</label>
                </div>
                <?php } ?>
            </div>
            <div class="jenjang3">
                <?php foreach ($pendidikan3 as $pen) { ?>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pendidikan" value="{{ $pen->id }}">
                    <label class="form-check-label">{{ $pen->nama_pendidikan }}</label>
                </div>
                <?php } ?>
            </div>
            <div class="jenjang4">
                <?php foreach ($pendidikan4 as $pen) { ?>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pendidikan" value="{{ $pen->id }}">
                    <label class="form-check-label">{{ $pen->nama_pendidikan }}</label>
                </div>
                <?php } ?>
            </div>
            <div class="jenjang5">
                <?php foreach ($pendidikan5 as $pen) { ?>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pendidikan" value="{{ $pen->id }}">
                    <label class="form-check-label">{{ $pen->nama_pendidikan }}</label>
                </div>
                <?php } ?>
            </div>
            <div class="jenjang6">
                <?php foreach ($pendidikan6 as $pen) { ?>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pendidikan" value="{{ $pen->id }}">
                    <label class="form-check-label">{{ $pen->nama_pendidikan }}</label>
                </div>
                <?php } ?>
            </div>



        </div>

        <div class="pengalaman mt-3">
            <label for="">Pengalaman :</label>

            <p class="format">* Menggunakan Format PDF</p>
            <input type="file" accept=".pdf" name="pengalaman" class="form-control">

            <div class="<?= 'jenjang1-pengalaman' ?>">
                <ul class="list-group">
                    <?php foreach ($pengalaman1 as $pengalaman) : ?>
                    <li class="list-group-item">
                        {{ $pengalaman->nama_pengalaman }}
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="<?= 'jenjang2-pengalaman' ?>">
                <ul class="list-group">
                    <?php foreach ($pengalaman2 as $pengalaman) : ?>
                    <li class="list-group-item">
                        {{ $pengalaman->nama_pengalaman }}
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="<?= 'jenjang3-pengalaman' ?>">
                <ul class="list-group">
                    <?php foreach ($pengalaman3 as $pengalaman) : ?>
                    <li class="list-group-item">
                        {{ $pengalaman->nama_pengalaman }}
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="<?= 'jenjang4-pengalaman' ?>">
                <ul class="list-group">
                    <?php foreach ($pengalaman4 as $pengalaman) : ?>
                    <li class="list-group-item">
                        {{ $pengalaman->nama_pengalaman }}
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="<?= 'jenjang5-pengalaman' ?>">
                <ul class="list-group">
                    <?php foreach ($pengalaman5 as $pengalaman) : ?>
                    <li class="list-group-item">
                        {{ $pengalaman->nama_pengalaman }}
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="<?= 'jenjang6-pengalaman' ?>">
                <ul class="list-group">
                    <?php foreach ($pengalaman6 as $pengalaman) : ?>
                    <li class="list-group-item">
                        {{ $pengalaman->nama_pengalaman }}
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>



        </div>
        <div class="input-footer">
            <button class="btn btn-primary" type="submit">Tambah Jabatan Kerja</button>
        </div>
    </form>
@endsection
