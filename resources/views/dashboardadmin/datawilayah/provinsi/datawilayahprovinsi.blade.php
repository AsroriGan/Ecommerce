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
                                    <h3 class="page-title">Data wilayah / Provinsi</h3>
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
                                                    data-bs-target="#con-close-modal" onclick="modaltambah()">
                                                    <i data-feather="plus-circle"></i>
                                                    Tambah Data baru
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

                <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel" aria-hidden="true" style="display:none;">
                    <div class="modal-dialog">
                        {{-- <div id="success"></div> --}}
                        <div id="halcreate" class="modal-content">
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
                                <div class="table-responsive" id="viewdata">
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
    {{-- <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
        @if (Session::has('error'))
            toastr.success("{{ Session::get('error') }}")
        @endif
    </script> --}}
    {{-- <script>
        $("#target").click(function() {
            toastr.error("Have fun storming the castle!", "Gae Iki");
        });
    </script> --}}
    <script>
        //view data in table
        $(document).ready(function() {
            viewdata();
        })

        function viewdata() {
            $.get("/viewdataprovinsi", {}, function(data, status) {
                $("#viewdata").html(data);
            });
        }
        // Hal create
        function modaltambah() {
            $.get("/createprovinsi", {}, function(data, status) {
                $("#halcreate").html(data);
                $("#con-close-modal").modal('show');
            });
        }

        // Proses Create provinsi
        function store() {
            let provinsi = $("#valprovinsi").val();
            // console.log(provinsi);
            $.ajax({
                type: "get",
                url: "/insertprovinsi",
                data: "provinsi=" + provinsi,
                success: function(data) {
                    $(".btn-close").click();
                    toastr.success(data.message, data.title);
                    viewdata();
                },
                error: function(error) {
                    console.log(error.responseJSON);
                    let error_log = error.responseJSON.errors;
                    // conole.log(error.responseJSON.errors);
                    if (error.status == 422) {
                        $('#valprovinsi').addClass('is-invalid');
                        $('#feedbackprov').text(error_log.provinsi[0]);
                    }
                }
            });
        }

        //view edit prov
        function viewprov(id) {
            $.get("/provinsiview/" + id, {}, function(data, status) {
                $("#halcreate").html(data);
                $("#con-close-modal").modal('show');
            });
        }

        //upadte prov
        function updateprov(id) {
            let provinsi = $("#valprovinsi").val();
            $.ajax({
                type: "get",
                url: "/editprovinsi/" + id,
                data: "provinsi=" + provinsi,
                success: function(data) {
                    $(".btn-close").click();
                    toastr.success(data.message, data.title);
                    viewdata();
                }
            });
        }

        //delete provinsi
        function deleteprov(id) {
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
                    // alert('p');
                    Swal.fire({
                            type: "success",
                            title: "Deleted!",
                            text: "Your file has been deleted.",
                            confirmButtonClass: "btn btn-success"
                        })
                        .then(function(t) {
                            if (t.value) {
                                $.ajax({
                                    type: "get",
                                    url: "/deleteprovinsi/" + id,
                                    // data: "kategori=" + kategori,
                                    success: function(data) {
                                        if(data.messagerelasi){
                                            toastr.error(data.messagerelasi,"Error");
                                        }else{
                                            toastr.success('Data Berhasil Dihapus','Success' );
                                            viewdata();
                                        }
                                        // console.log(data.messagerelasi);
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
            })
        }
    </script>
    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
        @if (Session::has('error'))
            toastr.success("{{ Session::get('error') }}")
        @endif
    </script>
</body>

</html>
