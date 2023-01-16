<div id="edit-kategori" class="modal fade"
        tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Kategori</h4>
                    <button type="button" class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form action="/editkategoripost/{{ $data->id }}"
                        method="POST">
                        @csrf
                        
                        <div class="modal-footer">
                            <button type="button"
                                class="btn btn-secondary waves-effect"
                                data-bs-dismiss="modal">Kembali</button>
                            <button
                                class="btn btn-info waves-effect waves-light">Edit
                                Kategori</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>