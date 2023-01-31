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
                                    <h3 class="page-title">Data Kategori / Kategori</h3>
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
                                                <button class="btn" onclick="modaltambah()"><i
                                                        data-feather="plus-circle"></i>Tambah Data</button>
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
                                <div class="table-responsive" id="tampilkandata">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah -->

    <div id="modalkategori" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div id="success"></div>
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="labelModal">Tambah Kategori</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div id="tampilkandata">

                    </div>
                </div>
                <div class="modal-body" class="p-4">
                    <div id="halcreate">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->

    <div id="editkategori" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Kategori</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" class="p-4">
                    <div id="haledit">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Star Script -->

    @include('layoutsadmin.script')


    <script>
        // Tampilkan Data
        $(document).ready(function() {
            tampilkandata()
        })

        function tampilkandata() {
            $.get("{{ url('tampilkandata') }}", {}, function(data, status) {
                $("#tampilkandata").html(data);
            });
        }

        // Halaman Create
        function modaltambah() {
            $.get("{{ url('create') }}", {}, function(data, status) {
                $("#halcreate").html(data);
                $("#modalkategori").modal('show');
            });
        }

        // Proses Create Data
        function store() {
            var kategori = $("#kategori").val();
            $.ajax({
                type: "get",
                url: "{{ url('store') }}",
                data: "kategori=" + kategori,
                success: function(data) {
                    $(".btn-close").click();
                    toastr.success("Data Berhasil Ditambahkan", "Success")
                    tampilkandata()
                },
                error: function(error) {
                    console.log(error.responseJSON);
                    let error_log = error.responseJSON.errors;
                    if (error.status == 422) {
                        $('#kategori').addClass('is-invalid');
                    }
                }
            });
        }

        // Halaman Edit show
        function show(id) {
            $.get("{{ url('show') }}/" + id, {}, function(data, status) {
                $("#haledit").html(data);
                $("#editkategori").modal('show');
            });
        }

        // Proses Update Data
        function update(id) {
            var kategori = $("#kategori").val();
            $.ajax({
                type: "get",
                url: "{{ url('update') }}/" + id,
                data: "kategori=" + kategori,
                success: function(data) {
                    $(".btn-close").click();
                    toastr.success('Data Berhasil Di upadte', 'success');
                    tampilkandata()
                },
                error: function(error) {
                    console.log(error.responseJSON);
                    let error_log = error.responseJSON.errors;
                    if (error.status == 422) {
                        $('#kategori').addClass('is-invalid');
                    }
                }
            });
        }
        // Proses Delete Data
        function destroy(id) {
            Swal.fire({
                title: "Apa kamu yakin?",
                text: "Akan menghapus data ini!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus",
                confirmButtonClass: "btn btn-primary",
                cancelButtonClass: "btn btn-danger ml-1",
                cancelButtonText: "Batal",
                buttonsStyling: !1
            }).then(function(t) {
                if (t.value) {
                    Swal.fire({
                        type: "success",
                        title: "Hapus!",
                        text: "Anda berhasil menghapus data ini.",
                        confirmButtonClass: "btn btn-success"
                    }).then(function(t) {
                        if (t.value) {
                            $.ajax({
                                type: "get",
                                url: "{{ url('destroy') }}/" + id,
                                // data: "kategori=" + kategori,
                                success: function(data) {
                                    if (data.messagerelasi) {
                                        toastr.error(data.messagerelasi,"Error");
                                    } else {
                                        toastr.success('Data Berhasil Dihapus', 'success');
                                        tampilkandata();
                                    }
                                }
                            });
                        }
                    });
                } else {
                    Swal.fire({
                        title: "Batal",
                        text: "Anda batal menghapus data ini :)",
                        type: "error",
                        confirmButtonClass: "btn btn-success"
                    })
                }
            });
        }
    </script>

    <script>
        // Toaster
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif

        // Data Table
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

    <!-- End Script -->

</body>

</html>
