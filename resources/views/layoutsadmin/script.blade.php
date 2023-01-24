<script src="{{ asset('template/assets/js/jquery-3.6.0.min.js') }}"></script>

<script src="{{ asset('template/assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('template/assets/js/feather.min.js') }}"></script>

<script src="{{ asset('template/assets/js/ckeditor.js') }}"></script>

<script src="{{ asset('template/assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<script src="{{ asset('template/assets/plugins/apexchart/apexcharts.min.js') }}"></script>
<script src="{{ asset('template/assets/plugins/apexchart/chart-data.js') }}"></script>
{{-- Select tagging --}}
<script src="{{ asset('template/assets/plugins/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('template/assets/plugins/select2/js/custom-select.js') }}"></script>
{{-- select multiple image --}}
<script src="{{ asset('template/assets/plugins/fileupload/fileupload.min.js') }}"></script>
{{-- text editor summer note --}}
<script src="{{ asset('template/assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('template/assets/js/jquery-ui.min.js') }}"></script>
{{-- tag inputs --}}
<script src="https://unpkg.com/@yaireo/tagify"></script>
<script src="https://unpkg.com/@yaireo/tagify@3.1.0/dist/tagify.polyfills.min.js"></script>
{{-- Toastr script --}}
<script src="{{ asset('template/assets/plugins/toastr/toastr.min.js') }}"></script>
<!-- data Table -->
<script src="{{ asset('template/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('template/assets/plugins/datatables/datatables.min.js') }}"></script>
{{-- MAIN JS --}}
<script src="{{ asset('template/assets/js/script.js') }}"></script>

<script src="{{ asset('template/assets/plugins/sweetalert/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('template/assets/plugins/sweetalert/sweetalerts.min.js') }}"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/35.3.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#masyaallah'))
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
