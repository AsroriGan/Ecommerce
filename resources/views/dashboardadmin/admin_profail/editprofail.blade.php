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
                        <div class="col-sm-6">
                            <h3 class="page-title">Edit Profail Admin</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-4">

                        <div class="widget settings-menu">
                            <ul>
                                <li class="nav-item">
                                    <a href="/Edit_Admin" class="nav-link active">
                                        <i class="far fa-user"></i> <span>Peraturan Profail</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/GantiPasword" class="nav-link">
                                        <i class="fas fa-unlock-alt"></i> <span>Ganti Pasword</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-xl-9 col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Informasi Profail</h5></h5>
                            </div>
                            <div class="card-body">

                                <form action="/editadminpost/{{ Auth::user()->id }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row form-group">
                                        <label for="name" class="col-sm-3 col-form-label input-label">Foto Profail</label>
                                        <div class="col-sm-9">
                                            <div class="d-flex align-items-center">
                                                <label class="avatar avatar-xxl profile-cover-avatar m-0"
                                                    for="edit_img">
                                                    <img id="avatarImg" class="avatar-img"
                                                    src="{{ asset('assets/images/admin/' . Auth::user()->foto) }}" alt="Profile Image">
                                                    <input name="foto" type="file" id="edit_img">
                                                    <span class="avatar-edit">
                                                        <i data-feather="edit-2"
                                                            class="avatar-uploader-icon shadow-soft"></i>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="name" class="col-sm-3 col-form-label input-label">Name</label>
                                        <div class="col-sm-9">
                                            <input name="name" type="text" class="form-control" id="name"
                                                placeholder="Your Name" value="{{ Auth::user()->name }}" >
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="email"
                                            class="col-sm-3 col-form-label input-label">Email</label>
                                        <div class="col-sm-9">
                                            <input name="email" type="email" class="form-control" id="email"
                                                placeholder="Email" value="{{ Auth::user()->email }}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="phone" class="col-sm-3 col-form-label input-label">No.Telepone <span
                                                class="text-muted">(Optional)</span></label>
                                        <div class="col-sm-9">
                                            <input name="notelepon" type="text" class="form-control" id="phone"
                                                placeholder="+x(xxx)xxx-xx-xx" value="{{ Auth::user()->notelepon }}">
                                        </div>
                                    </div>
                                     {{--<div class="row form-group">
                                        <label for="location"
                                            class="col-sm-3 col-form-label input-label">Location</label>
                                        <div class="col-sm-9">
                                            <div class="mb-3">
                                                <input type="text" class="form-control" id="location"
                                                    placeholder="Country" value="United States">
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" class="form-control" placeholder="City"
                                                    value="Charleston">
                                            </div>
                                            <input type="text" class="form-control" placeholder="State"
                                                value="West Virginia">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="addressline1" class="col-sm-3 col-form-label input-label">Address
                                            line 1</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="addressline1"
                                                placeholder="Your address" value="2681  Columbia Mine Road">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="addressline2" class="col-sm-3 col-form-label input-label">Address
                                            line 2 <span class="text-muted">(Optional)</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="addressline2"
                                                placeholder="Your address">
                                        </div>
                                    </div> --}}
                                    {{-- <div class="row form-group">
                                        <label for="zipcode" class="col-sm-3 col-form-label input-label">Zip
                                            code</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="zipcode"
                                                placeholder="Your zip code" value="25301">
                                        </div>
                                    </div> --}}
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                    </div>
                                </form>

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
