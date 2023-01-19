<table class="datatable table table-stripped" id="myTable">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Merek</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $data)
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
                <td>{{ $data->nama_merek }}</td>
                <td><img src="{{ asset('foto/' . $data->foto_merek) }}" style="height:80px;"></td>

                <td>

                    <button class="btn btn-sm  btn-white text-success me-2" data-bs-toggle="modal" data-bs-target="#modaledit"><i class="far fa-edit me-1"></i>
                        Edit</button>
                    <button class="btn btn-sm btn-white text-danger me-2 " onclick=""><i
                            class="far fa-trash-altme-1"></i>Hapus</button>

                </td>

            </tr>
        @endforeach
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
