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
                <td scope="row">{{ $loop->iteration }}</td>
                <td>{{ $data->kategori }}</td>

                <td><button class="btn btn-sm  btn-white text-success me-2" onclick="show({{ $data->id }})"><i
                            class="far fa-edit me-1"></i> Edit</button>

                    <button class="btn btn-sm btn-white text-danger me-2 delete" onclick="destroy({{ $data->id }})"><i
                            class="far fa-trash-alt me-1"></i>Hapus</button>

                </td>
            </tr>
        @endforeach
    </tbody>
</table> 

<script>

    // Toaster
    @if (Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
    @endif

    // Data Table
    $(document).ready(function() {
        $('#myTable').DataTable();
    });

    // $('.delete').click(function() {
    //     var kategori = $(this).attr('data-kategori');
    //     var id = $(this).attr('data-id');
    //     Swal.fire({
    //         title: "Are you sure?",
    //         text: "You won't be able to revert this!",
    //         type: "warning",
    //         showCancelButton: !0,
    //         confirmButtonColor: "#3085d6",
    //         cancelButtonColor: "#d33",
    //         confirmButtonText: "Yes, delete it!",
    //         confirmButtonClass: "btn btn-primary",
    //         cancelButtonClass: "btn btn-danger ml-1",
    //         buttonsStyling: !1
    //     }).then(function(t) {
    //         if (t.value) {
    //             window.location = "/deletekategori/" + id;
    //             Swal.fire({
    //                 type: "success",
    //                 title: "Deleted!",
    //                 text: "Your file has been deleted.",
    //                 confirmButtonClass: "btn btn-success"
    //             })
    //         } else {
    //             Swal.fire({
    //                 title: "Cancelled",
    //                 text: "Your imaginary file is safe :)",
    //                 type: "error",
    //                 confirmButtonClass: "btn btn-success"
    //             })
    //         }
    //     })
    // })
</script>