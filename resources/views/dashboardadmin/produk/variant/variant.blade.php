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
                        <h3 class="page-title">Variant</h3>
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
                                                <!--  <a href="/tambahvariant" class="btn">
                                                    <i data-feather="plus-circle"></i>
                                                    Tambah Variant Baru
                                                </a> -->
                                                <button type="button"
                                                    class="btn
                                                btn-success waves-effect waves-light
                                                mt-1"
                                                    data-bs-toggle="modal" data-bs-target="#standard-modal"><i
                                                        data-feather="plus-circle"></i> Tambah Variant Baru</button>
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
                                                <th>Warna</th>
                                                <th>Ukuran</th>
                                                <th>Harga</th>
                                                <th>Stok</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $variant)
                                                <tr>
                                                    <td scope="row">{{ $loop->iteration }}</td>
                                                    <td>{{ $variant->warna_produk }}</td>
                                                    <td>{{ $variant->ukuran_produk }}</td>
                                                    <td>{{ $variant->harga_produk }}</td>
                                                    <td>{{ $variant->stok_produk }}</td>
                                                    <td><a class="btn btn-sm  btn-white text-success me-2"
                                                            href="/view_produk/"><i class="far fa-edit me-1"></i>
                                                            Edit</a>
                                                        <a class="btn btn-sm btn-white text-danger me-2 delete"
                                                            data-id="" data-nama=""><i
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

    <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="standard-modalLabel">Tambah Variant</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="px-3" action="/tambahvariant/{{ $produk->id }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="warna" class="form-label">Warna</label>
                            <input class="form-control" type="text" id="warna" required="" name="warna"
                                placeholder="Merah,Kuning">
                        </div>
                        <div class="mb-3">
                            <label for="ukuran" class="form-label">Ukuran</label>
                            <input class="form-control" type="text" id="ukuran" name="ukuran" required=""
                                placeholder="X,XL,S,M">
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">harga</label>
                            <input class="form-control" type="number" required="" name="harga" id="harga"
                                placeholder="20000">
                        </div>
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok</label>
                            <input class="form-control" type="number" required="" name="stok" id="stok"
                                placeholder="10">
                        </div>

                        <div class="mb-3 text-center">
                            <button class="btn btn-primary" type="submit">Simpan</button>
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
        $(".delete").click(function() {
            var nama = $(this).attr('data-nama');
            var id = $(this).attr('data-id');
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
                confirmButtonClass: "btn btn-primary",
                cancelButtonClass: "btn btn-danger ml-1",
                buttonsStyling: !1
            }).then(function(t) {
                if (t.value) {
                    window.location = "/delete_produk/" + id;
                    Swal.fire({
                        type: "success",
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        confirmButtonClass: "btn btn-success"
                    })
                } else {
                    Swal.fire({
                        title: "Cancelled",
                        text: "Your imaginary file is safe :)",
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
