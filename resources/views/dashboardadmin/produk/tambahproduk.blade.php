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
        @include('layoutsadmin.bugsc')

        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Produk / Tambah Produk</h3>
                            {{-- <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">Basic Inputs</li>
                            </ul> --}}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            {{-- <div class="card-header">
                                <h5 class="card-title">Tambah Produk</h5>
                            </div> --}}
                            <div class="card-body">
                                <form action="/insertproduk" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6" style="border-right:1px solid #7638ff ">
                                            <div class="form-group row">
<<<<<<< HEAD
                                                <div class="col-md-6">
                                                    <label>Merek</label>
                                                    <select class="form-select">
                                                        <option>-- Select --</option>
                                                        <option>Option 1</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Nama Produk</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Ukuran Produk</label>
                                                    <select class="form-control tagging" multiple="multiple">
                                                        <option>orange</option>
                                                        <option>white</option>
                                                        <option>purple</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Stock Produk</label>
                                                    <input type="text" class="form-control">
=======
                                                <div class="col-md-6 mb-3">
                                                    <label>Merk</label>
                                                    <select name="merk_produk" class="form-select select">
                                                        <option value="null">-- Select --</option>
                                                        @foreach ($merk as $row)
                                                            <option value="{{ $row->id }}"> {{ $row->nama_merek }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Nama Produk</label>
                                                    <input name="nama_produk" class="form-control" type="text">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Ukuran Produk</label>
                                                    <input id="ukuran_produk" name="ukuran_produk" type="text" class="form-control" value="26,27">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Warna Produk</label>
                                                    <input id="warna_produk" name="warna_produk" type="text" class="form-control" value="kuning,biru">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Berat Produk</label>
                                                    <div class="input-group">
                                                        <input name="berat_produk" type="number" class="form-control">
                                                        <span class="input-group-text">Gram</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Kategori</label>
                                                    <select id="kategori" name="kategori" class="form-select select">
                                                        <option>-- Select --</option>
                                                        @foreach ($kategori as $row)
                                                            <option value="{{ $row->id }}">{{ $row->kategori }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Sub Kategori</label>
                                                    <select id="sub_kategori" name="sub_kategori"
                                                        class="form-select select">
                                                        <option>-- Select --</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Sub-sub Kategori</label>
                                                    <select id="sub_subkategori" name="sub_subkategori"
                                                        class="form-select select">
                                                        <option>-- Select --</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Stock Produk</label>
                                                    <input name="stok_produk" class="form-control" type="number">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Harga Produk</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">Rp.</span>
                                                        <input id="harga_asliproduk" name="harga_asliproduk" class="form-control" type="number">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Diskon</label>
                                                    <div class="input-group">
                                                        <input id="diskon" name="diskon" class="form-control" type="number" min="0" max="100">
                                                        <span class="input-group-text">%</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Harga Diskon</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">Rp.</span>
                                                        <input id="harga_diskonproduk" name="harga_diskonproduk" class="form-control" type="number" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="custom-file-container" data-upload-id="mySecondImage">
                                                        <label>Upload Foto Produk (Foto Pertama Akan Menjadi thumbnail)
                                                            <a href="javascript:void(0)"
                                                                class="custom-file-container__image-clear"
                                                                title="Clear Image">x</a></label>
                                                        <label class="custom-file-container__custom-file">
                                                            <input name="galeri_produk[]" type="file"
                                                                class="custom-file-container__custom-file__custom-file-input"
                                                                multiple>
                                                            <input type="hidden" value="10485760" />
                                                            <span
                                                                class="custom-file-container__custom-file__custom-file-control"></span>
                                                        </label>
                                                        <div class="custom-file-container__image-preview"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <div class="col-12 row">
                                                    <label class="mb-3">Status Produk</label>
                                                    <div class="col-6">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="status_produk[]" value="promo"> Promo
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="status_produk[]" value="Produk Baru"> Produk Baru
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="status_produk[]" value="Baru Datang"> Baru Datang
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="status_produk[]" value="Best Seller"> Best Seller
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label>Deskripsi Pendek</label>
                                                    <textarea name="deskirpsi_pendek" rows="4" cols="5" class="form-control" placeholder="Enter message"></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <label>Deskripsi Panjang</label>
                                                    <textarea name="deskirpsi_panjang" id="summernote"></textarea>
                                                </div>
                                                <input type="hidden" name="status" value="aktif">
                                                <div class="col-12 d-flex">
                                                    <button type="submit"
                                                        class="btn btn-rounded btn-primary mx-auto w-50">Submit</button>
>>>>>>> 644360c3afda9335c4a2c74fc9d90ec5ac13a6eb
                                                </div>
                                                <div class="col-md-6">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Star Script -->
        @include('layoutsadmin.script')
        <!-- End Script -->
        <script>
            $(document).ready(function() {
                $('#diskon').keyup(function() {
                    let hargaasli = $('#harga_asliproduk').val();
                    let diskon = $(this).val();
                    let harga_diskon = (hargaasli*diskon)/100;
                    let harga_total = hargaasli - harga_diskon;
                    $('#harga_diskonproduk').val(harga_total)
                });
            });
            $(document).ready(function() {
                $('#kategori').change(function() {
                    let ik = $(this).val();
                    $.ajax({
                        url: '/get_subkategori',
                        type: 'post',
                        data: 'ik=' + ik + '&_token={{ csrf_token() }}',
                        success: function(result) {
                            $('#sub_kategori').html(result);
                            // $('#sub_kategori').removeAttr('disabled');
                        }
                    });
                });
            });

            $(document).ready(function() {
                $('#sub_kategori').change(function() {
                    let isk = $(this).val();
                    $.ajax({
                        url: '/get_sub_subkategori',
                        type: 'post',
                        data: 'isk=' + isk + '&_token={{ csrf_token() }}',
                        success: function(result) {
                            $('#sub_subkategori').html(result);
                            // $('#sub_kategori').removeAttr('disabled');
                        }
                    });
                });
            });
        </script>
        <script>
            var input1 = document.querySelector('#warna_produk');
            var input2 = document.querySelector('#ukuran_produk');

            new Tagify(input1);
            new Tagify(input2);
        </script>
</body>

</html>
