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

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Detail pesanan nama pemesan</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="page-title">Alamat Pengiriman</h5>
                                <table class="shipping-address">
                                    <tr>
                                        <td>Nama</td>
                                        <td>:</td>
                                        <td class="w-100">zaki</td>
                                    </tr>
                                    <tr>
                                        <td>No.telp</td>
                                        <td>:</td>
                                        <td class="w-100">zaki</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td class="w-100">zaki</td>
                                    </tr>
                                    <tr>
                                        <td>Ekspedisi</td>
                                        <td>:</td>
                                        <td class="w-100">zaki</td>
                                    </tr>
                                </table>
                                <label for="" class="fblack mt-3">Pesan Dari Pembeli</label>
                                <div class="msg-buyer fblack">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet reiciendis nulla at
                                    quae laudantium suscipit debitis consequatur quis, recusandae, architecto doloremque
                                    quidem. Voluptas doloribus quia illo, explicabo excepturi reprehenderit blanditiis!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="page-title">Detail Pembayaran</h5>
                                <table class="shipping-address">
                                    <tr>
                                        <td>Metod Pembayaran</td>
                                        <td>:</td>
                                        <td class="w-100">zaki</td>
                                    </tr>
                                    <tr>
                                        <td>Status Pembayaran</td>
                                        <td>:</td>
                                        <td class="w-100">zaki</td>
                                    </tr>
                                    <tr>
                                        <td>Harga Produk</td>
                                        <td>:</td>
                                        <td class="w-100">zaki</td>
                                    </tr>
                                    <tr>
                                        <td>Ongkos Kirim</td>
                                        <td>:</td>
                                        <td class="w-100">zaki</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Pembayaran</td>
                                        <td>:</td>
                                        <td class="w-100">zaki</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="datatable table table-stripped" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Foto</th>
                                                <th>Nama Produk</th>
                                                <th>Ukuran</th>
                                                <th>Warna</th>
                                                <th>Berat</th>
                                                <th>Kuantitas</th>
                                                <th>Total Harga</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach ($data as $data)
                                                @php
                                                    $getfoto = explode(',', $data->galeri_produk);
                                                    $fotoproduk = $getfoto[0];
                                                @endphp
                                                <tr>
                                                    <td scope="row">{{ $loop->iteration }}</td>
                                                    <td><img src="{{ asset('fotoproduk/' . $fotoproduk) }}"
                                                            alt="" width="100px" height="100px"></td>
                                                    <td>{{ $data->nama_produk }}</td>
                                                    <td><?php
                                                    if ($data->diskon == null) {
                                                        echo 'Rp.' . $data->harga_asliproduk;
                                                    } else {
                                                        echo 'Rp.' . $data->harga_diskonproduk;
                                                    }
                                                    ?></td>
                                                    <td>{{ $data->diskon }}%</td>
                                                    <!-- <td>{{ $data->stok_produk }}</td> -->
                                                    <td>{{ $data->status }}</td>
                                                    <td><a class="btn btn-sm  btn-white text-success me-2"
                                                            href="/variant/{{ $data->id }}"><i
                                                                class="far fa-edit me-1"></i>Variant</a>
                                                        <a class="btn btn-sm  btn-white text-success me-2"
                                                            href="/view_produk/{{ $data->id }}"><i
                                                                class="far fa-edit me-1"></i> Edit</a>
                                                        <a class="btn btn-sm btn-white text-danger me-2 delete"
                                                            data-id="{{ $data->id }}"
                                                            data-nama="{{ $data->nama_produk }}"><i
                                                                class="far fa-trash-altme-1"></i>Hapus</a>
                                                    </td>


                                                    <div id="edit-kategori{{ $data->id }}" class="modal fade"
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
                                                                        action="/editkategoripost/{{ $data->id }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="mb-3">
                                                                                    <label for="field-3"
                                                                                        class="form-label">Kategori
                                                                                        :</label>
                                                                                    <input type="text" id="kategori"
                                                                                        name="kategori"
                                                                                        class="form-control"
                                                                                        value="{{ $data->kategori }}"
                                                                                        id="field-3"
                                                                                        placeholder="Masukan Kategori">
                                                                                </div>
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
                                                    </div>
                                                </tr>
                                            @endforeach --}}
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
    <div id="modalmerek" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content" id="form_modal">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Merek</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="row">
                        <form id="postmerk" action="{{ url('storemerek') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="field-3" class="form-label">Merek
                                        :</label>
                                    <input type="text" id="nama_merek" name="nama_merek" class="form-control"
                                        id="field-3" placeholder="Masukan Nama Merek">
                                    <div class="invalid-feedback" id="msg_merek">

                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="field-3" class="form-label">Foto
                                        :</label>
                                    <input type="file" id="foto_merek" name="foto_merek" class="form-control"
                                        id="field-3">
                                    <div class="invalid-feedback" id="msg_foto"></div>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect"
                            data-bs-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-info waves-effect waves-light"
                            onclick="insertdata()">Tambah
                        </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Star Script -->

    @include('layoutsadmin.script')

    <script>
        //
    </script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    <!-- End Script -->

</body>

</html>
