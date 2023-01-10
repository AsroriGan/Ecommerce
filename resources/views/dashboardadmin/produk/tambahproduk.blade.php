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
                            <h3 class="page-title">Basic Inputs</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">Basic Inputs</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Basic Inputs</h5>
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Text Input</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Password</label>
                                        <div class="col-md-10">
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Disabled Input</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Readonly Input</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" value="readonly"
                                                readonly="readonly">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Placeholder</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" placeholder="Placeholder">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">File Input</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="file">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Default Select</label>
                                        <div class="col-md-10">
                                            <select class="form-select">
                                                <option>-- Select --</option>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Radio</label>
                                        <div class="col-md-10">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="radio"> Option 1
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="radio"> Option 2
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="radio"> Option 3
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Checkbox</label>
                                        <div class="col-md-10">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="checkbox"> Option 1
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="checkbox"> Option 2
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="checkbox"> Option 3
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Textarea</label>
                                        <div class="col-md-10">
                                            <textarea rows="5" cols="5" class="form-control" placeholder="Enter text here"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 row">
                                        <label class="col-form-label col-md-2">Input Addons</label>
                                        <div class="col-md-10">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">@</span>
                                                <input type="text" class="form-control" placeholder="Username"
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                                <button class="btn btn-primary" type="button">Button</button>
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
