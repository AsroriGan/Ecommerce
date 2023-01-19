<form id="postmerk" action="{{url('storemerek')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <label for="field-3" class="form-label">Merek
                    :</label>
                <input type="text" id="nama_merek" name="nama_merek" class="form-control" id="field-3"
                    placeholder="Masukan Nama Merek">
            </div>
            <div class="mb-3">
                <label for="field-3" class="form-label">Foto
                    :</label>
                <input type="file" id="foto_merek" name="foto_merek" class="form-control" id="field-3">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Kembali</button>
        <button type="button" class="btn btn-info waves-effect waves-light" onclick="insertdata()">Tambah Merek</button>
    </div>
</form>
