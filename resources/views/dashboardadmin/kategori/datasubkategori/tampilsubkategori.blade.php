<table class="datatable table table-stripped" id="myTable">
    <thead>
        <tr>
            <th>No.</th>
            <th>Kategori</th>
            <th>Sub</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datas as $datasub)
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
                <td>{{ $datasub->kategori }}</td>
                <td>{{ $datasub->sub_kategori }}</td>

                <td> <button class="btn btn-sm  btn-white text-success me-2" onclick="showSubkategori({{ $datasub->id }})"><i
                            class="far fa-edit me-1"></i> Edit</button>

                    <button class="btn btn-sm btn-white text-danger me-2" onclick="#"><i
                            class="far fa-trash-alt me-1"></i>Hapus</button>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>

<script>
    @if (Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
    @endif

    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
