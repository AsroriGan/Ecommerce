<!DOCTYPE html>
<html lang="en">

@include('layoutsadmin.head')

<body class="nk-body bg-lighter npc-default has-sidebar no-touch nk-nio-theme">

    <div class="main-wrapper">

        @include('layoutsadmin.navbar')


        @include('layoutsadmin.sidebar')


        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2">

                        <div class="page-header">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3 class="page-title">Tambah Blog</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <form action="/insertblog" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="bank-inner-details">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Judul Blog<span class="text-danger">*</span></label>
                                                    <input name="judul_blog" type="text" class="form-control">
                                                    @error('judul_blog')
                                                    <div class="alert text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Kategori Blog<span class="text-danger">*</span></label>
                                                <select class="form-control" name="kategoriblog" id="">
                                                    <option>---Pilih Kategori Blog---</option>
                                                    @foreach ($relasi as $relasi)
                                                    <option value="{{ $relasi->id }}">{{ $relasi->kategoriblog }}</option>
                                                    @endforeach
                                                </select>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="custom-file-container" data-upload-id="myFirstImage">
                                                        <label>Upload Foto Blog(Foto Tumbnail)<a href="javascript:void(0)"
                                                                class="custom-file-container__image-clear"
                                                                title="Clear Image">x</a></label>
                                                        <label class="custom-file-container__custom-file">
                                                            <input type="file"
                                                                class="custom-file-container__custom-file__custom-file-input"
                                                                accept="image/*" name="foto_sampul">
                                                            <input type="hidden" name="MAX_FILE_SIZE"
                                                                value="10485760" />
                                                            <span
                                                                class="custom-file-container__custom-file__custom-file-control"></span>
                                                        </label>
                                                        <div class="custom-file-container__image-preview"></div>
                                                    </div>
                                                    @error('foto_sampul')
                                                    <div class="alert text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Description Blog</label>
                                                    <textarea id="editor" name="deskripsi"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="custom-file-container"
                                                            data-upload-id="mySecondImage">
                                                            <label>Upload Foto Produk <a href="javascript:void(0)"
                                                                    class="custom-file-container__image-clear"
                                                                    title="Clear Image">x</a></label>
                                                            <label class="custom-file-container__custom-file">
                                                                <input type="file"
                                                                    class="custom-file-container__custom-file__custom-file-input"
                                                                    multiple name="foto_produk[]">
                                                                <input type="hidden" name="MAX_FILE_SIZE"
                                                                    value="10485760" />
                                                                <spanj
                                                                    class="custom-file-container__custom-file__custom-file-control"></span>
                                                            </label>
                                                            <div class="custom-file-container__image-preview"></div>
                                                        </div>
                                                    </div>
                                                    @error('foto_produk')
                                                    <div class="alert text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Description Produk</label>
                                                    <textarea id="masyaallah" name="deskripsi_produk"></textarea>
                                                    {{-- @error('deskripsi_produk')
                                                    <div class="alert text-danger">{{ $message }}</div>
                                                    @enderror --}}
                                                </div>
                                            </div>
                                            <div class=" blog-categories-btn pt-0">
                                                <div class="bank-details-btn ">
                                                    <button type="submit" class="btn btn-primary me-2">Add
                                                        Post</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            @include('layoutsadmin.script')

</body>

</html>
