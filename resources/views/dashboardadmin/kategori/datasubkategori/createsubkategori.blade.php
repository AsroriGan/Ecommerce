<div class="row">
    <div class="col-md-12">
        <div class="mb-3">
            <label for="field-3" class="form-label">Kategori :</label>
            <select id="kategori" class="form-control" name="kategori"
                aria-label="Default select example">
                <option value="" selected>Pilih Kategori </option>
                @foreach ($data as $datas)
                    <option value="{{ $datas->id }}">{{ $datas->kategori }}</option>
                @endforeach
            </select>
            <div class="invalid-feedback" id="msg-kategori">
                Kategori Harus Di isi
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="mb-3">
            <label for="field-3" class="form-label">Sub-Kategori :</label>
            <input type="text" id="sub_kategori" name="sub_kategori" class="form-control" placeholder="Masukan Kategori">
            <div class="invalid-feedback" id="msg-sub_kategori">
                SubKategori Harus Di Isi
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary waves-effect"
        data-bs-dismiss="modal">Kembali</button>
    <button class="btn btn-info waves-effect waves-light" onclick="storesubKategori()">Tambah Kategori</button>
</div>
