<div class="row">
    <div class="col-md-12">
        <div class="mb-3">
            <label for="field-3" class="form-label">Kategori
                :</label>
            <select class="form-control" id="kategori" name="kategori" aria-label="Default select example">
                <option value="{{ $datap->kategori }}" selected>
                    {{ $datap->datakategori->kategori }}
                </option>
                @foreach ($datas as $datas)
                    <option value="{{ $datas->id }}">
                        {{ $datas->kategori }}
                    </option>
                @endforeach
            </select>
            <div class="invalid-feedback">
                Kategori Harus Di Isi
            </div>
        </div>
        <div class="mb-3">
            <label for="field-3" class="form-label">Sub
                Kategori
                :</label>
            <select class="form-control" id="sub_kategori" name="sub_kategori" aria-label="Default select example">
                <option value="{{ $datap->sub_kategori }}" selected>
                    {{ $datap->datasubkategori->sub_kategori }}
                </option>
                @foreach ($data as $data)
                    <option value="{{ $data->id }}">
                        {{ $data->sub_kategori }}
                    </option>
                @endforeach
            </select>
            <div class="invalid-feedback">
                Sub-Kategori Harus Di Isi
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-3">
                <label for="field-1" class="form-label">Sub-SubKategori</label>
                <input type="text" id="sub_subkategori" name="sub_subkategori" class="form-control" id="field-1"
                    value="{{ $datap->sub_subkategori }}">
                    <div class="invalid-feedback">
                        Sub-SubKategori Harus Di Isi
                    </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-info waves-effect" onclick="updatesub_Subkategori({{ $datap->id }})">Edit </button>
    </div>
</div>
