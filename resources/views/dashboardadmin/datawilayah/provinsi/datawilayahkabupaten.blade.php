<!DOCTYPE html>
<html lang="en">
@include('layoutsadmin.head')

<body class="nk-body bg-lighter npc-default has-sidebar no-touch nk-nio-theme">

    <div class="main-wrapper">

        <!-- navbar Star -->

        @include('layoutsadmin.navbar')

        <!-- End Navbar -->


        <!-- Sidebar Star -->

        @include('layoutsadmin.sidebar')

        <!-- End Sidebar -->


        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-6">
                        <div class="page-header">
                            <div class="row">
                                <div class="col">
                                    <h3 class="page-title">Data wilayah / Kabupaten</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card invoices-tabs-card">
                            <div class="card-body card-body pt-0 pb-0">
                                <div class="invoices-main-tabs border-0 pb-0">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12 col-md-12">
                                            <div
                                                class="invoices-settings-btn
                                        invoices-settings-btn-one">
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#con-close-modal">
                                                    <i data-feather="plus-circle"></i>
                                                    Tambah data baru
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel" aria-hidden="true" style="display:none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Kecamatan</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="/insertkabupaten" method="POST">
                                @csrf
                                <div class="modal-body p-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="field-1" class="form-label">Provinsi</label>
                                                <select class="form-select" name="provinsi">
                                                    <option>Pilih Provinsi</option>
                                                    @foreach ($provinsi as $row)
                                                        <option value="{{ $row->id }}">{{ $row->provinsi }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="field-1" class="form-label">Kabupaten</label>
                                                <input type="text" name="kabupaten" class="form-control"
                                                    id="field-1" placeholder="Masukkan kabupaten">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-info waves-effect waves-light">Save
                                        changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            {{-- <div class="card-header">
                                <h4 class="card-title">Default Datatable</h4>
                            </div> --}}
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="table" class="datatable table table-stripped">
                                        <thead>
                                            <tr>
                                                <th>N0 .</th>
                                                <th>Provinsi</th>
                                                <th>Kabupaten / Kota</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($kabupaten as $row)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $row->rprovinsi->provinsi }}</td>
                                                    <td>{{ $row->kabupaten }}</td>
                                                    <td><a href="javascript:void(0);"
                                                            class="btn btn-sm
                                                    btn-white
                                                    text-success me-2"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#con-close-modal{{ $row->id }}"><i
                                                                class="far
                                                        fa-edit me-1"></i>
                                                            Edit</a>
                                                        <a data-id="{{ $row->id }}"
                                                            data-nama="{{ $row->kabupaten }}" href="javascript:void(0);"
                                                            class="btn btn-sm
                                                    btn-white
                                                    text-danger me-2 delete"><i
                                                                class="far
                                                        fa-trash-alt
                                                        me-1"></i>Delete</a>
                                                    </td>
                                                </tr>
                                                <div id="con-close-modal{{ $row->id }}" class="modal fade"
                                                    tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                                    aria-hidden="true" style="display:none;">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Edit Kabupaten</h4>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action="/editkabupaten/{{ $row->id }}"
                                                                method="POST">
                                                                @csrf
                                                                <div class="modal-body p-4">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label for="field-1"
                                                                                    class="form-label">Provinsi</label>
                                                                                <select class="form-select"
                                                                                    name="provinsi">
                                                                                    <option
                                                                                        value="{{ $row->provinsi }}">
                                                                                        {{ $row->rprovinsi->provinsi }}
                                                                                    </option>
                                                                                    @foreach ($provinsi as $prov)
                                                                                        <option
                                                                                            value="{{ $prov->id }}">
                                                                                            {{ $prov->provinsi }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label
                                                                                    class="form-label">Kabupaten</label>
                                                                                <input type="text" name="kabupaten"
                                                                                    class="form-control"
                                                                                    value="{{ $row->kabupaten }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary waves-effect"
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

    <!-- Scrip Star -->

    @include('layoutsadmin.script')
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
    </script>
    <script>
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
    </script>
    <!-- End Scrip -->

</body>

</html>
