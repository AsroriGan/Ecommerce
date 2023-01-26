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
                <div class="row justify-content-lg-center">
                    <div class="col-lg-10">

                        <div class="page-header">
                            <div class="row">
                                <div class="col">
                                    <h3 class="page-title">Profile Admin</h3>
                                </div>
                            </div>

                            <div class="profile-cover">
                                <div class="profile-cover-wrap">
                                    <img class="profile-cover-img" src="{{ asset('assets/images/admin/' . Auth::user()->foto) }}"
                                        alt="Profile Cover">

                                    <div class="cover-content">
                                        <div class="custom-file-btn">
                                            <input type="file" class="custom-file-btn-input" id="cover_upload">
                                            <label class="custom-file-btn-label btn btn-sm btn-white"
                                                for="cover_upload">
                                                <i class="fas fa-camera"></i>
                                                <span class="d-none d-sm-inline-block ms-1">Update Cover</span>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="text-center mb-5">
                                <label class="avatar avatar-xxl profile-cover-avatar" for="avatar_upload">
                                    <img class="avatar-img" src="{{ asset('assets/images/admin/' . Auth::user()->foto) }}" alt="Profile Image">
                                    {{-- <input name="foto" type='file' id="avatar_upload"
                                                class="ec-image-upload" accept=".png, .jpg, .jpeg" /> --}}
                                    <input name="foto" type="file" id="avatar_upload">
                                    <span class="avatar-edit">
                                        <i data-feather="edit-2" class="avatar-uploader-icon shadow-soft"></i>
                                    </span>
                                </label>
                                <h2>{{Auth::user()->name}} <i class="fas fa-certificate text-primary small"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Verified"></i></h2>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <i class="far fa-building"></i> <span>Hafner Pvt Ltd.</span>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fas fa-map-marker-alt"></i> West Virginia, US
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="far fa-calendar-alt"></i> <span>Joined November 2017</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>Profile</span>
                                                <a class="btn btn-sm btn-white" href="/Edit_Admin">Edit</a>
                                            </h5>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled mb-0">
                                                <li class="py-0">
                                                    <h5>Nama</h5>
                                                </li>
                                                <li>
                                                    <h6>{{Auth::user()->name}}</h6>
                                                </li>
                                                <li class="pt-2 pb-0">
                                                    <h5>No.Telepon</h5>
                                                </li>
                                                <li>
                                                    <h6>{{Auth::user()->notelepon}}</h6>
                                                </li>
                                                <li class="pt-2 pb-0">
                                                    <h5>Sebagai</h5>
                                                </li>
                                                <li>
                                                    <h6>{{Auth::user()->role}}</h6>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title">Activity</h5>
                                        </div>
                                        <div class="card-body card-body-height">
                                            <ul class="activity-feed">
                                                <li class="feed-item">
                                                    <div class="feed-date">Nov 16</div>
                                                    <span class="feed-text"><a href="profile.html">Brian Johnson</a> has
                                                        paid the invoice <a
                                                            href="view-invoice.html">"#DF65485"</a></span>
                                                </li>
                                                <li class="feed-item">
                                                    <div class="feed-date">Nov 7</div>
                                                    <span class="feed-text"><a href="profile.html">Marie Canales</a> has
                                                        accepted your estimate <a
                                                            href="view-estimate.html">#GTR458789</a></span>
                                                </li>
                                                <li class="feed-item">
                                                    <div class="feed-date">Oct 24</div>
                                                    <span class="feed-text">New expenses added <a
                                                            href="expenses.html">"#TR018756</a></span>
                                                </li>
                                                <li class="feed-item">
                                                    <div class="feed-date">Oct 24</div>
                                                    <span class="feed-text">New expenses added <a
                                                            href="expenses.html">"#TR018756</a></span>
                                                </li>
                                                <li class="feed-item">
                                                    <div class="feed-date">Oct 24</div>
                                                    <span class="feed-text">New expenses added <a
                                                            href="expenses.html">"#TR018756</a></span>
                                                </li>
                                                <li class="feed-item">
                                                    <div class="feed-date">Oct 24</div>
                                                    <span class="feed-text">New expenses added <a
                                                            href="expenses.html">"#TR018756</a></span>
                                                </li>
                                                <li class="feed-item">
                                                    <div class="feed-date">Oct 24</div>
                                                    <span class="feed-text">New expenses added <a
                                                            href="expenses.html">"#TR018756</a></span>
                                                </li>
                                                <li class="feed-item">
                                                    <div class="feed-date">Jan 27</div>
                                                    <span class="feed-text"><a href="profile.html">Robert Martin</a>
                                                        gave
                                                        a review for <a href="product-details.html">"Dell
                                                            Laptop"</a></span>
                                                </li>
                                                <li class="feed-item">
                                                    <div class="feed-date">Jan 14</div>
                                                    <span class="feed-text">New customer registered <a
                                                            href="profile.html">"Tori Carter"</a></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Start Script -->
        <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

        @include('layoutsadmin.script')

        <!-- End Script -->
</body>

</html>
