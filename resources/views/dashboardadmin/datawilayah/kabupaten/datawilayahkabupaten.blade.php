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
                                    <h3 class="page-title">Data wilayah / Kabupaten</h3>
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
                                                <button href="#" class="btn" onclick="Createkabupaten()"><i
                                                        data-feather="plus-circle"></i> Tambah data baru</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="modalkabupaten" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true" style="display:none;">
                    <div class="modal-dialog">
                        <div class="modal-content" id="modalcreate">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive" id="viewkabupaten">

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
        //View Data Kabupaten
        $(document).ready(function() {
            viewkabupaten()
        })

        function viewkabupaten() {
            $.get("{{ url('viewkabupaten') }}", {}, function(data, status) {
                $("#viewkabupaten").html(data);
            });
        }

        // Halaman Create Kabupaten
        function Createkabupaten() {
            $.get("{{ url('createkabupaten') }}", {}, function(data, status) {
                $("#modalcreate").html(data);
                $("#modalkabupaten").modal('show');
            });
        }

        // Proses Create Data Kabupaten
        function storekabupaten() {
            var provinsi = $("#provinsi").val();
            var kabupaten = $("#kabupaten").val();
            $.ajax({
                type: "get",
                url: "{{ url('insertkabupaten') }}",
                data: "provinsi=" + provinsi + "&kabupaten=" + kabupaten,
                success: function(data) {
                    $(".btn-close").click();
                    toastr.success("Data Berhasil Di Hapus", "Success")
                    viewkabupaten()
                },
                error: function(e){
                    let msg = e.responseJSON.errors
                    if (msg.provinsi) {
                        $('#kabupaten').removeClass('is-invalid');
                        $('#provinsi').addClass('is-invalid');
                        $('#msg-provinsi').text(msg.provinsi[0]);
                    } else {
                        $('#provinsi').removeClass('is-invalid');
                        $('#kabupaten').addClass('is-invalid');
                        $('#msg-kabupaten').text(msg.kabupaten[0]);
                    }
                }
            });
        }

        // Halaman Edit Kabupaten
        function ShowKabupaten(id) {
            $.get("{{ url('ShowKabupaten') }}/" + id, {}, function(data, status) {
                $("#modalcreate").html(data);
                $("#modalkabupaten").modal('show');
            });
        }

        // Halaman Proses Edit SubKategori
        function editkabupaten(id) {
            var provinsi = $("#provinsi").val();
            var kabupaten = $("#kabupaten").val();
            $.ajax({
                type: "get",
                url: "{{ url('editkabupaten') }}/" + id,
                data: "provinsi=" + provinsi + "&kabupaten=" + kabupaten,
                success: function(data) {
                    $(".btn-close").click();
                    toastr.success("Data Berhasil Di Edit", "Success")
                    viewkabupaten()
                }
            });
        }

        function destroykabupaten(id) {
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
                                url: "{{ url('deletekabupaten') }}/" + id,
                                success: function() {
                                    $(".btn-close").click();
                                    toastr.success("Data Berhasil Di Hapus", "Success")
                                    viewkabupaten()
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
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });

        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
    </script>
    <!-- End Scrip -->

</body>

</html>
