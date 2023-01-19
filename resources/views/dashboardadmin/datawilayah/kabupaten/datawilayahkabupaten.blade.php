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
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Kecamatan</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div id="modalcreate" class="p-4">

                                </div>
                            </div>
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
    {{-- <div id="con-close-modal{{ $row->id }}" class="modal fade"
        tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="display:none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Kabupaten</h4>
                    <button type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/editkabupaten/{{ $row->id }}"
                    method="POST">
                    @csrf
                    <div class="modal-body p-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="field-1"
                                        class="form-label">Provinsi</label>
                                    <select class="form-select" name="provinsi">
                                        <option value="{{ $row->provinsi }}">
                                            {{ $row->rprovinsi->provinsi }}
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
                                    <label class="form-label">Kabupaten</label>
                                    <input type="text" name="kabupaten"
                                        class="form-control"
                                        value="{{ $row->kabupaten }}">
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
                    viewkabupaten()
                },
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
                    viewkabupaten()
                }
            });
        }

        function destroykabupaten(id) {
            $.ajax({
                type: "get",
                url: "{{ url('deletekabupaten') }}/" + id,
                success: function() {
                    $(".btn-close").click();
                    viewkabupaten()
                }
            });
        }
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
                    window.location = "/deletekabupaten/" + id;
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
            $('#table').DataTable();
        });

        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
    </script>
    <!-- End Scrip -->

</body>

</html>
