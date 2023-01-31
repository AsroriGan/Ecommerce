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

                    <button class="btn btn-sm btn-white text-danger me-2" onclick="destroy({{ $data->id }})"><i class="far fa-trash-alt me-1"></i>Hapus</button>

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


</script>