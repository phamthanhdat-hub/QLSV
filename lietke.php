<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liet ke danh sach sinh vien</title>
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
    <div class="container">
        <h1> Danh sach sinh vien </h1>
        <a href="them.html" class="btn btn-success"> Them sinh vien</a>
    <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Ma sinh vien</th>
        <th>Ho ten</th>
        <th>Lop</th>
        <th>Thao tac</th>
      </tr>
    </thead>
    <tbody>
<?php
//ketnoi
require_once 'ketnoi.php';
//cau lenh
$lietke_sql = "SELECT * FROM sinhvien order by lop, hoten";
//thuc thi cau lenh
$result = mysqli_query($conn, $lietke_sql);
//duyet qua result va in ra
while ($r = mysqli_fetch_assoc($result)){
    ?>
    echo $r['masv'] . " - " .$r['hoten'] . " - ". $r['lop'];
    <tr>
        <td><?php echo $r['masv'];?></td>
        <td><?php echo $r['hoten'];?></td>
        <td><?php echo $r['lop'];?></td>
        <td><a href="edit.php?sid=<?php echo $r['id'];?>"class="btn btn-info">Sửa</a> 
        <a onclick="return confirm('Bạn có muốn xóa sinh viên nay không');"  href="xoá.php?sid=<?php echo $r['id'];?>" class="btn btn-danger">Xóa</a></td>
      </tr>
    <?php
}
?>
</tbody>
  </table>
      
</div>
</body>
</html>
