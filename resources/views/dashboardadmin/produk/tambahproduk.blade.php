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
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6 row">
                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <label>Nama Produk</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Berat Produk</label>
                                                    <input type="text" class="form-control">
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

        <script>
            @if (Session::has('success'))
                toastr.success("{{ Session::get('success') }}")
            @endif
        </script>

        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>

        <!-- End Script -->

</body>

</html>
