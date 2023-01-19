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
                                    <h3 class="page-title">Data Merek / Merek</h3>
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
                                                <button href="#" class="btn" onclick="modaltambahmerek()"><i
                                                        data-feather="plus-circle"></i> Tambah Item</button>
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
                                <div class="table-responsive" id="tampilanmerek">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div id="edit-merek{{ $data->id }}" class="modal fade"
        tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Merek</h4>
                    <button type="button" class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form action="/editmerekpost/{{ $data->id }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="field-3"
                                        class="form-label">Merek
                                        :</label>
                                    <input type="text" id="nama_merek"
                                        name="nama_merek"
                                        class="form-control"
                                        value="{{ $data->nama_merek }}"
                                        id="field-3"
                                        placeholder="Masukan Nama Merek">
                                </div>
                                <div class="mb-3">
                                    <label for="field-3"
                                        class="form-label">Foto
                                        :</label><br/>
                                        <img src="{{asset('foto/'. $data->foto_merek)}}" style="height: 50px;">
                                    <input type="file" id="foto_merek"
                                        name="foto_merek"
                                        class="form-control"
                                        
                                        id="field-3"
                                        >
                                        <i style="float: left; font-size: 11px; color:red;">Abaikan jika tidak merubah foto</i>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button"
                                class="btn btn-secondary waves-effect"
                                data-bs-dismiss="modal">Kembali</button>
                            <button
                                class="btn btn-info waves-effect waves-light">Edit
                                Merek</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    <div id="modalmerek" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Merek</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div id="tampilanmerek">

                    </div>
                </div>
                <div class="modal-body">
                    <div id="halcreatemerek" class="p-4">

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
            tampilanmerek()
        })

        function tampilanmerek() {
            $.get("{{ url('tampilanmerek') }}", {}, function(data, status) {
                $("#tampilanmerek").html(data);
            });
        }

        // Halaman Create 
        function modaltambahmerek() {
            $.get("{{ url('createmerek') }}", {}, function(data, status) {
                $("#halcreatemerek").html(data);
                $("#modalmerek").modal('show');
            });
        }

        // Proses Create Data Merek
        function storemerek() {
            // var formData = new FormData();
            // if ($('#foto_merek')[0].files.length > 0) {
            //     for (var i = 0; i < $('#foto_merek')[0].files.length; i++)
            //         formData.append('file[]', $('#foto_merek')[0].files[i]);
            // }
            var nama_merek = $("#nama_merek").val();
            var foto_merek = $("#foto_merek").val();
            $.ajax({
                type: "get",
                url: "{{ url('storemerek') }}",
                data: "nama_merek=" + nama_merek + "&foto_merek" + foto_merek,
                success: function(data) {
                    console.log(data);
                    $(".btn-close").click();
                    tampilanmerek()
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
                    window.location = "/deletemerek/" + id;
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
