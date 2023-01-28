<!-- Modal Select-->
<div class="modal fade" id="modalSelect">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Jabatan Kerja</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/daftar/jabatan" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- @dd($pendidikan1) --}}

                    {{-- @method('PUT') --}}

                    <div class="jenjang">
                        <div class="jabatan">
                            <input type="hidden" value="{{ Auth::user()->id }}">
                            <label for="jabatan-kerja" class="d-block">Jabatan Kerja </label>
                            <input type="text" name="jabatan_kerja" id="jabatan-kerja"
                                placeholder="Masukkan Jabatan Kerja" class="form-control mt-2">
                        </div>
                        <div class="form-group mt-2">
                            <label>Jenjang</label>
                            <select name="jenjang" id="jenjang" class="form-control select2">
                                <option value="">..</option>
                                @foreach ($jenjang as $jjg)
                                    <option value="{{ $jjg->id }}">Jenjang {{ $jjg->id }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="pendidikan">

                            <div class="default">
                                <div class="form-group mt-2">
                                    <label>Pendidikan</label>
                                    <select name="jenjang-def" id="" class="form-control select2">
                                        <option value="">..</option>
                                        @foreach ($jenjang as $jjg)
                                            <option value="{{ $jjg->nama_jenjang }}">
                                                {{ $jjg->nama_jenjang }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mt-2">
                                <label>Pendidikan</label>
                                <div class="jenjang1">
                                    <select id="pendidikan1" class="form-control select2" name="pendidikan">
                                        {{-- <option>..</option> --}}
                                        @foreach ($pendidikan1 as $pen)
                                            <option value="{{ $pen->id }}">
                                                {{ $pen->nama_pendidikan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="jenjang2">
                                    <select id="pendidikan2" class="form-control select2" name="pendidikan">
                                        {{-- <option>..</option> --}}
                                        @foreach ($pendidikan2 as $pen)
                                            <option value="{{ $pen->id }}">
                                                {{ $pen->nama_pendidikan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="jenjang3">
                                    <select id="pendidikan3" class="form-control select2" name="pendidikan">
                                        {{-- <option>..</option> --}}
                                        @foreach ($pendidikan3 as $pen)
                                            <option value="{{ $pen->id }}">
                                                {{ $pen->nama_pendidikan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="jenjang4">
                                    <select id="pendidikan4" class="form-control select2" name="pendidikan">
                                        {{-- <option>..</option> --}}
                                        @foreach ($pendidikan4 as $pen)
                                            <option value="{{ $pen->id }}">
                                                {{ $pen->nama_pendidikan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="jenjang5">
                                    <select id="pendidikan5" class="form-control select2" name="pendidikan">
                                        {{-- <option>..</option> --}}
                                        @foreach ($pendidikan5 as $pen)
                                            <option value="{{ $pen->id }}">
                                                {{ $pen->nama_pendidikan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="jenjang6">
                                    <select id="pendidikan6" class="form-control select2" name="pendidikan">
                                        {{-- <option>..</option> --}}
                                        @foreach ($pendidikan6 as $pen)
                                            <option value="{{ $pen->id }}">
                                                {{ $pen->nama_pendidikan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Pengalaman</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="pengalaman" accept=".pdf"
                                        name="pengalaman">
                                    <label class="custom-file-label" for="pengalaman">Pilih File</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                        {{-- Pengalaman - Min --}}
                        <div class="jenjang1-pengalaman">
                            <ul class="list-group">
                                <?php foreach ($pengalaman1 as $pengalaman) : ?>
                                <li class="list-group-item">
                                    {{ $pengalaman->nama_pengalaman }}
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="jenjang2-pengalaman">
                            <ul class="list-group">
                                <?php foreach ($pengalaman2 as $pengalaman) : ?>
                                <li class="list-group-item">
                                    {{ $pengalaman->nama_pengalaman }}
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="jenjang3-pengalaman">
                            <ul class="list-group">
                                <?php foreach ($pengalaman3 as $pengalaman) : ?>
                                <li class="list-group-item">
                                    {{ $pengalaman->nama_pengalaman }}
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="jenjang4-pengalaman">
                            <ul class="list-group">
                                <?php foreach ($pengalaman4 as $pengalaman) : ?>
                                <li class="list-group-item">
                                    {{ $pengalaman->nama_pengalaman }}
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="jenjang5-pengalaman">
                            <ul class="list-group">
                                <?php foreach ($pengalaman5 as $pengalaman) : ?>
                                <li class="list-group-item">
                                    {{ $pengalaman->nama_pengalaman }}
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="jenjang6-pengalaman">
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
            <div class="input-footer p-5 mx-auto">
                <button class="btn btn-primary" type="submit">Tambah Jabatan Kerja</button>
            </div>
            </form>
        </div>
    </div>
</div>
