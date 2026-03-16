
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <h1>PEMPROSESAN</h1>
    <?php
    print_r($_POST);
    if(isset($_POST['nama<br>']) && isset($_POST[$_POST['email']])){
    $nama=$_POST['nama<br>'];
    $email=$_POST['email<br>'];
    echo "nama : $nama <br>";
    echo "<br>";
    echo "email : $email <br>";
    
  }

    ?>
</body>
</html>