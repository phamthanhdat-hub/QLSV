<?php
//lay id cua edit
$id = $GET['sid'];

//ketnoi
require_once 'ketnoi.php';
//cau lenh de lay thong bao ve sinh vien co id = $id
$edit_sql = "SELECT * FROM sinhvien WHERE id=$id";

$result = mysqli_query($conn, $edit_sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit sinh vien</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="content">
        <h1> Form them sinh vien</h1>
        <form action="update.php" mrthod="post">
            <input type="hidden" name="sid" value="<?php echo $id;?>" id="">
    </div>
    <div class="form-group">
        <label for="">Ho ten</label>
        <input type="text" id="hoten" class="form-control" name="hoten" value="<?php echo $row['hoten']?>">
    </div>
<div class="form-group">
    <label for="">Ma sinh vien</label>
    <input type="text" name="masv" id="masv" class="form-control " value="<?php echo $row['masv']?>" >
</div>
<div class="form-group">
    <label for="">Lop</label>
    <input type="text" id="lop" name="lop" class="form-control" value="<?php echo $row['lop']?>" >
</div>
<button class="btn btn-success">Cap nhat</button>
</div>
</form>
</body>
</html>