<table class="datatable table table-stripped" id="myTable">
    <thead>
        <tr>
            <th>No.</th>
            <th>Kategori</th>
            <th>SubKategori</th>
            <th>Sub-SubKategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    @foreach ($datap as $row)
        <tbody>
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
                <td>{{ $row->datakategori->kategori }}</td>
                <td>{{ $row->datasubkategori->sub_kategori }}</td>
                <td>{{ $row->sub_subkategori }}</td>

                <td>
                    <button class="btn btn-sm  btn-white text-success me-2" onclick="showSub_Subkategori({{ $row->id }})"><i class="far fa-edit me-1"></i> Edit</button>
                    <button class="btn btn-sm btn-white text-danger me-2" onclick="destroySub_Subkategori({{ $row->id }})"><i class="far fa-trash-altme-1"></i>Hapus</button>
                </td>
            </tr>
        </tbody>
    @endforeach
</table>

<script>
    @if (Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
    @endif

    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
