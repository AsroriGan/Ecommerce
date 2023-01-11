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
                <div class="row">
                    <div class="col-6">
                        <div class="page-header">
                            <div class="row">
                                <div class="col">
                                    <h3 class="page-title">Data Kategori / Sub->SubKategori</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card invoices-tabs-card">
                            <div class="card-body card-body pt-0 pb-0">
                                <div class="invoices-main-tabs border-0 pb-0">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12 col-md-12">
                                            <div
                                                class="invoices-settings-btn
                                    invoices-settings-btn-one">
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#modal-sub_subkategori">
                                                    <i data-feather="plus-circle"></i>
                                                    Tambah Item
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                                <th>SubKategori</th>
                                                <th>Sub-SubKategori</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($_subsubkategori as $row)
                                                <tr>
                                                    {{-- <td scope="row">{{ $loop->iteration }}</td> --}}
                                                    <td>{{ $row->datakategori->kategori }}</td>
                                                    <td>{{ $row->datasubkategori->subkategori }}</td>
                                                    <td>{{ $row->kategori }}</td>

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
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-sub_subkategori" class="modal fade" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel" aria-hidden="true" style="display:none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Tambah Sub->SubKategori</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="/sub_subkategoripost" method="POST">
                                @csrf
                                <div class="modal-body p-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="field-1" class="form-label">Kategori</label>
                                                <select class="form-select" name="kategori">
                                                    <option>Pilih Kategori</option>
                                                    @foreach ($kategori as $row)
                                                        <option value="{{ $row->id }}">{{ $row->kategori }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="field-1" class="form-label">Sub-Kategori</label>
                                                <select class="form-select" name="sub_subkategori">
                                                    <option>Pilih Sub-Kategori</option>
                                                    @foreach ($subkategori as $row)
                                                        <option value="{{ $row->id }}">{{ $row->subkategori }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="field-1" class="form-label">Sub->SubKategori</label>
                                                <input type="text" name="sub_kategori" class="form-control"
                                                    id="field-1" placeholder="Masukkan Sub SubKategori">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect"
                                        data-bs-dismiss="modal">Kembali</button>
                                    <button type="submit" class="btn btn-info waves-effect waves-light">Tambah</button>
                                </div>
                            </form>
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