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
                            <h3 class="page-title">Ganti Password</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-4">

                        <div class="widget settings-menu">
                            <ul>
                                <li class="nav-item">
                                    <a href="/Edit_Admin" class="nav-link ">
                                        <i class="far fa-user"></i> <span>Peraturan Profail</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/GantiPasword" class="nav-link active">
                                        <i class="fas fa-unlock-alt"></i> <span>Ganti Pasword</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-xl-9 col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Ganti Password</h5>
                            </div>
                            <div class="card-body">

                                <form action="/gantipasswordpost" method="POST">
                                    @csrf
                                    <div class="row form-group">
                                        <label for="current_password"
                                            class="col-sm-3 col-form-label input-label">Password Lama</label>
                                        <div class="col-sm-9">
                                            <input type="password" name="oldpassword" class="form-control" id="current_password"
                                                placeholder="Masukan Password Lama" >
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="new_password" class="col-sm-3 col-form-label input-label">Password Baru</label>
                                        <div class="col-sm-9">
                                            <input type="password" name="newpassword" class="form-control" id="new_password"
                                                placeholder="Masukan Password Baru">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="confirm_password"
                                            class="col-sm-3 col-form-label input-label">Confirmasi Password Baru</label>
                                        <div class="col-sm-9">
                                            <div class="mb-3">
                                                <input type="password" name="newpassword" class="form-control" id="confirm_password"
                                                    placeholder="Confirmasi Password Baru">
                                            </div>
                                        </div>
                                    </div>
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
