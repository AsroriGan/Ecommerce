<table id="table" class="datatable table table-stripped">
    <thead>
        <tr>
            <th>N0 .</th>
            <th>Provinsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @php
            $no = 1;
        @endphp
        @foreach ($data as $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->provinsi }}</td>
                <td><a href="#" onclick="viewprov({{$row->id}})" class="btn btn-sm btn-white text-success me-2"><i
                            class="far fa-edit me-1"></i>Edit</a>
                    <a onclick="deleteprov({{$row->id}})" data-provinsi="{{ $row->provinsi }}"
                        data-id="{{ $row->id }}" href="#"
                        class="btn btn-sm btn-white text-danger me-2"><i
                            class="far fa-trash-alt me-1"></i>Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>
