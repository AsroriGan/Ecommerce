<div class="modal-header">
    <h4 class="modal-title">Tambah provinsi</h4>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body p-4">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <label for="field-1" class="form-label">Provinsi</label>
                <input type="text" name="provinsi" class="form-control" id="valprovinsi"
                    placeholder="Masukkan provinsi">
                <div class="invalid-feedback" id="feedbackprov">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Kembali</button>
    <button type="submit" class="btn btn-info waves-effect waves-light" onclick="store()">Tambah
        </button>
</div>
