<!-- Modal Checkbox-->
<div class="modal fade" id="modalCheckbox" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    style="display: none">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Jabatan Kerja</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/daftar/jabatan" method="post" enctype="multipart/form-data">
                    @csrf

                    {{-- @method('PUT') --}}

                    <div class="jenjang">
                        <div class="jabatan mb-3">
                            <input type="hidden" value="{{ Auth::user()->id }}">
                            <label for="jabatan-kerja" class="d-block">Jabatan Kerja </label>
                            <select name="jabatan_kerja" id="jabatan-kerja" class="form-control">
                                <option value="...">...</option>
                            </select>
                            {{-- <input type="text" name="jabatan_kerja" id="jabatan-kerja"
                                placeholder="Masukkan Jabatan Kerja" class="form-control mt-2"> --}}
                        </div>
                        <label>Jenjang</label>
                        <div class="form-group row mx-auto">
                            {{-- <div class="d-grid"> --}}
                            @foreach ($jenjang as $jjg)
                                <div class="custom-control custom-radio col-4">
                                    <input class="custom-control-input custom-control-input-primary" type="radio"
                                        name="jenjang" value="{{ $jjg->id }}" id="{{ $jjg->id }}">
                                    <label class="custom-control-label"
                                        for="{{ $jjg->id }}">{{ $jjg->nama_jenjang }}</label>
                                </div>
                            @endforeach
                            {{-- </div> --}}
                        </div>
                    </div>
                    <div class="pendidikan">

                        <div class="default">
                            <label>Pendidikan</label>
                            @foreach ($jenjang as $jenjang)
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input custom-control-input-primary" type="radio"
                                        id="{{ $jenjang->id }}-def" name="pendidikan"
                                        value="{{ $jenjang->nama_jenjang }}">
                                    <label for="{{ $jenjang->id }}-def"
                                        class="custom-control-label">{{ $jenjang->nama_jenjang }}</label>
                                </div>
                            @endforeach
                        </div>
                        <div class="form-group mt-2">

                            <div class="jenjang1">
                                <label>Pendidikan</label>
                                @foreach ($pendidikan1 as $pen)
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-primary" type="radio"
                                            id="{{ $pen->nama_pendidikan }}1" name="pendidikan"
                                            value="{{ $pen->id }}">
                                        <label for="{{ $pen->nama_pendidikan }}1"
                                            class="custom-control-label">{{ $pen->nama_pendidikan }}</label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="jenjang2">
                                <label>Pendidikan</label>
                                <?php foreach ($pendidikan2 as $pen) { ?>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input custom-control-input-primary" type="radio"
                                        id="{{ $pen->nama_pendidikan }}2" name="pendidikan"
                                        value="{{ $pen->id }}">
                                    <label for="{{ $pen->nama_pendidikan }}2"
                                        class="custom-control-label">{{ $pen->nama_pendidikan }}</label>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="jenjang3">
                                <label>Pendidikan</label>
                                <?php foreach ($pendidikan3 as $pen) { ?>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input custom-control-input-primary" type="radio"
                                        id="{{ $pen->nama_pendidikan }}3" name="pendidikan"
                                        value="{{ $pen->id }}">
                                    <label for="{{ $pen->nama_pendidikan }}3"
                                        class="custom-control-label">{{ $pen->nama_pendidikan }}</label>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="jenjang4">
                                <label>Pendidikan</label>
                                <?php foreach ($pendidikan4 as $pen) { ?>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input custom-control-input-primary" type="radio"
                                        id="{{ $pen->nama_pendidikan }}4" name="pendidikan"
                                        value="{{ $pen->id }}">
                                    <label for="{{ $pen->nama_pendidikan }}4"
                                        class="custom-control-label">{{ $pen->nama_pendidikan }}</label>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="jenjang5">
                                <label>Pendidikan</label>
                                <?php foreach ($pendidikan5 as $pen) { ?>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input custom-control-input-primary" type="radio"
                                        id="{{ $pen->nama_pendidikan }}5" name="pendidikan"
                                        value="{{ $pen->id }}">
                                    <label for="{{ $pen->nama_pendidikan }}5"
                                        class="custom-control-label">{{ $pen->nama_pendidikan }}</label>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="jenjang6">
                                <label>Pendidikan</label>
                                <?php foreach ($pendidikan6 as $pen) { ?>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input custom-control-input-primary" type="radio"
                                        id="{{ $pen->nama_pendidikan }}6" name="pendidikan"
                                        value="{{ $pen->id }}">
                                    <label for="{{ $pen->nama_pendidikan }}6"
                                        class="custom-control-label">{{ $pen->nama_pendidikan }}</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    {{-- Pengalaman --}}
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
            <div class="input-footer py-3 mx-auto">
                <button class="btn btn-primary" type="submit">Tambah Jabatan Kerja</button>
            </div>
            </form>
            </form>
        </div>
    </div>
</div>
