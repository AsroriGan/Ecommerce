<div class="row">
    <div class="col-md-12">
        <div class="mb-3">
            <label for="field-1" class="form-label">Provinsi</label>
            <select class="form-select" id="provinsi" name="provinsi">
                <option disabled selected>Pilih Provinsi</option>
                @foreach ($provinsi as $row)
                    <option value="{{ $row->id }}">{{ $row->provinsi }}
                    </option>
                @endforeach
            </select>
            <div class="invalid-feedback">
                Provinsi Harus Di Isi
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="mb-3">
            <label for="field-1" class="form-label">Kabupaten</label>
            <input type="text" id="kabupaten" name="kabupaten" class="form-control"
                 placeholder="Masukkan kabupaten">
                 <div class="invalid-feedback">
                    Kabupaten Harus Di Isi
                </div>
        </div>
    </div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary waves-effect"
    data-bs-dismiss="modal">Close</button>
<button type="submit" class="btn btn-info waves-effect waves-light" onclick="storekabupaten()">Save
    changes</button>
</div>