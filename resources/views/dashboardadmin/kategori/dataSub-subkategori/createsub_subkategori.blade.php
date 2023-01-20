<div class="row">
    <div class="col-md-12">
        <div class="mb-3">
            <label for="field-1" class="form-label">Kategori*</label>
            <select class="form-select" name="kategori" id="kategori">
                <option>Pilih Kategori</option>
                @foreach ($datas as $row)
                    <option value="{{ $row->id }}">{{ $row->kategori }}
                    </option>
                @endforeach
            </select>
            <div class="invalid-feedback">
                Kategori Harus Di Isi
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="mb-3">
            <label for="field-1" class="form-label">Sub-Kategori*</label>
            <select class="form-select" name="sub_kategori" id="sub_kategori">
                <option>Pilih Sub-Kategori</option>
                @foreach ($data as $row)
                    <option value="{{ $row->id }}">{{ $row->sub_kategori }}
                    </option>
                @endforeach
            </select>
            <div class="invalid-feedback">
                Sub-Kategori Harus Di Isi
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <label for="">Sub Subkategori*</label>
        <input type="text" id="sub_subkategori" name="sub_subkategori" class="form-control"
            placeholder="Masukkan Sub SubKategori">
            <div class="invalid-feedback">
                Sub-SubKategori Harus Di Isi
            </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary" onclick="storeSub_subKategori()">Save
        changes</button>
</div>
