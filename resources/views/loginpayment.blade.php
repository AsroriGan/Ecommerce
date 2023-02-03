<!DOCTYPE html>
<html>

<head>
    <title>Membuat Desain Form Login Dengan CSS - www.malasngoding.com</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <h1>Membuat Desain Form Login Dengan CSS <br /> www.malasngoding.com</h1>

    <div class="kotak_login">
        <p class="tulisan_login">Silahkan login</p>

        <form action="/payment" method="GET">
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username atau email ..">
            <label>Email</label>
            <input type="email" name="Email" class="form_login" placeholder="Email atau email ..">
            <label>Nohp</label>
            <input type="number" name="Nohp" class="form_login" placeholder="Nohp atau email ..">

            <label>Password</label>
            <input type="text" name="password" class="form_login" placeholder="Password ..">

            <input type="submit" class="tombol_login" value="LOGIN">

            <br />
            <br />
            <center>
                <a class="link" href="https://www.malasngoding.com">kembali</a>
            </center>
        </form>

    </div>



    @if (Session('alert-succes'))
    <script>alert("{{ Session('alert-succes') }}")</script>
    @elseif (Session('alert-failed'))
    <script>alert("{{ Session('alert-failed') }}")</script>
    @endif
</body>

</html>
