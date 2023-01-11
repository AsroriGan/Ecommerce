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
                                <li class="breadcrumb-item active">Slider</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Slider</h4>
                                {{-- <p class="card-text">
                                    This is the most basic example of the datatables with zero configuration. Use the
                                    <code>.datatable</code> class to initialize datatables.
                                </p> --}}
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="datatable table table-stripped">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>Foto 1</th>
                                                <th>Foto 2</th>
                                                <th>Foto 3</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @foreach ($data as $slider)
                                                <tr>
                                                    <td>{{ $no }}</td>
                                                    <td><img src="{{ asset('slider/' . $slider->foto1) }}"
                                                            height="120px" width="240px" alt="" srcset="">
                                                    </td>
                                                    <td><img src="{{ asset('slider/' . $slider->foto2) }}"
                                                            height="120px" width="240px" alt="" srcset="">
                                                    </td>
                                                    <td><img src="{{ asset('slider/' . $slider->foto3) }}"
                                                            height="120px" width="240px" alt="" srcset="">
                                                    </td>
                                                    <td> <button type="button" class="btn btn-success waves-effect waves-light mt-1"
                                        data-bs-toggle="modal" data-bs-target="#con-close-modal{{ $slider->id }}">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </button></td>
                                                </tr>
                                                <!-- Modal -->
                                                <div id="con-close-modal{{ $slider->id }}" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Modal Content is Responsive</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body p-4">
                                                <div class="row">
                                                    <form action="/updateslider/{{ $slider->id }}" method="post"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1"
                                                                    class="form-label">Update
                                                                    Foto 1</label>
                                                                <br />
                                                                <img class="img mb-3"
                                                                    src="{{ asset('slider/' . $slider->foto1) }}"
                                                                    alt="" style="width: 100px;">
                                                                <input type="file" name="foto1"
                                                                    class="form-control" id="exampleInputEmail1"
                                                                    aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1"
                                                                    class="form-label">Update
                                                                    Foto 2</label>
                                                                <br />
                                                                <img class="img mb-3"
                                                                    src="{{ asset('slider/' . $slider->foto2) }}"
                                                                    alt="" style="width: 100px;">
                                                                <input type="file" name="foto2"
                                                                    class="form-control" id="exampleInputEmail1"
                                                                    aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1"
                                                                    class="form-label">Update
                                                                    Foto 3</label>
                                                                <br />
                                                                <img class="img mb-3"
                                                                    src="{{ asset('slider/' . $slider->foto3) }}"
                                                                    alt="" style="width: 100px;">
                                                                <input type="file" name="foto3"
                                                                    class="form-control" id="exampleInputEmail1"
                                                                    aria-describedby="emailHelp">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save
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
