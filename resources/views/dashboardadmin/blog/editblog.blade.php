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
                                    <h3 class="page-title">Edit Blog</h3>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <form action="/updateblog/{{ $data->id }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="bank-inner-details">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Judul Blog<span class="text-danger">*</span></label>
                                                    <input name="judul_blog" type="text" class="form-control" value="{{ $data->judul_blog }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Kategori Blog<span class="text-danger">*</span></label>
                                                <select class="form-control" name="kategoriblog" id="">
                                                    <option value="{{ $data->idblog->id }}">{{ $data->idblog->kategoriblog }}</option>
                                                    @foreach ($relasi as $relasiii)
                                                    <option value="{{ $relasiii->id }}">{{ $relasiii->idblog->kategoriblog }}</option>
                                                    @endforeach
                                                </select>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="custom-file-container" data-upload-id="myFirstImage">
                                                        <label>Upload Foto Blog <a href="javascript:void(0)"
                                                                class="custom-file-container__image-clear"
                                                                title="Clear Image">x</a></label>
                                                                <img src="{{ asset('blog/'. $data->foto_sampul) }}" height="80px" width="80px" alt="" srcset="">
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
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Description Blog</label>
                                                    <textarea id="editor" name="deskripsi">{!! $data->deskripsi !!}</textarea>
                                                    {{-- <div id="editor"></div> --}}
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        {{-- <h5 class="card-title">Multiple File Upload</h5> --}}
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="custom-file-container"
                                                            data-upload-id="mySecondImage">
                                                            <label>Upload Foto Produk <a href="javascript:void(0)"
                                                                    class="custom-file-container__image-clear"
                                                                    title="Clear Image">x</a></label>
                                                                    @foreach (json_decode($data->foto_produk) as $foto)
                                                                <img class="mx-1 my-1"
                                                                    src="{{ asset('fotoprodukblog/' . $foto) }}"
                                                                    alt="" width="80px" height="80px">
                                                            @endforeach
                                                            <label class="custom-file-container__custom-file">
                                                                <input type="file"
                                                                    class="custom-file-container__custom-file__custom-file-input"
                                                                    multiple name="foto_produk[]">
                                                                <input type="hidden" name="MAX_FILE_SIZE"
                                                                    value="10485760" />
                                                                <span
                                                                    class="custom-file-container__custom-file__custom-file-control"></span>
                                                            </label>
                                                            <div class="custom-file-container__image-preview"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Description Produk</label>
                                                    <textarea id="masyaallah" name="deskripsi_produk">{!! $data->deskripsi_produk !!}</textarea>
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
