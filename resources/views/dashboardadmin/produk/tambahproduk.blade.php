v
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
                            <h3 class="page-title">Tambah Produk</h3>
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
                            <div class="card-header">
                                <h5 class="card-title">Tambah Produk</h5>
                            </div>
                            <div class="card-body">
                                <form action="/insertproduk" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6" style="border-right:1px solid #7638ff ">
                                            <div class="form-group row">
                                                <div class="col-md-6 mb-3">
                                                    <label>Merk</label>
                                                    <select name="merk_produk" class="form-select select">
                                                        <option>-- Select --</option>
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                        <option>Option 4</option>
                                                        <option>Option 5</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Nama Produk</label>
                                                    <input name="nama_produk" class="form-control" type="text">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Ukuran Produk</label>
                                                    <select name="ukuran_produk[]" class="form-control tagging" multiple="multiple">
                                                        <option>25</option>
                                                        <option>35</option>
                                                        <option>40</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Warna Produk</label>
                                                    <select name="warna_produk[]" class="form-control tagging" multiple="multiple">
                                                        <option>Kuning</option>
                                                        <option>Biru</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Berat Produk</label>
                                                    <input name="berat_produk" type="number" class="form-control">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Kategori</label>
                                                    <select name="kategori" class="form-select select">
                                                        <option>-- Select --</option>
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                        <option>Option 4</option>
                                                        <option>Option 5</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Sub Kategori</label>
                                                    <select name="sub_kategori" class="form-select select">
                                                        <option>-- Select --</option>
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                        <option>Option 4</option>
                                                        <option>Option 5</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Sub-sub Kategori</label>
                                                    <select name="sub_subkategori" class="form-select select">
                                                        <option>-- Select --</option>
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                        <option>Option 4</option>
                                                        <option>Option 5</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Stock Produk</label>
                                                    <input name="stok_produk" class="form-control" type="number">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Harga Produk</label>
                                                    <input name="harga_produk" class="form-control" type="number">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Harga Diskon</label>
                                                    <input name="harga_diskon" class="form-control" type="number">
                                                </div>
                                                <div class="col-12">
                                                    <div class="custom-file-container" data-upload-id="mySecondImage">
                                                        <label>Upload Foto Produk (Foto Pertama Akan Menjadi thumbnail) <a href="javascript:void(0)"
                                                                class="custom-file-container__image-clear"
                                                                title="Clear Image">x</a></label>
                                                        <label class="custom-file-container__custom-file">
                                                            <input name="galeri_produk[]" type="file"
                                                                class="custom-file-container__custom-file__custom-file-input"
                                                                multiple>
                                                            <input type="hidden"
                                                                value="10485760" />
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
                                                                <input type="checkbox" name="status_produk[]"> Option 1
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="status_produk[]"> Option 1
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="status_produk[]"> Option 1
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="status_produk[]"> Option 1
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
                                                    <button type="submit" class="btn btn-rounded btn-primary mx-auto w-50">Submit</button>
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

</body>

</html>
