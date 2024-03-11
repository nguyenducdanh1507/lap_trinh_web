<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap-grid.min.css">
    <title>Lab 6 Solutions</title>
</head>
<?php
$chieu_dai = '';
$chieu_rong = '';
$dien_tich = '';
if (isset($_POST['tinh_dien_tich'])) {
    require 'da_giac.php';
    require 'hinh_chu_nhat.php';

    $hcn = new hinh_chu_nhat();

    $hcn->chieu_dai = $_POST['chieu_dai'];
    $hcn->chieu_rong = $_POST['chieu_rong'];

    $dien_tich = $hcn->dien_tich();
    $chieu_dai = $hcn->chieu_dai;
    $chieu_rong = $hcn->chieu_rong;
}
?>
<body>
<div class="container">
    <div class="row" style="margin: 0 auto;>
        <div class="col-md-6">
            <form method="POST">
                <!-- Chieu dai -->
                <div class="form-outline mb-4">
                    Chiều dài: <input type="text" name="chieu_dai" class="form-control" value="<?php echo $chieu_dai ?>"/>
                </div>

                <!-- Chieu rong -->
                <div class="form-outline mb-4">
                    Chiều rộng: <input type="text" name="chieu_rong" class="form-control"  value="<?php echo $chieu_rong ?>"/>
                </div>

                <!-- Dien tich -->
                <div class="form-outline mb-4">
                    Diện tích: <label><?php if (isset($dien_tich)) echo $dien_tich?></label>
                </div>

                <!-- Submit button -->
                <button type="submit" name="tinh_dien_tich" class="btn btn-primary btn-block mb-4">Tính diện tích</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>