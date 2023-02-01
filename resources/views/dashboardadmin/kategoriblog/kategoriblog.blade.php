<!DOCTYPE html>
<html lang="en">

@include('layoutsadmin.head')

<body>

    <div class="main-wrapper">

        @include('layoutsadmin.navbar')


        @include('layoutsadmin.sidebar')


        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            {{-- <h3 class="page-title">Data Tables</h3> --}}
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">KategoriBlog</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">KategoriBlog</h4>
                                <button type="button" class="btn btn-success waves-effect waves-light mt-1"
                                    data-bs-toggle="modal" data-bs-target="#con-close-modal">Responsive
                                    Modal</button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-stripped">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>Kategori</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @foreach ($data as $kategoriblog)
                                                <tr>
                                                    <td>{{ $no }}</td>
                                                    <td> {{ $kategoriblog->kategoriblog }}
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-sm  btn-white text-success me-2" data-bs-toggle="modal"
                                                            data-bs-target="#con-close-modal{{ $kategoriblog->id }}"><i
                            class="far fa-edit me-1"></i> Edit</button>
                                                        {{-- <button type="button"
                                                            class="btn btn-success waves-effect waves-light mt-1"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#con-close-modal{{ $kategoriblog->id }}">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </button> --}}
                                                         <button class="btn btn-sm btn-white text-danger me-2 delete" onclick="destroy({{ $kategoriblog->id }})"><i
                            class="far fa-trash-alt me-1"></i>Hapus</button>
                                                    </td>
                                                </tr>
                                                <!-- Modal -->
                                                <div id="con-close-modal{{ $kategoriblog->id }}" class="modal fade" tabindex="-1"
                                                    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
                                                    style="display: none;">
                                                    <div class="modal-dialog">
                                                        <form action="/updatekategoriblog/{{ $kategoriblog->id }}" method="post">
                                                            @csrf
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Update Kategori Blog</h4>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body p-4">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label for="field-3"
                                                                                    class="form-label">Kategori
                                                                                    Blog</label>
                                                                                <input type="text"
                                                                                    name="kategoriblog"
                                                                                    class="form-control" id="field-3"
                                                                                    placeholder="Masukkan Kategori Blog" value="{{ $kategoriblog->kategoriblog }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary waves-effect"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="sumbit"
                                                                        class="btn btn-info waves-effect waves-light">Save
                                                                        changes</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <?php $no++; ?>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <form action="/insertkategoriblog" method="post">
                                        @csrf
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Tambah Kategori Blog</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body p-4">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="field-3" class="form-label">Kategori
                                                                Blog</label>
                                                            <input type="text" name="kategoriblog"
                                                                class="form-control" id="field-3"
                                                                placeholder="Masukkan Kategori Blog">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary waves-effect"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="sumbit"
                                                    class="btn btn-info waves-effect waves-light">Save
                                                    changes</button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Button trigger modal -->
                </div>
            </div>
        </div>
    </div>

    </div>

    @include('layoutsadmin.script')
</body>

</html>
