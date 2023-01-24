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
                                    <h3 class="page-title">Merek</h3>
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
                                                <button href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#modalmerek" onclick="showformmodal()"><i
                                                        data-feather="plus-circle"></i> Tambah Item</button>
                                                {{-- <button href="#" class="btn" data-bs-toggle="modal" data-bs-target="#modalmerek"><i
                                                        data-feather="plus-circle"></i> Tambah Item</button> --}}
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
                                <div class="table-responsive" id="tampilanmerk">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @foreach ($data as $data)
        <div id="modaledit{{ $data->id }}" class="modal fade" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Merek</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-4">
                        <form action="/editmerekpost/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="field-3" class="form-label">Merek
                                            :</label>
                                        <input type="text" id="nama_merek" name="nama_merek" class="form-control"
                                            value="{{ $data->nama_merek }}" id="field-3"
                                            placeholder="Masukan Nama Merek">
                                    </div>
                                    <div class="mb-3">
                                        <label for="field-3" class="form-label">Foto
                                            :</label><br />
                                        <img src="{{ asset('foto/' . $data->foto_merek) }}" style="height: 50px;">
                                        <input type="file" id="foto_merek" name="foto_merek" class="form-control"
                                            id="field-3">
                                        <i style="float: left; font-size: 11px; color:red;">Abaikan jika tidak merubah
                                            foto</i>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect"
                                    data-bs-dismiss="modal">Kembali</button>
                                <button class="btn btn-info waves-effect waves-light">Edit
                                    Merek</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach --}}
    <div id="modalmerek" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content" id="form_modal">

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
                $("#tampilanmerk").html(data);
            });
        }
        //form create
        function showformmodal() {
            $.get("{{ url('createmerek') }}", {}, function(data, status) {
                $("#form_modal").html(data);
                // $("#modalmerek").modal('show');
            });
        }

        // Proses Create Data Merek
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function insertdata() {
            let formid = $('#postmerk');
            console.log(formid);
            let formData = new FormData(formid[0]);
            console.log(formData);
            $.ajax({
                type: 'POST',
                url: "{{ route('storemerek') }}",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    toastr.success('Data Berhasil Di Tambahkan');
                    tampilanmerek();
                    $('#modalmerek').modal('hide');
                },
                error: function(response) {
                    let msg = response.responseJSON.errors;
                    if (response.status == 422) {
                        // console.log(response.responseJSON.errors.nama_merek);
                        if (response.responseJSON.errors.nama_merek) {
                            $('#foto_merek').removeClass('is-invalid');
                            $('#nama_merek').addClass('is-invalid');
                            $('#msg_merek').text(msg.nama_merek[0]);
                        } else if (response.responseJSON.errors.foto_merek) {
                            $('#nama_merek').removeClass('is-invalid');
                            $('#foto_merek').addClass('is-invalid');
                            $('#msg_foto').text(msg.foto_merek[0]);
                        };
                    }
                }
            });
        };

        //edit view data merk
        function editview(id) {
            $.get("/editviewmerk/" + id, {}, function(data, status) {
                $("#form_modal").html(data);
                // $("#modalmerek").modal('show');
            });
        }
        //action edit
        function editpostmerk(id) {
            let formid = $('#editform');
            console.log(formid);
            let formData = new FormData(formid[0]);
            console.log(formData);
            $.ajax({
                type: 'POST',
                url: "/editmerekpost/" + id,
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    toastr.success('Data Berhasil Di Edit');
                    tampilanmerek();
                    $('#modalmerek').modal('hide');
                },
                error: function(error){
                    let msg = error.responseJSON.errors;
                    if(error.status == 422){
                        $("#nama_merek").addClass('is-invalid');
                        $("#msg").text(msg.nama_merek[0]);
                    }
                }
            });
        };
        //delete merk
        function deletemerek(id) {
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
                                    url: "/deletemerek/" + id,
                                    // data: "kategori=" + kategori,
                                    success: function(data) {
                                        toastr.success('Data Berhasil Dihapus', 'Success');
                                        tampilanmerek();
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
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    <!-- End Script -->

</body>

</html>
