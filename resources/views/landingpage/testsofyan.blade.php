<html lang="en">

@include('layoutsadmin.Head')

<body>
    <div class="m-5 col-md-6">
        <input id="tags" name='tags' value='PHP,Laravel' class="form-control">
    </div>
</body>
@include('layoutsadmin.script')
<script>
    // The DOM element you wish to replace with Tagify
    var input = document.querySelector('#tags');

    // initialize Tagify on the above input node reference
    new Tagify(input)
</script>

</html>
