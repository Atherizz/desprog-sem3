<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form Input dengan Validasi (AJAX + Password)</title>
    <script src="jquery-3.7.1.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi (AJAX + Password)</h1>

    <form id="myForm">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span>
        <br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span>
        <br><br>

        <input type="submit" value="Submit">
    </form>

    <hr>
    <div id="hasil"></div>

    <script>
    $(document).ready(function () {
        $("#myForm").submit(function (event) {
            event.preventDefault(); 

            var nama = $("#nama").val();
            var email = $("#email").val();
            var password = $("#password").val();
            var valid = true;

            if (nama === "") {
                $("#nama-error").text("Nama harus diisi.");
                valid = false;
            } else {
                $("#nama-error").text("");
            }

            if (email === "") {
                $("#email-error").text("Email harus diisi.");
                valid = false;
            } else {
                $("#email-error").text("");
            }

            if (password === "") {
                $("#password-error").text("Password harus diisi.");
                valid = false;
            } else if (password.length < 8) {
                $("#password-error").text("Password minimal 8 karakter.");
                valid = false;
            } else {
                $("#password-error").text("");
            }

            if (valid) {
                $.ajax({
                    url: "form_validasi.php", 
                    type: "POST",
                    data: { nama: nama, email: email, password: password },
                    success: function (response) {
                        $("#hasil").html(response);
                    },
                    error: function () {
                        $("#hasil").html("<p style='color:red;'>Terjadi kesalahan saat mengirim data.</p>");
                    }
                });
            }
        });
    });
    </script>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $errors = [];

    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }

    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    if (empty($password)) {
        $errors[] = "Password harus diisi.";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password minimal 8 karakter.";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    } else {
        echo "<p style='color:black;'>Data berhasil dikirim:<br>
        Nama = $nama<br>Email = $email<br>Password = $password</p>";
    }
}
?>
