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
        <div class="form-small d-none"></div>

        <div class="page-wrapper">
            <textarea name="" id="summernote"></textarea>
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
