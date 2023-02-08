<html>

<head>
    <title>Using Select2</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
</head>

<body>
    <div class="jumbotron">
        <div class="container bg-danger">
            <div class="col-md-6">
                <label>Single Select2</label>
                <select id="single" class="js-states form-control">
                    <option>Java</option>
                    <option>Javascript</option>
                    <option>PHP</option>
                    <option>Visual Basic</option>
                </select>
            </div>
            {{-- <div class="col-md-6">
                <label>Multiple Select2</label>
                <select id="multiple" class="js-states form-control" multiple>
                    <option>Java</option>
                    <option>Javascript</option>
                    <option>PHP</option>
                    <option>Visual Basic</option>
                </select>
            </div> --}}
        </div>
    </div>
    <form action="/tes">
        <div>
            <input type="radio" name="tes" value="" required>
        </div>
        <div>
            <input type="radio" name="hkjhkh" value="" required>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Default radio
            </label>
        </div>
        <button type="submit">button</button>
    </form>
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script>
        $("#single").select2({
            placeholder: "Select a programming language",
            allowClear: true
        });
        // $("#multiple").select2({
        //     placeholder: "Select a programming language",
        //     allowClear: true
        // });
    </script>
</body>

</html>
