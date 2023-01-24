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
                            <h3 class="page-title">Modal</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">Components</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Custom Modals</h4>
                                <p>Examples of custom modals.</p>

                                <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog"
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
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="field-1" class="form-label">Name</label>
                                                            <input type="text" class="form-control" id="field-1"
                                                                placeholder="John">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="field-2" class="form-label">Surname</label>
                                                            <input type="text" class="form-control" id="field-2"
                                                                placeholder="Doe">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="field-3" class="form-label">Address</label>
                                                            <input type="text" class="form-control" id="field-3"
                                                                placeholder="Address">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="field-4" class="form-label">City</label>
                                                            <input type="text" class="form-control" id="field-4"
                                                                placeholder="Boston">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="field-5" class="form-label">Country</label>
                                                            <input type="text" class="form-control" id="field-5"
                                                                placeholder="United States">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="field-6" class="form-label">Zip</label>
                                                            <input type="text" class="form-control" id="field-6"
                                                                placeholder="123456">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="">
                                                            <label for="field-7" class="form-label">Personal
                                                                Info</label>
                                                            <textarea class="form-control" id="field-7" placeholder="Write something about yourself"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary waves-effect"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button"
                                                    class="btn btn-info waves-effect waves-light">Save
                                                    changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-list">

                                    <button type="button" class="btn btn-success waves-effect waves-light mt-1"
                                        data-bs-toggle="modal" data-bs-target="#con-close-modal">Responsive
                                        Modal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    @include('layoutsadmin.script')
</body>

</html>
