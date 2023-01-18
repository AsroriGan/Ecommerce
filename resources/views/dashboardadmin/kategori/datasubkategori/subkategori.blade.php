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
                                    <h3 class="page-title">Data Kategori / SubKategori</h3>
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
                                                <button href="#" class="btn" onclick="modalsubkategori()">
                                                    <i data-feather="plus-circle"></i>
                                                    Tambah Item
                                                </button>
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
                                <div class="table-responsive" id="tampilsubkategori">


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    {{-- <div id="edit-subkategori{{ $datasub->id }}" class="modal fade"
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
                    <form
                        action="editsub_kategoripost/{{ $datasub->id }}"
                        method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="field-3"
                                        class="form-label">Kategori
                                        :</label>
                                    <select id="kategori"
                                        class="form-control"
                                        name="kategori"
                                        aria-label="Default select example">
                                        <option
                                            value="{{ $datasub->idkategoris->kategori }}" disabled selected>
                                            {{ $datasub->idkategoris->kategori }}
                                        </option>
                                        @foreach ($data as $datakate)
                                            <option
                                                value="{{ $datakate->id }}">
                                                {{ $datakate->kategori }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="field-3"
                                        class="form-label">Sub Kategori
                                        :</label>
                                    <input type="text"
                                        id="sub_kategori"
                                        name="sub_kategori"
                                        class="form-control"
                                        value="{{ $datasub->sub_kategori }}"
                                        id="field-3"
                                        placeholder="Masukan Kategori">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button"
                                    class="btn btn-secondary waves-effect"
                                    data-bs-dismiss="modal">Kembali</button>
                                <button
                                    class="btn btn-info waves-effect waves-light">Edit
                                    Kategori</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    <div id="modalsubkategori" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Kategori</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div id="tampilsubkategori">

                    </div>
                </div>
                <div class="modal-body">
                    <div id="createsubkategori">

                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Star Script -->

    @include('layoutsadmin.script')

    <script>
        //Tampilkan Data SubKategori
        $(document).ready(function() {
            tampilsubkategori()
        })

        function tampilsubkategori() {
            $.get("{{ url('tampilsubkategori') }}", {}, function(data, status) {
                $("#tampilsubkategori").html(data);
            });
        }

        // Halaman Create SubKategori
        function modalsubkategori() {
            $.get("{{ url('createsubkategori') }}", {}, function(data, status) {
                $("#createsubkategori").html(data);
                $("#modalsubkategori").modal('show');
            });
        }

         // Proses Create Data SubKategori
         function storesubKategori() {
            var kategori = $("#kategori").val();
            var sub_kategori = $("#sub_kategori").val();
            $.ajax({
                type: "get",
                url: "{{ url('storesubKategori') }}",
                data:  "sub_kategori=" + sub_kategori + "&kategori=" + kategori,
                success: function(data) {
                    $(".btn-close").click();
                    tampilsubkategori()
                },
            });
        }
    </script>


    <script>
        $("#deletesubkategori").click(function() {
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
                    window.location = "/deletesubkategori/" + id;
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
