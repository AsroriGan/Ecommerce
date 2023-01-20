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
                                                <button href="#" class="btn"><i data-feather="plus-circle"
                                                        onclick="modalkecamatan()"></i>Tambah data baru </button>
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
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Tambah Kecamatan</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div id="halcreatekecamatan" class="p-4">

                                </div>
                            </div>
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

    {{-- <div id="con-close-modal{{ $row->id }}" class="modal fade"
        tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="display:none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Kecamatan</h4>
                    <button type="button" class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form action="/editkecamatan/{{$row->id}}" method="POST">
                    @csrf
                    <div class="modal-body p-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="field-1"
                                        class="form-label">Provinsi</label>
                                    <select class="form-select"
                                        name="provinsi">
                                        <option
                                            value="{{ $row->provinsi }}">
                                            {{ $row->kprovinsi->provinsi }}
                                        </option>
                                        @foreach ($provinsi as $prov)
                                            <option
                                                value="{{ $prov->id }}">
                                                {{ $prov->provinsi }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="field-1"
                                        class="form-label">Kabupaten</label>
                                    <select class="form-select"
                                        name="provinsi">
                                        <option
                                            value="{{ $row->kabupaten }}">
                                            {{ $row->kkabupaten->kabupaten }}
                                        </option>
                                        @foreach ($kabupaten as $kab)
                                            <option
                                                value="{{ $kab->id }}">
                                                {{ $kab->kabupaten }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="field-1"
                                        class="form-label">Kecamatan</label>
                                    <input type="text" name="kecamatan"
                                        class="form-control"
                                        id="field-1"
                                        placeholder="{{ $row->kecamatan }}"
                                        value="{{ $row->kecamatan }}">
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button"
                                class="btn btn-secondary waves-effect"
                                data-bs-dismiss="modal">Close</button>
                            <button type="submit"
                                class="btn btn-info waves-effect waves-light">Save
                                changes</button>
                        </div>
                </form>
            </div>
        </div>
    </div> --}}

    <!-- Scrip Star -->

    @include('layoutsadmin.script')

    <script>
        // View Data Kecamatan
        $(document).ready(function() {
            viewkecamatan()
        })

        function viewkecamatan() {
            $.get("{{ url('viewkecamatan') }}", {}, function(data, status) {
                $("#viewkecamatan").html(data);
            });
        }

        // Halaman Create Data Kecamatan
        function modalkecamatan() {
            alert("P");
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
                    let error_log = error.responseJSON.errors;
                    if (error.status == 422) {
                        $('#provinsi').addClass('is-invalid');
                        $('#kabupaten').addClass('is-invalid');
                        $('#kecamatan').addClass('is-invalid');
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

    <script>
        $(".delete").click(function() {
            var nama = $(this).attr('data-nama');
            var id = $(this).attr('data-id');

        })
    </script>

    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });

        @if (Session::has('error'))
            toastr.success("{{ Session::get('error') }}")
        @endif
    </script>
    <!-- End Scrip -->

</body>

</html>
