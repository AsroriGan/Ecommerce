<table id="table" class="datatable table table-stripped">
    <thead>
        <tr>
            <th>N0 .</th>
            <th>Provinsi</th>
            <th>Kabupaten / Kota</th>
            <th>Kecamatan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @php
            $no = 1;
        @endphp
        @foreach ($kecamatan as $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->kprovinsi->provinsi }}</td>
                <td>{{ $row->kkabupaten->kabupaten }}</td>
                <td>{{ $row->kecamatan }}</td>
                <td><button href="javascript:void(0);"class="btn btn-sm btn-white text-success me-2" onclick="Showkecamatan({{ $row->id }})" ><i class="far fa-edit me-1"></i> Edit</button>
                    <button href="javascript:void(0);" class="btn btn-sm btn-white text-danger me-2 " onclick="Destroykecamatan({{ $row->id }})"><i class="far fa-trash-alt me-1"></i>Delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });

    @if (Session::has('error'))
        toastr.success("{{ Session::get('error') }}")
    @endif
</script>
