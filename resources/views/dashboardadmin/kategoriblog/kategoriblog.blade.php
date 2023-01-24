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
                                {{-- <p class="card-text">
                                    This is the most basic example of the datatables with zero configuration. Use the
                                    <code>.datatable</code> class to initialize datatables.
                                </p> --}}
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
                                                    <td> {{ $kategoriblog->kategori }}
                                                    </td>
                                                    <td> <button type="button"
                                                            class="btn btn-success waves-effect waves-light mt-1"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#con-close-modal{{ $kategoriblog->id }}">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </button></td>
                                                </tr>
                                                <!-- Modal -->
                                                <div id="con-close-modal{{ $kategoriblog->id }}" class="modal fade"
                                                    tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                                    aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Modal Content is Responsive</h4>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body p-4">
                                                                <div class="row">
                                                                    <form action="/updatekategoriblog/{{ $kategoriblog->id }}"
                                                                        method="post" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">Close</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Save
                                                                                changes</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php $no++; ?>
                                            @endforeach
                                        </tbody>
                                    </table>
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
