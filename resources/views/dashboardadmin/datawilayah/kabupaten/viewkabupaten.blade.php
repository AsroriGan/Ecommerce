<table id="table" class="datatable table table-stripped">
    <thead>
        <tr>
            <th>N0 .</th>
            <th>Provinsi</th>
            <th>Kabupaten / Kota</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @php
            $no = 1;
        @endphp
        @foreach ($kabupaten as $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->rprovinsi->provinsi }}</td>
                <td>{{ $row->kabupaten }}</td>
                <td>
                    <button href="javascript:void(0);" class="btn btn-sm  btn-white text-success me-2" onclick="ShowKabupaten({{ $row->id }})"><i class="far fa-edit me-1"></i>Edit</button>
                    <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger me-2 delete" onclick="destroykabupaten({{ $row->id }})"><i class="far fa-trash-alt me-1"></i>Delete</a>
                </td>
            </tr> 
        @endforeach
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });

    @if (Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
    @endif
</script>