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
                                @php
                                    $null = null;
                                @endphp
                                <form action="/insertproduk" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6" style="border-right:1px solid #7638ff ">
                                            <div class="form-group row">
                                                <div class="col-md-6 mb-3">
                                                    <label>Merk</label>
                                                    <select name="merk_produk"
                                                        class="form-select @error('merk_produk') is-invalid @enderror">
                                                        <option value="" disabled <?php echo old('merk_produk') ? '' : 'selected'; ?>>-- Pilih --
                                                        </option>
                                                        @foreach ($merk as $row)
                                                            <option value="{{ $row->id }}" <?php echo old('merk_produk') == $row->id ? 'selected' : ''; ?>>
                                                                {{ $row->nama_merek }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('merk_produk')
                                                        <div class="invalid-feedback">
                                                            The Merk field is required
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Nama Produk</label>
                                                    <input name="nama_produk"
                                                        class="form-control @error('nama_produk') is-invalid @enderror"
                                                        type="text" value="{{ old('nama_produk') }}">
                                                    @error('nama_produk')
                                                        <div class="invalid-feedback">
                                                            Nama Produk Merk wajib diisi
                                                        </div>
                                                    @enderror
                                                </div>
                                                <!--  <div class="col-md-6 mb-3">
                                                    <label>Ukuran Produk</label>
                                                    <input id="ukuran_produk" name="ukuran_produk" type="text"
                                                        class="form-control" value="<?php if (old('ukuran_produk')) {
                                                            $ukuran = json_decode(old('ukuran_produk'), true);
                                                            $insukuran = array_column($ukuran, 'value');
                                                            $value = implode(',', $insukuran);
                                                            echo $value;
                                                        } else {
                                                            echo '26,28';
                                                        } ?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Warna Produk</label>
                                                    <input id="warna_produk" name="warna_produk" type="text"
                                                        class="form-control" value="<?php if (old('warna_produk')) {
                                                            $ukuran = json_decode(old('warna_produk'), true);
                                                            $insukuran = array_column($ukuran, 'value');
                                                            $value = implode(',', $insukuran);
                                                            echo $value;
                                                        } else {
                                                            echo 'kuning,biru';
                                                        } ?>">
                                                </div> -->
                                                <div class="col-md-6 mb-3">
                                                    <label>Berat Produk</label>
                                                    <div class="input-group">
                                                        <input name="berat_produk" type="number"
                                                            class="form-control @error('berat_produk') is-invalid @enderror"
                                                            value="{{ old('berat_produk') }}">
                                                        <span class="input-group-text">Gram</span>
                                                        @error('berat_produk')
                                                            <div class="invalid-feedback">
                                                                Berat Produk Wajib Diisi
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Kategori</label>
                                                    <select id="kategori" name="kategori"
                                                        class="form-select @error('kategori') is-invalid  @enderror">
                                                        <option value="" {{ old('kategori') ? '' : 'selected' }}>
                                                            -- Select --</option>
                                                        @foreach ($kategori as $row)
                                                            <option value="{{ $row->id }}"
                                                                {{ old('kategori') == $row->id ? 'selected' : '' }}>
                                                                {{ $row->kategori }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('kategori')
                                                        <div class="invalid-feedback">
                                                            Kategori Wajib Diisi
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Sub Kategori</label>
                                                    <select id="sub_kategori" name="sub_kategori"
                                                        class="form-select @error('sub_kategori') is-invalid @enderror">
                                                        <option value="{{ old('sub_kategori') }}" selected>
                                                            <?php if (old('sub_kategori')) {
                                                                $data = App\Models\subkategori::where('id', old('sub_kategori'))->first();
                                                                echo $data->sub_kategori;
                                                            } else {
                                                                echo '-- Pilih --';
                                                            } ?></option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Sub Kategori Wajib Diisi
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Sub-sub Kategori</label>
                                                    <select id="sub_subkategori" name="sub_subkategori"
                                                        class="form-select @error('sub_subkategori') is-invalid @enderror">
                                                        <option value="{{ old('sub_subkategori') }}" selected>
                                                            <?php if (old('sub_subkategori')) {
                                                                $data = App\Models\Sub_Subkategori::where('id', old('sub_subkategori'))->first();
                                                                echo $data->sub_subkategori;
                                                            } else {
                                                                echo '-- Pilih --';
                                                            } ?></option>
                                                    </select>
                                                    @error('sub_subkategori')
                                                        <div class="invalid-feedback">
                                                            Sub-sub Kategori Wajib Diisi
                                                        </div>
                                                    @enderror
                                                </div>
                                                {{-- <div class="col-md-6 mb-3">
                                                    <label>Stock Produk</label>
                                                    <input name="stok_produk"
                                                        class="form-control @error('stok_produk') is-invalid @enderror"
                                                        type="number" value="{{ old('stok_produk') }}">
                                                    <div class="invalid-feedback">
                                                        Stock Produk Wajib Diisi
                                                    </div>
                                                </div> --}}
                                                <div class="col-md-6 mb-3">
                                                    <label>Harga Produk</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">Rp.</span>
                                                        <input id="harga_asliproduk" name="harga_asliproduk"
                                                            class="form-control @error('harga_asliproduk') is-invalid @enderror"
                                                            type="number" value="{{ old('harga_asliproduk') }}">
                                                        <div class="invalid-feedback">
                                                            Harga Produk Wajib Diisi
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Diskon</label>
                                                    <div class="input-group">
                                                        <input id="diskon" name="diskon" class="form-control"
                                                            type="number" min="0" max="100"
                                                            value="{{ old('diskon') }}">
                                                        <span class="input-group-text">%</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Harga Diskon</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">Rp.</span>
                                                        <input id="harga_diskonproduk" name="harga_diskonproduk"
                                                            class="form-control" type="number" readonly
                                                            value="{{ old('harga_diskonproduk') }}">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="custom-file-container" data-upload-id="mySecondImage">
                                                        <label
                                                            class="@error('galeri_produk') is-invalid @enderror">Upload
                                                            Foto Produk (Foto Pertama Akan Menjadi thumbnail)
                                                            <a href="javascript:void(0)"
                                                                class="custom-file-container__image-clear"
                                                                title="Clear Image">x</a></label>
                                                        <div class="invalid-feedback">
                                                            Galeri Produk Wajib Diisi
                                                        </div>
                                                        <label class="custom-file-container__custom-file">
                                                            <input name="galeri_produk[]" type="file"
                                                                class="custom-file-container__custom-file__custom-file-input"
                                                                multiple>
                                                            <input type="hidden" value="10485760" />
                                                            <span
                                                                class="custom-file-container__custom-file__custom-file-control @error('galeri_produk') b-red @enderror"></span>
                                                        </label>
                                                        <div class="custom-file-container__image-preview"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <div class="col-12 row">
                                                    <label class="mb-3">Status Produk (opsional)</label>
                                                    <div class="col-6">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="promo" value="yes"
                                                                    <?php echo old('promo') == 'yes' ? 'checked' : ''; ?>>
                                                                Promo
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="produk_baru"
                                                                    value="yes" <?php echo old('promo') == 'yes' ? 'checked' : ''; ?>> Produk Baru
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="baru_datang"
                                                                    value="yes" <?php echo old('promo') == 'yes' ? 'checked' : ''; ?>> Baru Datang
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="best_seller"
                                                                    value="yes" <?php echo old('promo') == 'yes' ? 'checked' : ''; ?>> Best Seller
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label
                                                        class="@error('deskirpsi_pendek') is-invalid @enderror">Deskripsi
                                                        Pendek</label>
                                                    <div class="invalid-feedback">Deskripsi pendek Wajib Diisi</div>
                                                    <textarea name="deskirpsi_pendek" rows="4" cols="5"
                                                        class="form-control @error('deskirpsi_pendek') is-invalid @enderror" placeholder="Enter message">{{ old('deskirpsi_pendek') }}</textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <label
                                                        class="@error('deskirpsi_panjang') is-invalid @enderror">Deskripsi
                                                        Panjang</label>
                                                    <div class="invalid-feedback">
                                                        Deskripsi Panjang wajib Diisi
                                                    </div>
                                                    <textarea name="deskirpsi_panjang" id="summernote">{!! old('deskirpsi_panjang') !!}</textarea>
                                                </div>
                                                <button type="submit"
                                                    class="btn btn-rounded btn-primary mx-auto w-50">Submit</button>
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
    @error('deskirpsi_panjang')
        <script>
            $(".note-editor").addClass("b-red");
        </script>
    @enderror
    <script>
        $(document).ready(function() {
            $('#diskon').keyup(function() {
                let hargaasli = $('#harga_asliproduk').val();
                let diskon = $(this).val();
                let harga_diskon = (hargaasli * diskon) / 100;
                let harga_total = hargaasli - harga_diskon;
                $('#harga_diskonproduk').val(harga_total);
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
        $(document).ready(function() {
            $('input[type="number"]').each(function() {
                $(this).keyup(function() {
                    if ($(this).val() > Number($(this).attr("max"))) {
                        $(this).val(100);
                    }
                });
            });
        });
    </script>
    <script>
        (function() {
            'use strict'

            var forms = document.querySelectorAll('.needs-validation')

            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>

</html>
