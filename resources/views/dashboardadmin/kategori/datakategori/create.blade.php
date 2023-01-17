<div class="row">
    {{-- <ul id="validasi"></ul> --}}
    <div class="col-md-12">
        <div class="mb-3">
            <label
                @error('kategori')
                class="text-danger "
            @enderror
                class="form-label">Kategori
                @error('kategori')
                    {{ $message }}
                @enderror
            </label>
            <input type="text" id="kategori" name="kategori" class="form-control"
                placeholder="Masukan Kategori">
        </div>
        {{-- <ul id="validasi"></ul> --}}
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary waves-effect"
        data-bs-dismiss="modal">Kembali</button>
    <button class="btn btn-info waves-effect waves-light save_data" onclick="store()" >Tambah
        Kategori</button>
</div>