<div class="modal-header">
    <h4 class="modal-title">Edit Merek</h4>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body p-4">
    <form id="editform" action="/editmerekpost/{{ $data->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="field-3" class="form-label">Merek
                        :</label>
                    <input type="text" id="nama_merek" name="nama_merek" class="form-control"
                        value="{{ $data->nama_merek }}" id="field-3"
                        placeholder="Masukan Nama Merek">
                </div>
                <div class="mb-3">
                    <label for="field-3" class="form-label">Foto
                        :</label><br />
                    <img src="{{ asset('foto/' . $data->foto_merek) }}" style="height: 50px;">
                    <input type="file" id="foto_merek" name="foto_merek" class="form-control"
                        id="field-3">
                    <i style="float: left; font-size: 11px; color:red;">Abaikan jika tidak merubah
                        foto</i>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary waves-effect"
                data-bs-dismiss="modal">Kembali</button>
            <button type="button" class="btn btn-info waves-effect waves-light" onclick="editpostmerk({{$data->id}})">Edit
                Merek</button>
        </div>
    </form>
</div>
