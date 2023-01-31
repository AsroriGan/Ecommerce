<div class="modal-header">
    <h4 class="modal-title">Tambah Merek</h4>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body p-4">
    <div class="row">
        <form id="postmerk" action="{{ url('storemerek') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="field-3" class="form-label">Merek
                        :</label>
                    <input type="text" id="nama_merek" name="nama_merek" class="form-control" id="field-3"
                        placeholder="Masukan Nama Merek">
                    <div class="invalid-feedback" id="msg_merek">

                    </div>
                </div>
                <div class="mb-3">
                    <label for="field-3" class="form-label">Foto
                        :</label>
                    <input type="file" id="foto_merek" name="foto_merek" class="form-control" id="field-3">
                    <div class="invalid-feedback" id="msg_foto"></div>
                </div>
            </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Kembali</button>
        <button type="button" class="btn btn-info waves-effect waves-light" onclick="insertdata()">Tambah
            </button>
        </form>
    </div>
</div>
