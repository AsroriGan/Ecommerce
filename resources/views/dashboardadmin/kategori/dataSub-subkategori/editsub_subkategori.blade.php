<div class="row">
    <div class="col-md-12">
        <div class="mb-3">
            <label for="field-3" class="form-label">Kategori
                :</label>
            <select class="form-control" name="kategori" aria-label="Default select example">
                <option value="{{ $datap->kategori }}">
                    {{ $datap->datakategori->kategori }}
                </option>
                @foreach ($datas as $datas)
                    <option value="{{ $datas->id }}">
                        {{ $datas->kategori }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="field-3" class="form-label">Sub
                Kategori
                :</label>
            <select class="form-control" name="sub_kategori" aria-label="Default select example">
                <option value="{{ $datap->sub_kategori }}">
                    {{ $datap->datasubkategori->sub_kategori }}
                </option>
                @foreach ($data as $data)
                    <option value="{{ $data->id }}">
                        {{ $data->sub_kategori }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-12">
            <div class="mb-3">
                <label for="field-1" class="form-label">Sub->SubKategori</label>
                <input type="text" id="sub_subkategori" name="sub_subkategori" class="form-control" id="field-1"
                    value="{{ $datap->sub_subkategori }}">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" onclick="updatesub_Subkategori({{ $datap->id }})">Save
            changes</button>
    </div>
</div>
