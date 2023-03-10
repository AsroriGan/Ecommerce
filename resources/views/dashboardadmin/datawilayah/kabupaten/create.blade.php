<div class="modal-header">
    <h4 class="modal-title">Tambah Kabupaten</h4>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body p-4">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <label for="field-1" class="form-label">Provinsi</label>
                <select class="form-select" id="provinsi" name="provinsi">
                    <option selected value="">Pilih Provinsi</option>
                    @foreach ($provinsi as $row)
                        <option value="{{ $row->id }}">{{ $row->provinsi }}
                        </option>
                    @endforeach
                </select>
                <div class="invalid-feedback"  id="msg-provinsi">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-3">
                <label for="field-1" class="form-label">Kabupaten</label>
                <input type="text" id="kabupaten" name="kabupaten" class="form-control"
                    placeholder="Masukkan kabupaten">
                <div class="invalid-feedback" id="msg-kabupaten">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Kembali</button>
    <button type="submit" class="btn btn-info waves-effect waves-light" onclick="storekabupaten()">Tambah
        </button>
</div>
