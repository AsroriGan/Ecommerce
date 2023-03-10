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
                                    <h3 class="page-title">Data Promo /
                                        Promosi
                                    </h3>
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
                                            {{-- <div
                                                class="invoices-settings-btn
                                    invoices-settings-btn-one">
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                data-bs-target="#modal-merek">
                                                    <i data-feather="plus-circle"></i>
                                                    Tambah Item
                                                </a>
                                            </div> --}}
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
                                <div class="table-responsive">
                                    <table class="datatable table table-stripped" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Produk</th>
                                                <th>Foto Produk</th>
                                                <th>Judul Promo</th>
                                                <th>Deskripsi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $promo)
                                                <tr>
                                                    <td scope="row">{{ $loop->iteration }}</td>
                                                    <td>@php echo $promo->nama_produk != null ? $promo->promoid->nama_produk : $promo->nama_produk @endphp</td>
                                                    {{-- <td> @php
                                                        if (5 > 1) {
                                                           echo $promo->promoid->nama_produk;
                                                    } else {
                                                        echo "salah";
                                                    }
                                                    @endphp
                                                    </td> --}}
                                                    <td><img src="{{ asset('fotoproduk/' . $promo->foto) }}"
                                                            style="height:80px;"></td>
                                                    <td>{{ $promo->judul }}</td>
                                                    <td>{{ $promo->deskripsi }}</td>
                                                    <td><a data-bs-toggle="modal"
                                                            data-bs-target="#edit-promo{{ $promo->id }}"
                                                            class="btn btn-sm  btn-white text-success me-2"><i
                                                                class="far fa-edit me-1"></i> Edit</a>
                                                        <a class="btn btn-sm btn-white text-danger me-2 delete"
                                                            data-id="{{ $promo->id }}"
                                                            data-nama="{{ $promo->judul }}"><i
                                                                class="far fa-trash-altme-1"></i>Reset</a>
                                                    </td>
                                                    <div id="edit-promo{{ $promo->id }}" class="modal fade"
                                                        tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                                        aria-hidden="true" style="display: none;">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Edit Promo</h4>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body p-4">
                                                                    <form id="form{{$promo->id}}"
                                                                        action="/editpromopost/{{ $promo->id }}"
                                                                        method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                 <div class="mb-3">
                                                                                    <label for="field-3" class="form-label">Nama Produk
                                                                                        :</label>
                                                                                    <select id="nama_produk" class="form-control" name="nama_produk" aria-label="Default select example">
                                                                                        <option value="@php echo $promo->nama_produk != null ? $promo->promoid->nama_produk : $promo->nama_produk @endphp" selected>
                                                                                            @php echo $promo->nama_produk != null ? $promo->promoid->nama_produk : $promo->nama_produk @endphp
                                                                                        </option>
                                                                                        @foreach ($produk as $datas)
                                                                                            <option value="{{ $datas->id }}">{{ $datas->nama_produk }}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                                    <label for="field-3"
                                                                                        class="form-label">Foto Produk
                                                                                        :</label><br />
                                                                                    <img src="{{ asset('fotoproduk/' . $promo->foto) }}"
                                                                                        style="height: 50px;">
                                                                                    <input type="file" id="foto"
                                                                                        name="foto"
                                                                                        class="form-control"
                                                                                        id="field-3">
                                                                                    <i
                                                                                        style="float: left; font-size: 11px; color:red;">Abaikan
                                                                                        jika tidak merubah foto</i>
                                                                                </div>
                                                                                <br />
                                                                                <div class="mb-3">
                                                                                    <label for="field-3"
                                                                                        class="form-label">Judul Promo
                                                                                        :</label>
                                                                                    <input type="text" id="judul{{$promo->id}}"
                                                                                        name="judul"
                                                                                        class="form-control"
                                                                                        value="{{ $promo->judul }}"
                                                                                        id="field-3"
                                                                                        placeholder="Masukan Judul Promo">
                                                                                    <div class="invalid-feedback" id="msgjudul{{$promo->id}}"></div>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="field-3"
                                                                                        class="form-label">Deskripsi
                                                                                        :</label>
                                                                                    <input type="text" id="deskripsi{{$promo->id}}"
                                                                                        name="deskripsi"
                                                                                        class="form-control"
                                                                                        value="{{ $promo->deskripsi }}"
                                                                                        placeholder="Masukan Deskripsi">
                                                                                    <div class="invalid-feedback" id="msgdesc{{$promo->id}}"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary waves-effect"
                                                                                data-bs-dismiss="modal">Kembali</button>
                                                                            <button type="button" onclick="editpromo({{$promo->id}})"
                                                                                class="btn btn-info waves-effect waves-light">Edit
                                                                                </button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div id="modal-merek" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Merek</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form action="/merekpost" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="field-3" class="form-label">Merek
                                        :</label>
                                    <input type="text" id="nama_merek" name="nama_merek" class="form-control"
                                        id="field-3" placeholder="Masukan Nama Merek">
                                </div>
                                <div class="mb-3">
                                    <label for="field-3" class="form-label">Foto
                                        :</label>
                                    <input type="file" id="foto_merek" name="foto_merek" class="form-control"
                                        id="field-3" >
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect"
                                data-bs-dismiss="modal">Kembali</button>
                            <button class="btn btn-info waves-effect waves-light">Tambah
                                Merek</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

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

        //edit action ajax
        function editpromo(id) {
            let formid = $('#form'+id);
            // console.log(formid);
            let formData = new FormData(formid[0]);
            // console.log(formData);
            $.ajax({
                type: 'POST',
                url: "/editpromopost/" + id,
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    location.reload(true);
                    // $('#modalmerek').modal('hide');
                    // toastr.success('Data Berhasil Di Edit');
                },
                error: function(error){
                    let msg = error.responseJSON.errors;
                    if(msg.judul){
                        $("#deskripsi"+id).removeClass('is-invalid');
                        $("#judul"+id).addClass('is-invalid');
                        $("#msgjudul"+id).text(msg.judul[0]);
                    }else{
                        $("#judul"+id).removeClass('is-invalid');
                        $("#deskripsi"+id).addClass('is-invalid');
                        $("#msgdesc"+id).text(msg.deskripsi[0]);
                    }
                }
            });
        };
    </script>
    <script>
        $(".delete").click(function() {
            var nama = $(this).attr('data-nama');
            var id = $(this).attr('data-id');
            Swal.fire({
                title: "Apa kamu yakin?",
                text: "Anda akan mereset data ini!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Reset!",
                confirmButtonClass: "btn btn-primary",
                cancelButtonClass: "btn btn-danger ml-1",
                buttonsStyling: !1
            }).then(function(t) {
                if (t.value) {
                    window.location = "/resetpromo/" + id;
                    Swal.fire({
                        type: "success",
                        title: "Direset!",
                        text: "Data Anda telah direset.",
                        confirmButtonClass: "btn btn-success"
                    })
                } else {
                    Swal.fire({
                        title: "Dibatalkan",
                        text: "Data Promosi Anda aman :)",
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
