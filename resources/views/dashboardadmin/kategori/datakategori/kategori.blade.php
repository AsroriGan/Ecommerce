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
                                    <h3 class="page-title">Data Kategori / Kategori</h3>
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
                                                <button class="btn" onclick="modaltambah()" ><i data-feather="plus-circle"></i>Tambah Item</button>
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
                                <div class="table-responsive" id="tampilkandata">
                                      
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div id="edit-kategori{{ $data->id }}" class="modal fade"
        tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Kategori</h4>
                    <button type="button" class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form action="/editkategoripost"
                        method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="field-3"
                                        class="form-label">Kategori
                                        :</label>
                                    <input type="text" name="kategori" id="kategori"
                                        class="form-control kategori"
                                        value="{{ $data->kategori }}"
                                        placeholder="Masukan Kategori">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button"
                                class="btn btn-secondary waves-effect"
                                data-bs-dismiss="modal">Kembali</button>
                            <button
                                class="btn btn-info waves-effect waves-light" >Edit
                                Kategori</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Modal Tambah -->

    <div id="modalkategori" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div id="success"></div>
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="labelModal">Tambah Kategori</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div id="tampilkandata">

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
        // Tampilkan Data
        $(document).ready(function () {
            tampilkandata()
        })
        function tampilkandata() {
            $.get("{{ url('tampilkandata') }}", {}, function(data, status) {
                $("#tampilkandata").html(data);
            });
        }

        // Halaman Create
        function modaltambah() {
                $.get("{{ url('create') }}", {}, function(data, status) {
                $("#halcreate").html(data);
                $("#modalkategori").modal('show');
            });
        }

        // Proses Create Data
        function store() {
            var kategori = $("#kategori").val();     
            $.ajax({
                type: "get",
                url: "{{ url('store') }}",
                data: "kategori=" + kategori,
                success: function(data) {
                    $(".btn-close").click();
                    tampilkandata()
                },
                error: function(error) {
                    console.log(error.responseJSON);
                    let error_log = error.responseJSON.errors;
                    if(error.status == 422) {
                        $('#modalkategori').find('[name="kategori"]').prev().html('<span style="color:red">Kategori | '+error_log.kategori[0]+' </span>');
                    }
                }
            });
        }

        // Halaman Edit show
        function show(id) {
                $.get("{{ url('show') }}/" + id, {}, function(data, status) {
                $("#halcreate").html(data);
                $("#modalkategori").modal('show');
            });
        }

         // Proses Update Data
         function update(id) {
            var kategori = $("#kategori").val();
            $.ajax({
                type: "get",
                url: "{{ url('update') }}/" + id,
                data: "kategori=" + kategori,
                success: function(data) {
                    $(".btn-close").click();
                    tampilkandata()
                }
            });
        }

        // Proses Delete Data
        function destroy(id) { 
            $.ajax({
                type: "get",
                url: "{{ url('destroy') }}/" + id,
                data: "kategori=" + kategori,
                success: function(data) {
                    
                    $(".btn-close").click();
                    tampilkandata()
                }
            });
        }

    </script>


    {{-- <script>
        $(document).ready(function() {
            $(document).on('click', '.save_data', function(e) {
                e.preventDefault();
                // console.log("hallo");

                var data = {
                    'kategori': $('.kategori').val(),
                }
                console.log(data);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                // $.ajax({
                //     type: "POST",
                //     url: "/kategoripost",
                //     data: data,
                //     datatype: 'json',
                //     success: function(response) {
                //         // console.log(response.errors.kategori);
                //         if (response.status == 400) {
                //             $('#validasi').html("");
                //             $('#validasi').addClass('alert alert-danger');
                //             $.each(response.errors, function(key, err_values) {
                //                 $('#validasi').append('<li>' + err_values + '</li>');
                //             });
                //         } else {
                //             $('#modal-kategori').html('')
                //             $('#modal-kategori').modal('hide');
                //             $('#modal-kategori').find('input').val();
                //             tabel()
                //         }
                //     }

                // });
            });
        });
    </script> --}}

    {{-- <script type="text/javascript">
        @if ($errors->any())
        $('#modal-kategori').modal('show');
        @endif
    </script> --}}

    {{-- <script>
        function openmodal() {
            $('modal-kategori').modal('show')
        }

        function validasi() {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            var kategori = $('#kategori').val();

            $('#kategoriError').addClass('d-none');

            $.ajax({
                type: "POST",
                url: "{{ route('validasikategori') }}",
                data: {
                    _token: CSRF_TOKEN,
                    kategori: kategori,
                },
                success: function(data) {

                },
                error: function(data) {

                    var errors = data.responseJSON;
                    if ($.isEmptyObject(errors) == false) {
                        $.each(errors.errors, function (key, value) {
                            var ErrorID = '#' + key + 'Error';
                            $(ErrorID).removeClass('d-none');
                            $(ErrorID).text(value)
                        })
                    }
                }
            });
        }
    </script> --}}

    <script>

        // Toaster
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif

        // Data Table
        $(document).ready(function() {
            $('#myTable').DataTable();
        });

        $('.delete').click(function() {
            var kategori = $(this).attr('data-kategori');
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
                    window.location = "/deletekategori/" + id;
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

    <!-- End Script -->

</body>

</html>