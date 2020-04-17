<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
</head>
<body>
  <?php
    $password = $_GET["password"];
    if($password == "1111"){
        echo "환영합니다";
    } else {
        echo "허가되지 않았습니다";
    }
   ?>
</body>
</html>
