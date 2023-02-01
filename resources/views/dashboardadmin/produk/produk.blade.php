v
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
                        <h3 class="page-title">Produk</h3>
                        {{-- <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Kategori</a></li>
                            </ul> --}}
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
                                                <a href="/addproduk" class="btn">
                                                    <i data-feather="plus-circle"></i>
                                                    Tambah Produk
                                                </a>
                                                {{-- <button type="button" class="btn
                                                btn-success waves-effect waves-light
                                                mt-1" data-bs-toggle="modal"
                                                data-bs-target="#con-close-modal">Responsive
                                                Modal</button> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- <div class="card-header">
                    <a type="button" class="btn btn-info waves-effect waves-light mt-1" href="tambahproduct">Tambah Produk</a>
                </div> --}}

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="datatable table table-stripped" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Foto</th>
                                                <th>Nama Produk</th>
                                                <th>Harga</th>
                                                <th>Diskon</th>
                                                <!-- <th>Stock</th> -->
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $data)
                                                @php
                                                    $getfoto = explode(',', $data->galeri_produk);
                                                    $fotoproduk = $getfoto[0];
                                                @endphp
                                                <tr>
                                                    <td scope="row">{{ $loop->iteration }}</td>
                                                    <td><img src="{{ asset('fotoproduk/' . $fotoproduk) }}" alt=""
                                                            width="100px"    height="100px"></td>
                                                    <td>{{ $data->nama_produk }}</td>
                                                    <td><?php
                                                    if ($data->diskon == null) {
                                                        echo 'Rp.' . $data->harga_asliproduk;
                                                    } else {
                                                        echo 'Rp.' . $data->harga_diskonproduk;
                                                    }
                                                    ?></td>
                                                    <td>{{ $data->diskon }}%</td>
                                                    <!-- <td>{{ $data->stok_produk }}</td> -->
                                                    <td>{{ $data->status }}</td>
                                                    <td><a class="btn btn-sm  btn-white text-success me-2"
                                                            href="/variant/{{ $data->id }}"><i
                                                                class="far fa-edit me-1"></i>Variant</a>
                                                        <a class="btn btn-sm  btn-white text-success me-2"
                                                            href="/view_produk/{{ $data->id }}"><i
                                                                class="far fa-edit me-1"></i> Edit</a>
                                                        <a class="btn btn-sm btn-white text-danger me-2 delete"
                                                            data-id="{{ $data->id }}"
                                                            data-nama="{{ $data->nama_produk }}"><i
                                                                class="far fa-trash-altme-1"></i>Hapus</a>
                                                    </td>


                                                    <div id="edit-kategori{{ $data->id }}" class="modal fade"
                                                        tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                                        aria-hidden="true" style="display: none;">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Edit Kategori</h4>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body p-4">
                                                                    <form
                                                                        action="/editkategoripost/{{ $data->id }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="mb-3">
                                                                                    <label for="field-3"
                                                                                        class="form-label">Kategori
                                                                                        :</label>
                                                                                    <input type="text" id="kategori"
                                                                                        name="kategori"
                                                                                        class="form-control"
                                                                                        value="{{ $data->kategori }}"
                                                                                        id="field-3"
                                                                                        placeholder="Masukan Kategori">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary waves-effect"
                                                                                data-bs-dismiss="modal">Kembali</button>
                                                                            <button
                                                                                class="btn btn-info waves-effect waves-light">Edit
                                                                                Kategori</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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



    <!-- Star Script -->

    @include('layoutsadmin.script')

    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
    </script>
    <script>
        $(".delete").click(function() {
            var nama = $(this).attr('data-nama');
            var id = $(this).attr('data-id');
            Swal.fire({
                title: "Apa kamu yakin?",
                text: "Akan menghapus data ini!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!",
                confirmButtonClass: "btn btn-primary",
                cancelButtonClass: "btn btn-danger ml-1",
                cancelButtonText: "Batal",
                buttonsStyling: !1
            }).then(function(t) {
                if (t.value) {
                    window.location = "/delete_produk/" + id;
                    Swal.fire({
                        type: "success",
                        title: "Hapus!",
                        text: "Anda berhasil menghapus data ini.",
                        confirmButtonClass: "btn btn-success"
                    })
                } else {
                    Swal.fire({
                        title: "Batal",
                        text: "Anda batal menghapus data ini :)",
                        type: "error",
                        confirmButtonClass: "btn btn-success"
                    })
                }
            })
        })
    </script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

    <!-- End Script -->

</body>

</html>
