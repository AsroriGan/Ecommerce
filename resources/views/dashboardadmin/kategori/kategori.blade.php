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
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#modal-kategori">
                                                    <i data-feather="plus-circle"></i>
                                                    Tambah Item
                                                </a>
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
                                <div class="table-responsive" id="tabel">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-kategori" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div id="success"></div>
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Kategori</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form action="/kategoripost" method="POST">
                        @csrf
                        <div class="row">
                            {{-- <ul id="validasi"></ul> --}}
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label
                                        @error('kategori')
                                        class="text-danger "
                                    @enderror
                                        class="form-label">Kategori
                                        @error('kategori')
                                            {{ $message }}
                                        @enderror
                                    </label>
                                    <input type="text" id="kategori" name="kategori" class="form-control"
                                        placeholder="Masukan Kategori">
                                </div>
                                <ul id="validasi"></ul>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect"
                                data-bs-dismiss="modal">Kembali</button>
                            <button class="btn btn-info waves-effect waves-light save_data">Tambah
                                Kategori</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Star Script -->

    @include('layoutsadmin.script')

    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
    </script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

    <script>
        $(document).ready(function() {
            tabel()
        });

        function tabel() {
            $.get("{{ url('tabel')}}", {}, function(data, kategori) {
                $("#tabel").html(data);
            });
        }
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

                $.ajax({
                    type: "POST",
                    url: "/kategoripost",
                    data: data,
                    datatype: 'json',
                    success: function(response) {
                        // console.log(response.errors.kategori);
                        if (response.status == 400) {
                            $('#validasi').html("");
                            $('#validasi').addClass('alert alert-danger');
                            $.each(response.errors, function(key, err_values) {
                                $('#validasi').append('<li>' + err_values + '</li>');
                            });
                            // console.log(response.status);
                        } else {
                            $('#modal-kategori').html('')
                            $('#modal-kategori').modal('hide');
                            $('#modal-kategori').find('input').val();
                            tabel()
                        }
                    }

                });
            });
        });

        // function update() {
        //     $.ajax({
        //         url: '/kategori',
        //         type: 'get',
        //         success: function(response) {
        //             $('#tavbel').html(response)
        //         }
        //     });
        // }
    </script>

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
