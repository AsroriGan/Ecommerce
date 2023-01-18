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
                <td>{{ $datasub->idkategoris->kategori }}</td>
                <td>{{ $datasub->sub_kategori }}</td>

                <td><a data-bs-toggle="modal" data-bs-target="#edit-subkategori{{ $datasub->id }}"
                        class="btn btn-sm  btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a>
                    <a href="javascript:void(0);" id="deletesubkategori" data-id="{{ $datasub->id }}"
                        data-sub_kategori="{{ $datasub->sub_kategori }}"
                        class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Hapus</a>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>
