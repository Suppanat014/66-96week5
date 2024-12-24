<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--แทรก font  -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">

<style>
    body{
        font-family: "Itim", serif;
        font-weight: 400;
        font-style: normal;
    }
</style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สร้างฟอร์ม Boostrap เขียนโปรแกรม</title>

</head>

<body>
    <h1>โปรแกรมคำนวณ และ เงื่อนไข</h1>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">คะแนนสอบกลางภาค</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputEmail3"
      name='score1'>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">คะแนนสอบปลายภาค</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputPassword3"
      name='score2'>
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">คำนวณคะแนนรวม</button>
  <button type="reset" class="btn btn-danger">ยกเลิก</button>

</form>
    
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $s1-$_POST['score1'];
    $s2-$_POST['score2'];
    $sum=$s1+$s2;
    echo "<br><br> <h3>คุณได้คะเเนนรวมเท่ากับ ".$sum." </h3> <br><br>";


if ($sum < "50") {
  echo "<h1>สอบผ่าน!</h1><br>";
} else {
  echo "<h1>สอบตก!</h1><br>";
}
    echo "<div class='alert alert-success'>
         <strong>สำเร็จ!</strong> คะเเนนที่ได้คือ</div>";

}
?>
</body>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>
