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
                                        <td class="w-100">{{ $pesananmasuk->NamaPenerima }}</td>
                                    </tr>
                                    <tr>
                                        <td>No.telp</td>
                                        <td>:</td>
                                        <td class="w-100">{{ $pesananmasuk->NoTelp }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td class="w-100">{{ $pesananmasuk->Alamat_lengkap }}</td>
                                    </tr>
                                    <tr>
                                        <td>Ekspedisi</td>
                                        <td>:</td>
                                        <td class="w-100">{{ $pesananmasuk->ekspedisi }}</td>
                                    </tr>
                                </table>
                                <label for="" class="fblack mt-3">Pesan Dari Pembeli</label>
                                <div class="msg-buyer fblack">
                                    {{ $pesananmasuk->PesanDariPembeli }}
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
                                        <td class="w-100">Id payment</td>
                                    </tr>
                                    <tr>
                                        <td>Status Pembayaran</td>
                                        <td>:</td>
                                        <td class="w-100">Id payment</td>
                                    </tr>
                                    <tr>
                                        <td>Harga Produk</td>
                                        <td>:</td>
                                        <td class="w-100"></td>
                                    </tr>
                                    <tr>
                                        <td>Ongkos Kirim</td>
                                        <td>:</td>
                                        <td class="w-100">Rp.{{ $pesananmasuk->OngkosKirim }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Pembayaran</td>
                                        <td>:</td>
                                        <td class="w-100">Rp.{{ $pesananmasuk->TotalHarga }}</td>
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
                                            @foreach ($rincianproduk as $row)
                                                {{-- @php
                                                    $getfoto = explode(',', $row->galeri_produk);
                                                    $fotoproduk = $getfoto[0];
                                                @endphp --}}
                                                <tr>
                                                    <td scope="row">{{ $loop->iteration }}</td>
                                                    <td><img src="{{ asset('fotoproduk/' . $row->FotoProduk) }}"
                                                            alt="" width="100px" height="100px"></td>
                                                    <td>{{ $row->NamaProduk }}</td>
                                                    <td>{{ $row->UkuranProduk }}</td>
                                                    <td>{{ $row->WarnaProduk }}</td>
                                                    <td>{{ $row->BeratProduk }}</td>
                                                    <td>{{ $row->QuantityProduk}}</td>
                                                    <td>{{ $row->TotalHargaProduk}}</td>
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
