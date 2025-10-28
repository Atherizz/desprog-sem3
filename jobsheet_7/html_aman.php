<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form HTML Aman</title>
</head>
<body>
    <h2>Contoh Input Aman dengan htmlspecialchars() dan Validasi Email</h2>

    <form method="post" action="">
        <label for="input">Masukkan teks (boleh mengandung tag HTML):</label><br>
        <input type="text" name="input" id="input" required><br><br>

        <label for="email">Masukkan Email:</label><br>
        <input type="text" name="email" id="email" required><br><br>

        <input type="submit" value="Kirim">
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        echo "<h3>Hasil Input Aman:</h3>";
        echo "<p>$input</p>";

        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email valid: $email";
        } else {
            echo "Email tidak valid.";
        }
    }
    ?>
</body>
</html>
