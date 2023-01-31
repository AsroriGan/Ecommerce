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
                                    <h3 class="page-title">Data Kategori / SubKategori</h3>
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
                                                <button href="#" class="btn" onclick="modalsubkategori()">
                                                    <i data-feather="plus-circle"></i>
                                                    Tambah Data
                                                </button>
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
                                <div class="table-responsive" id="tampilsubkategori">


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Modal Tambah -->

    <div id="modalsubkategori" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah SubKategori</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="createsubkategori">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->

    <div id="editsubkategori" class="modal fade"
        tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit SubKategori</h4>
                    <button type="button" class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div id="haledit">

                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Star Script -->

    @include('layoutsadmin.script')

    <script>
        //Tampilkan Data SubKategori
        $(document).ready(function() {
            tampilsubkategori()
        })

        function tampilsubkategori() {
            $.get("{{ url('tampilsubkategori') }}", {}, function(data, status) {
                $("#tampilsubkategori").html(data);
            });
        }

        // Halaman Create SubKategori
        function modalsubkategori() {
            $.get("{{ url('createsubkategori') }}", {}, function(data, status) {
                $("#createsubkategori").html(data);
                $("#modalsubkategori").modal('show');
            });
        }

        // Proses Create Data SubKategori
        function storesubKategori() {
            var kategori = $("#kategori").val();
            var sub_kategori = $("#sub_kategori").val();
            $.ajax({
                type: "get",
                url: "{{ url('storesubKategori') }}",
                data: "sub_kategori=" + sub_kategori + "&kategori=" + kategori,
                success: function(data) {
                    $(".btn-close").click();
                    toastr.success("Data Berhasil Ditambahkan", "Success");
                    tampilsubkategori();
                },
                error: function(e) {
                    let msg = e.responseJSON.errors
                    if (msg.kategori) {
                        $('#sub_kategori').removeClass('is-invalid');
                        $('#kategori').addClass('is-invalid');
                        $('#msg-kategori').text(msg.kategori[0]);
                    } else {
                        $('#kategori').removeClass('is-invalid');
                        $('#sub_kategori').addClass('is-invalid');
                        $('#msg-sub_kategori').text(msg.sub_kategori[0]);
                    }
                }
            });
        }

        // Halaman Edit Show Sub-Kategori
        function showSubkategori(id) {
            $.get("{{ url('showSubkategori') }}/" + id, {}, function(data, status) {
                $("#haledit").html(data);
                $("#editsubkategori").modal('show');
            });
        }

        // Halaman Proses Edit SubKategori
        function updatesubkategori(id) {
            var kategori = $("#kategori").val();
            var sub_kategori = $("#sub_kategori").val();
            $.ajax({
                type: "get",
                url: "{{ url('updatesubkategori') }}/" + id,
                data: "sub_kategori=" + sub_kategori + "&kategori=" + kategori,
                success: function(data) {
                    $(".btn-close").click();
                    toastr.success("Data Berhasil DiEdit", "Success")
                    tampilsubkategori()
                },
                error: function(e) {
                    let msg = e.responseJSON.errors
                    if (msg.kategori) {
                        $('#sub_kategori').removeClass('is-invalid');
                        $('#kategori').addClass('is-invalid');
                        $('#msg-kategori').text(msg.kategori[0]);
                    } else {
                        $('#kategori').removeClass('is-invalid');
                        $('#sub_kategori').addClass('is-invalid');
                        $('#msg-sub_kategori').text(msg.sub_kategori[0]);
                    }
                }
            });
        }

        // Proses Delete Data SubKategori
        function destroySubkategori(id) {
            Swal.fire({
                title: "Apa anda yakin?",
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
                    Swal.fire({
                        type: "success",
                        title: "Hapus!",
                        text: "Anda berhasil menghapus data ini.",
                        confirmButtonClass: "btn btn-success"
                    }).then(function(t) {
                        if (t.value) {
                            $.ajax({
                                type: "get",
                                url: "{{ url('destroySubkategori') }}/" + id,
                                success: function(data) {
                                    if (data.messagerelasi) {
                                        toastr.error(data.messagerelasi,"Error");
                                    } else {
                                        toastr.success('Data Berhasil Dihapus', 'success');
                                        tampilsubkategori();
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
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif

        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

    <!-- End Script -->

</body>

</html>
