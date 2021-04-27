<?php

require_once "php/conexionBD.php";

$foo = Database::getDatabase();
            $sql="SELECT * FROM productos";
            $foo->query($sql);
            $row = $foo->getArrayAll();
            
               $foto=$row[0]["imagen"];
               var_dump($foto);
               
            



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php echo "<img src='$foto' alt='Card image cap'>";?>
   
</body>
</html>