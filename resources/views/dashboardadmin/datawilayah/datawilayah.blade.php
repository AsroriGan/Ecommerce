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
                {{-- <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Data Tables</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Data Tables</li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Default Datatable</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="table" class="datatable table table-stripped">
                                        <thead>
                                            <tr>
                                                <th>N0 .</th>
                                                <th>Provinsi</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Jawa timur</td>
                                                <td ><a href="javascript:void(0);"
                                                        class="btn btn-sm
                                                    btn-white
                                                    text-success me-2"><i
                                                            class="far
                                                        fa-edit me-1"></i>
                                                        Edit</a>
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-sm
                                                    btn-white
                                                    text-danger me-2"><i
                                                            class="far
                                                        fa-trash-alt
                                                        me-1"></i>Delete</a>
                                                </td>
                                            </tr>
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

    <!-- End Scrip -->

</body>

</html>
