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
                                    <h3 class="page-title">Data Kategori / Sub->SubKategori</h3>
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
                                                <button href="#" class="btn" onclick="modaltambah()"><i
                                                        data-feather="plus-circle"></i>Tambah Item </button>
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
                                <div class="table-responsive" id="tampilSub_Subkategori">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div id="edit-sub-subkategori{{ $row->id }}" class="modal fade"
        tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Sub->SubKategori</h4>
                    <button type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="field-3"
                                        class="form-label">Kategori
                                        :</label>
                                    <select class="form-control" name="kategori"
                                        aria-label="Default select example">
                                        <option
                                            value="{{ $row->datakategori->id }}">
                                            {{ $row->datakategori->kategori }}
                                        </option>
                                        @foreach ($kategori as $data)
                                            <option
                                                value="{{ $data->id }}">
                                                {{ $data->kategori }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="field-3" class="form-label">Sub
                                        Kategori
                                        :</label>
                                    <select class="form-control"
                                        name="sub_kategori"
                                        aria-label="Default select example">
                                        <option
                                            value="{{ $row->datasubkategori->id }}">
                                            {{ $row->datasubkategori->sub_kategori }}
                                        </option>
                                        @foreach ($subkategori as $datas)
                                            <option
                                                value="{{ $datas->id }}">
                                                {{ $datas->sub_kategori }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="field-1"
                                            class="form-label">Sub->SubKategori</label>
                                        <input type="text"
                                            name="sub_subkategori"
                                            class="form-control" id="field-1"
                                            value="{{ $row->sub_subkategori }}">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">Close</button>
                                <button type="submit"
                                    class="btn btn-primary">Save
                                    changes</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div id="modalsub_subkategori" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="display:none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Sub->SubKategori</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div id="tampilSub_Subkategori">

                    </div>
                </div>
                <div class="modal-body">
                    <div id="halcreate" class="p-4">


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Star Script -->

    @include('layoutsadmin.script')

    <script>
        // Tampilkan Data Sub-SubKategori
        $(document).ready(function() {
            tampilSub_Subkategori()
        })

        function tampilSub_Subkategori() {
            $.get("{{ url('tampilsub_subkategori') }}", {}, function(data, status) {
                $("#tampilSub_Subkategori").html(data);
            });
        }

        // Halaman Create Data Sub-SubKategori
        function modaltambah() {
            $.get("{{ url('createsub_Subkategori') }}", {}, function(data, status) {
                $("#halcreate").html(data);
                $("#modalsub_subkategori").modal('show');
            });
        }

        // Proses Create Data Sub-SubKategori
        function storeSub_subKategori() {
            var kategori = $("#kategori").val();
            var sub_kategori = $("#sub_kategori").val();
            var sub_subkategori = $("#sub_subkategori").val();
            $.ajax({
                type: "get",
                url: "{{ url('storesub_SubKategori') }}",
                data: "kategori=" + kategori + "&sub_kategori=" + sub_kategori + "&sub_subkategori=" +
                    sub_subkategori,
                success: function(data) {
                    $(".btn-close").click();
                    toastr.success("Data Berhasil Ditambahkan", "Success")
                    tampilSub_Subkategori()
                },
                error: function(error) {
                    console.log(error.responseJSON);
                    let error_log = error.responseJSON.errors;
                    if (error.status == 422) {
                        $('#kategori').addClass('is-invalid');
                        $('#sub_kategori').addClass('is-invalid');
                        $('#sub_subkategori').addClass('is-invalid');
                    }
                }
            });
        }

        // Halaman Edit Data Sub-SubKategori
        function showSub_Subkategori(id) {
            $.get("{{ url('showSub_Subkategori') }}/" + id, {}, function(data, status) {
                $("#halcreate").html(data);
                $("#modalsub_subkategori").modal('show');
            });
        }

        // Proses Update Data Sub-SubKategori
        function updatesub_Subkategori(id) {
            var kategori = $("#kategori").val();
            var sub_kategori = $("#sub_kategori").val();
            var sub_subkategori = $("#sub_subkategori").val();
            $.ajax({
                type: "get",
                url: "{{ url('updatesub_Subkategori') }}/" + id,
                data: "kategori=" + kategori + "&sub_kategori=" + sub_kategori + "&sub_subkategori=" +
                    sub_subkategori,
                success: function(data) {
                    $(".btn-close").click();
                    toastr.success("Data Berhasil DiEdit", "Success")
                    tampilSub_Subkategori()
                }
            });
        }

        // Proses Delete Data Sub-SubKategori
        function destroySub_Subkategori(id) {
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
                                url: "{{ url('destroySub_Subkategori') }}/" + id,
                                success: function() {
                                    $(".btn-close").click();
                                    tampilSub_Subkategori()
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
        $("#delete").click(function() {
            var nama = $(this).attr('data-sub_subkategori');
            var id = $(this).attr('data-id');

        })
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
