<div class="row">
    <div class="col-md-12">
        <div class="mb-3">
            <label for="field-3" class="form-label">Kategori :</label>
            <input type="text" name="kategori" id="kategori"
                class="form-control"
                value="{{ $data->kategori }}"
                placeholder="Masukan Kategori">
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button"
        class="btn btn-secondary waves-effect"
        data-bs-dismiss="modal">Kembali</button>
    <button
        class="btn btn-info waves-effect waves-light" onclick="update({{ $data->id }})" >Edit
        Kategori</button>
</div>