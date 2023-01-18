<!DOCTYPE html>
<html lang="en">
@include('layoutsadmin.head')

<body class="nk-body bg-lighter npc-default has-sidebar no-touch nk-nio-theme">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"> --}}
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
                                    {{-- <table id="table" class="datatable table table-stripped">
                                        <thead>
                                            <tr>
                                                <th>N0 .</th>
                                                <th>Provinsi</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($data as $row)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $row->provinsi }}</td>
                                                    <td><a href="#" onclick="viewprov({{$row->id}})" class="btn btn-sm btn-white text-success me-2"><i
                                                                class="far fa-edit me-1"></i>Edit</a>
                                                        <a onclick="deleteprov({{$row->id}})" data-provinsi="{{ $row->provinsi }}"
                                                            data-id="{{ $row->id }}" href="javascript:void(0);"
                                                            class="btn btn-sm btn-white text-danger me-2"><i
                                                                class="far fa-trash-alt me-1"></i>Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table> --}}
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
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
        @if (Session::has('error'))
            toastr.success("{{ Session::get('error') }}")
        @endif
    </script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> --}}
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
                    viewdata();
                },
                error: function(error) {
                    console.log(error.responseJSON);
                    let error_log = error.responseJSON.errors;
                    // conole.log(error.responseJSON.errors);
                    if (error.status == 422) {
                        $('#valprovinsi').addClass('is-invalid');
                        $('#feedbackprov').append(error_log.provinsi[0]);
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
                    Swal.fire({
                        type: "success",
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        confirmButtonClass: "btn btn-success"
                    })
                    $.ajax({
                        type: "get",
                        url: "/deleteprovinsi/" + id,
                        // data: "kategori=" + kategori,
                        success: function(data) {
                            viewdata();
                            // toastr.success(data.message);
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
    <script>
        $(".delete").click(function() {
            var nama = $(this).attr('data-provinsi');
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
                    window.location = "/deleteprovinsi/" + id;
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
    <!-- End Scrip -->

</body>

</html>
