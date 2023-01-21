<!DOCTYPE html>
<html lang="en">
@include('layoutsadmin.head')

<body class="nk-body bg-lighter npc-default has-sidebar no-touch nk-nio-theme">

    <div class="main-wrapper">

        <!-- navbar Star -->

        @include('layoutsadmin.navbar')

        <!-- End Navbar -->


        <!-- Sidebar Star -->

        @include('layoutsadmin.sidebar')

        <!-- End Sidebar -->


        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-6">
                        <div class="page-header">
                            <div class="row">
                                <div class="col">
                                    <h3 class="page-title">Data wilayah / Kecamatan</h3>
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
                                                <button href="#" class="btn" onclick="modalkecamatan()"><i
                                                        data-feather="plus-circle"></i>Tambah data baru </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="modalkecamatan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true" style="display:none;">
                    <div class="modal-dialog">
                        <div class="modal-content" id="halcreatekecamatan">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            {{-- <div class="card-header">
                                <h4 class="card-title">Default Datatable</h4>
                            </div> --}}
                            <div class="card-body">
                                <div class="table-responsive" id="viewkecamatan">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scrip Star -->
    @include('layoutsadmin.script')

    <script>
        // View Data Kecamatan
        $(document).ready(function() {
            // alert();
            viewkecamatan()
        })

        function viewkecamatan() {
            $.get("{{ url('viewkecamatan') }}", {}, function(data, status) {
                $("#viewkecamatan").html(data);
            });
        }

        // Halaman Create Data Kecamatan
        function modalkecamatan() {
            $.get("{{ url('createkecamatan') }}", {}, function(data, status) {
                $("#halcreatekecamatan").html(data);
                $("#modalkecamatan").modal('show');
            });
        }

        // Proses Create Data Kecamatan
        function storekecamatan() {
            var provinsi = $("#provinsi").val();
            var kabupaten = $("#kabupaten").val();
            var kecamatan = $("#kecamatan").val();
            $.ajax({
                type: "get",
                url: "{{ url('insertkecamatan') }}",
                data: "provinsi=" + provinsi + "&kabupaten=" + kabupaten + "&kecamatan=" + kecamatan,
                success: function(data) {
                    $(".btn-close").click();
                    toastr.success("Data Berhasil Di Tambah", "Success")
                    viewkecamatan()
                },
                error: function(error) {
                    console.log(error.responseJSON);
                    let msg = error.responseJSON.errors;
                    if (error.status == 422) {
                        if (msg.provinsi) {
                            $('#provinsi').addClass('is-invalid');
                            $('#kabupaten').removeClass('is-invalid');
                            $('#kecamatan').removeClass('is-invalid');
                        } else if (msg.kabupaten) {
                            $('#provinsi').removeClass('is-invalid');
                            $('#kabupaten').addClass('is-invalid');
                            $('#kecamatan').removeClass('is-invalid');
                        } else {
                            $('#provinsi').removeClass('is-invalid');
                            $('#kabupaten').removeClass('is-invalid');
                            $('#kecamatan').addClass('is-invalid');
                        }
                    }
                }
            });
        }

        // Halaman Create Data Kecamatan
        function Showkecamatan(id) {
            $.get("{{ url('Showkecamatan') }}/" + id, {}, function(data, status) {
                $("#halcreatekecamatan").html(data);
                $("#modalkecamatan").modal('show');
            });
        }

        // Proses Update Data Kecamatan
        function updatekecamatan(id) {
            var provinsi = $("#provinsi").val();
            var kabupaten = $("#kabupaten").val();
            var kecamatan = $("#kecamatan").val();
            $.ajax({
                type: "get",
                url: "{{ url('editkecamatan') }}/" + id,
                data: "provinsi=" + provinsi + "&kabupaten=" + kabupaten + "&kecamatan=" + kecamatan,
                success: function(data) {
                    $(".btn-close").click();
                    toastr.success("Data Berhasil Di Edit", "Success")
                    viewkecamatan()
                }
            });
        }

        // Proses Delete Data Kecamatan
        function Destroykecamatan(id) {
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
                    Swal.fire({
                        type: "success",
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        confirmButtonClass: "btn btn-success"
                    }).then(function(t) {
                        if (t.value) {
                            $.ajax({
                                type: "get",
                                url: "{{ url('deletekecamatan') }}/" + id,
                                success: function() {
                                    $(".btn-close").click();
                                    toastr.success("Data Berhasil Di Hapus", "Success")
                                    viewkecamatan()
                                }
                            });
                        }
                    });
                } else {
                    Swal.fire({
                        title: "Cancelled",
                        text: "Your imaginary file is safe :)",
                        type: "error",
                        confirmButtonClass: "btn btn-success"
                    })
                }
            });
        }
    </script>
    <!-- End Scrip -->
</body>

</html>
