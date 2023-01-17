<table class="datatable table table-stripped" id="myTable">
    <thead>
        <tr>
            <th>No.</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $data)
            <tr>
                <td>{{ $data->id}}</td>
                <td>{{ $data->kategori }}</td>

                <td><a data-bs-toggle="modal"
                        data-bs-target="#edit-kategori{{ $data->id }}"
                        class="btn btn-sm  btn-white text-success me-2"><i
                            class="far fa-edit me-1"></i> Edit</a>

                    <a class="btn btn-sm btn-white text-danger me-2 delete"
                        data-kategori="{{ $data->kategori }}"
                        data-id="{{ $data->id }}"><i
                            class="far fa-trash-alt me-1"></i>Hapus</a>

                </td>


                <div id="edit-kategori{{ $data->id }}" class="modal fade"
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
                                <form action="/editkategoripost"
                                    method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="field-3"
                                                    class="form-label">Kategori
                                                    :</label>
                                                <input type="text" name="kategori" id="kategori"
                                                    class="form-control kategori"
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
                                            class="btn btn-info waves-effect waves-light" >Edit
                                            Kategori</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
        @endforeach
    </tbody>
</table>


<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>

<script>
    $('.delete').click(function() {
        var kategori = $(this).attr('data-kategori');
        var id = $(this).attr('data-id');
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
            confirmButtonClass: "btn btn-primary",
            cancelButtonClass: "btn btn-danger ml-1",
            buttonsStyling: !1
        }).then(function(t) {
            if (t.value) {
                window.location = "/deletekategori/" + id;
                Swal.fire({
                    type: "success",
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    confirmButtonClass: "btn btn-success"
                })
            } else {
                Swal.fire({
                    title: "Cancelled",
                    text: "Your imaginary file is safe :)",
                    type: "error",
                    confirmButtonClass: "btn btn-success"
                })
            }
        })
    })
</script>
