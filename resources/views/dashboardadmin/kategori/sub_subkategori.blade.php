<!DOCTYPE html>
<html lang="en">

<!-- Head Star -->

@include('layoutsadmin.head')

<!-- End Head -->

<body>

    <div class="main-wrapper">

        <!-- Navbar Star -->

        @include('layoutsadmin.navbar')

        <!-- End Navbar -->

        <!-- Star Sidebar -->

        @include('layoutsadmin.sidebar')

        <!-- End sidebar -->


        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Data Kategori / Sub-SubKategori</h3>
                            {{-- <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Kategori</a></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>

                <div class="card-header">
                    <button type="button" class="btn btn-info waves-effect waves-light mt-1" data-bs-toggle="modal"
                        data-bs-target="#modal-sub_subkategori">Tambah Kategori</button>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="datatable table table-stripped" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Kategori</th>
                                                <th>Sub-Kategori</th>
                                                <th>Sub-SubKategori</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        {{-- <tbody>
                                            @foreach ($data as $data)
                                                <tr>
                                                    <td scope="row">{{ $loop->iteration }}</td>
                                                    <td>{{ $data->kategori }}</td>
                                                    <td><a data-bs-toggle="modal"
                                                            data-bs-target="#edit-kategori{{ $data->id }}"
                                                            class="btn btn-sm  btn-white text-success me-2"><i
                                                                class="far fa-edit me-1"></i> Edit</a>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-sm btn-white text-danger me-2"><i
                                                                class="far fa-trash-altme-1"></i>Hapus</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody> --}}
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-sub_subkategori" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Kategori</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form action="/kategoripost" method="POST">
                        @csrf
                        <div class="row">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="field-3" class="form-label">Kategori
                                            :</label>
                                        <select id="kategori" class="form-control" name="kategori"
                                            aria-label="Default select example">h
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="field-3" class="form-label">Kategori
                                                :</label>
                                            <select id="kategori" class="form-control" name="kategori"
                                                aria-label="Default select example">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="field-3" class="form-label">Kategori
                                                :</label>
                                            <input type="text" id="kategori" name="kategori" class="form-control"
                                                id="field-3" placeholder="Masukan Kategori">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect"
                                        data-bs-dismiss="modal">Kembali</button>
                                    <button class="btn btn-info waves-effect waves-light">Tambah
                                        Kategori</button>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Star Script -->

    @include('layoutsadmin.script')

    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
    </script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

    <!-- End Script -->

</body>

</html>
