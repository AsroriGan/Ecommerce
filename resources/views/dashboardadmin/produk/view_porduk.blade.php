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
        @include('layoutsadmin.bugscview')

        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Produk / Edit Produk</h3>
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
                            <div class="card-body">
                                <form action="/edit_produk/{{ $produk->id }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6" style="border-right:1px solid #7638ff ">
                                            <div class="form-group row">
                                                <div class="col-md-6 mb-3">
                                                    <label>Merk</label>
                                                    <select name="merk_produk" class="form-select select">
                                                        <option value="{{ $produk->merk_produk }}">
                                                            {{ $produk->rproduktmerk->nama_merek }}</option>
                                                        @foreach ($merk as $row)
                                                            <option value="{{ $row->id }}"> {{ $row->nama_merek }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Nama Produk</label>
                                                    <input name="nama_produk" class="form-control" type="text"
                                                        value="{{ $produk->nama_produk }}">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Ukuran Produk</label>
                                                    <input id="ukuran_produk" name="ukuran_produk" type="text"
                                                        class="form-control" value="{{ $produk->ukuran_produk }}">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Warna Produk</label>
                                                    <input id="warna_produk" name="warna_produk" type="text"
                                                        class="form-control" value="{{ $produk->warna_produk }}">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Berat Produk</label>
                                                    <div class="input-group">
                                                        <input name="berat_produk" type="number"
                                                            value="{{ $produk->berat_produk }}" class="form-control">
                                                        <span class="input-group-text">Gram</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Kategori</label>
                                                    <select id="kategori" name="kategori" class="form-select select">
                                                        <option value="{{ $produk->kategori }}" selected>
                                                            {{ $produk->rkategoritkategori->kategori }}</option>
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
                                                        <option value="{{ $produk->sub_kategori }}">
                                                            {{ $produk->rsub_kategoritkategori->sub_kategori }}
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Sub-sub Kategori</label>
                                                    <select id="sub_subkategori" name="sub_subkategori"
                                                        class="form-select select">
                                                        <option value="{{ $produk->sub_subkategori }}">
                                                            {{ $produk->rsub_subkategoritkategori->sub_subkategori }}
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Stock Produk</label>
                                                    <input name="stok_produk" class="form-control"
                                                        value="{{ $produk->stok_produk }}" type="number">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Harga Produk</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">Rp.</span>
                                                        <input id="harga_asliproduk" name="harga_asliproduk"
                                                            class="form-control" type="number"
                                                            value="{{ $produk->harga_asliproduk }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Diskon</label>
                                                    <div class="input-group">
                                                        <input id="diskon" name="diskon" class="form-control"
                                                            type="number" min="0" max="100"
                                                            value="{{ $produk->diskon }}">
                                                        <span class="input-group-text">%</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Harga Diskon</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">Rp.</span>
                                                        <input id="harga_diskonproduk" name="harga_diskonproduk"
                                                            class="form-control" type="number"
                                                            value="{{ $produk->harga_diskonproduk }}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-12 row">
                                                    <label style="color:#4361ee">Galeri Produk(Foto Pertama yang akan
                                                        menjadi thumbnail)</label>
                                                    @php
                                                        $key = -1;
                                                    @endphp
                                                    @foreach ($galeri_produk as $galeri)
                                                        @php
                                                            $key++;
                                                            // echo $key;
                                                        @endphp
                                                        <div class="col-6 d-flex align-items-end flex-column mb-3">
                                                            <div class="p-2 edit-delete-img">
                                                                <a class="btn-aksi-delete delete"><i
                                                                        class="fa-solid fa-trash"></i></a>
                                                                <a class="btn-aksi-edit" data-bs-toggle="modal"
                                                                    data-bs-target="#con-close-modal{{ $key }}"><i
                                                                        class="fa-solid fa-pen-to-square"></i></a>
                                                            </div>
                                                            <img class="img-vproduk"
                                                                src="{{ asset('fotoproduk/' . $galeri) }}"
                                                                alt="" style="height:175px;width:175px">
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <div class="col-12 row">
                                                    <label class="mb-3">Status Produk</label>
                                                    @php
                                                        $status = explode(',', $produk->status_produk);
                                                    @endphp
                                                    <div class="col-6">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="status_produk[]"
                                                                    value="promo" <?php if (in_array('promo', $status)) {
                                                                        echo 'checked';
                                                                    } ?>> Promo
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="status_produk[]"
                                                                    value="Produk Baru" <?php echo in_array('Produk Baru', $status) ? 'checked' : ''; ?>> Produk
                                                                Baru
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="status_produk[]"
                                                                    value="Baru Datang" <?php echo in_array('Baru Datang', $status) ? 'checked' : ''; ?>> Baru
                                                                Datang
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="status_produk[]"
                                                                    value="Best Seller" <?php echo in_array('Best Seller', $status) ? 'checked' : ''; ?>> Best
                                                                Seller
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label>Deskripsi Pendek</label>
                                                    <textarea name="deskirpsi_pendek" rows="4" cols="5" class="form-control" placeholder="Enter message">{{ $produk->deskirpsi_pendek }}</textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <label>Deskripsi Panjang</label>
                                                    <textarea name="deskirpsi_panjang" id="summernote">{!! $produk->deskirpsi_panjang !!}</textarea>
                                                </div>
                                                <input type="hidden" name="status" value="aktif">
                                                <div class="col-12 d-flex">
                                                    <button type="submit"
                                                        class="btn btn-rounded btn-primary mx-auto w-50">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            @php
                                $key =  -1;
                            @endphp
                            @foreach ($galeri_produk as $galeri)
                                @php
                                    $key++;
                                    // echo $key;
                                @endphp
                                <div id="con-close-modal{{ $key }}" class="modal fade" tabindex="-1"
                                    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
                                    style="display:none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">{{ $key }}</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="/editgaleri_produk/{{ $produk->id }}/{{ $key }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body p-4">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="field-1" class="form-label">Foto
                                                                    Produk</label>
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <img src="{{ asset('fotoproduk/' . $galeri) }}"
                                                                            alt=""
                                                                            style="height:175px;width:175px">
                                                                    </div>
                                                                    <div class="col-6 d-flex">
                                                                        <input class="mt-auto" name="galeri_produk"
                                                                            class="form-control" type="file">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit"
                                                        class="btn btn-info waves-effect waves-light">Save
                                                        changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Star Script -->
        @include('layoutsadmin.script')
        <!-- End Script -->
        <script>
            //start depended dropdown
            $(document).ready(function() {
                $('#diskon').keyup(function() {
                    let hargaasli = $('#harga_asliproduk').val();
                    let diskon = $(this).val();
                    let harga_diskon = (hargaasli * diskon) / 100;
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
            // end depended dropdown

            //start sweet alert
            $(".delete").click(function() {
                var nama = $(this).attr('data-nama');
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
                        window.location = "/deletekabupaten/" + id;
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
            //end sweet alert
        </script>
        <script>
            var input1 = document.querySelector('#warna_produk');
            var input2 = document.querySelector('#ukuran_produk');

            new Tagify(input1);
            new Tagify(input2);
        </script>
</body>

</html>
