<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form1</title>
</head>
<style>
    h1{
        text-align: center;
    }
    label{
        margin-left: 500px;
    }
    input {
        margin-left: 30px;
        margin-bottom: 20px;
    }
    .dientich{
        margin-left: 505px;
        background-color: blue;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 7px;
    }
</style>
<body>
    <h1>Tính diện tích hình chữ nhật</h1>
    
    <?php
    $result = null;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : 0;
        $num2 = isset($_POST['num2']) ? floatval($_POST['num2']) : 0;
        $result = $num1 * $num2;
    }
    ?>

    <form method="post">
        <label for="num1">Chiều Dài :</label>
        <input type="text" name="num1" required>
        <br>
        <label for="num2">Chiều Rộng</label>
        <input type="text" name="num2" required>
        <br>
        <input class="dientich" type="submit" value="Diện Tích">
        <?php if ($result !== null): ?>
        <input type="text" name="dientich" value="<?php echo $result; ?>">
    <?php endif; ?>
    </form>
</body>
</html>
