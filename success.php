<!DOCTYPE html>
<html>
<head>
    <title>Success</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        echo "<h2>Thank you for filling the form, $name!</h2>";
    } else {
        echo "<h2>Error: Invalid form submission.</h2>";
    }
    ?>
</body>
</html>

