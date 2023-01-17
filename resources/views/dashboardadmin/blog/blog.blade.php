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
                                    <h3 class="page-title">Blog</h3>
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
                                                <a href="/tambahblog" class="btn">
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
                                                <th>Judul Blog</th>
                                                <th>Foto Blog</th>
                                                <th>Deskripsi</th>
                                                <th>Foto Kegiatan</th>
                                                <th>Deskripsi Produk</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $blog)
                                                <tr>
                                                    <td scope="row">{{ $loop->iteration }}</td>
                                                    <td>{{ $blog->judul_blog }}</td>
                                                    <td>
                                                        <img src="{{ asset('blog/' . $blog->foto_sampul) }}"
                                                            height="100px" width="100px" alt="">
                                                    </td>
                                                    <td>{!! $blog->deskripsi !!}</td>
                                                    <td>
                                                        @foreach (json_decode($blog->foto_kegiatan) as $foto)
                                                            <img class="mx-1 my-1"
                                                                src="{{ asset('fotokegiatan/' . $foto) }}"
                                                                alt="" width="80px" height="80px">
                                                        @endforeach
                                                    </td>
                                                    <td>{!! $blog->deskripsi_produk !!}</td>
                                                    <td><a href="/editblog/{{ $blog->id }}" class="btn btn-sm  btn-white text-success me-2"><i
                                                                class="far fa-edit me-1"></i> Edit</a>

                                                        <a id="delete" class="btn btn-sm btn-white text-danger me-2"
                                                            data-kategori="{{ $blog->judul_blog }}"
                                                            data-id="{{ $blog->id }}"><i
                                                                class="far fa-trash-alt me-1"></i>Hapus</a>
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

    <!-- Star Script -->

    @include('layoutsadmin.script')

    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
    </script>

    <script>
        $("#delete").click(function() {
            var blog = $(this).attr('data-blog');
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
                    window.location = "/deleteblog/" + id;
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
